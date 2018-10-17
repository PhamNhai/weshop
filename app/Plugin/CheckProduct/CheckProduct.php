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

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class CheckProduct
{
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function onControllerProductDetail()
    {
        $app = $this->app;

        $id = $app['request']->attributes->get('id');

        $arr = array();
        $arr = $app['session']->get('plugin.check_product.product');
        $arr[] = $id;
        $arr = array_unique($arr);
        $max = $app['config']['CheckProduct']['const']['PLG_CHECK_PRODUCT_MAX'];
        $arr = array_slice($arr, (- $max), $max);
        $app['session']->set('plugin.check_product.product', $arr);
    }

}
