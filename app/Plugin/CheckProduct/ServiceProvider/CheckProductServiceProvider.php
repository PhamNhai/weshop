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

namespace Plugin\CheckProduct\ServiceProvider;

use Eccube\Application;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class CheckProductServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        $app->match('/block/check_product', '\Plugin\CheckProduct\Controller\Block\CheckProductController::index')->bind('block_check_product');
    }

    public function boot(BaseApplication $app)
    {
    }
}