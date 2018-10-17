<?php

namespace Plugin\CheckProduct\Controller\Block;

use Eccube\Application;

class CheckProductController
{
    public function index(Application $app)
    {
        $productId = $app['session']->get('plugin.check_product.product') ?: array();
        $Products = array();
        foreach ($productId as $id) {
            $Product = $app['eccube.repository.product']->find($id);
            if($Product && $Product->getDelFlg() == false && $Product->isEnable()){
                $Products[] = $Product;
            }
        }

        return $app->render('Block/check_product.twig', array('Products'=>$Products));
    }
}
