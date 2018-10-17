<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\CheckProduct;

use Eccube\Plugin\AbstractPluginManager;
use Eccube\Entity\Master\DeviceType;
use Symfony\Component\Filesystem\Filesystem;

class PluginManager extends AbstractPluginManager
{

    public function install($config, $app)
    {
        // $this->migrationSchema($app, __DIR__ . '/Migration', $config['code']);

        // ファイルコピー
        $fs = new Filesystem();
        $filename = '/template/default/Block/check_product.twig';
        $fs->copy(__DIR__ . '/Resource' . $filename, $app['config']['root_dir'] . '/app' . $filename);

        // ブロック追加
        $DeviceType = $app['eccube.repository.master.device_type']->find(DeviceType::DEVICE_TYPE_PC);
        $Block = $app['eccube.repository.block']->newBlock($DeviceType);
        $Block->setName('最近チェックした商品')
        ->setFileName('check_product')
        ->setLogicFlg('1')
        ->setDeletableFlg('0');
        $app['orm.em']->persist($Block);
        $app['orm.em']->flush();
    }

    public function uninstall($config, $app)
    {
        // $this->migrationSchema($app, __DIR__ . '/Migration', $config['code'], 0);

        // ファイル削除
        $fs = new Filesystem();
        $fs->remove($app['config']['root_dir'] . '/app/template/default/Block/check_product.twig');

        // ブロック削除
        $DeviceType = $app['eccube.repository.master.device_type']->find(DeviceType::DEVICE_TYPE_PC);
        $Block = $app['eccube.repository.block']->findOneBy(array(
            'DeviceType' => $DeviceType,
            'file_name' => 'check_product'
        ));
        $app['orm.em']->remove($Block);
        $app['orm.em']->flush();
    }

    public function enable($config, $app)
    {
    }

    public function disable($config, $app)
    {
    }

    public function update($config, $app)
    {
    }
}