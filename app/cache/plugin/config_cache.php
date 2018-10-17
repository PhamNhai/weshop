<?php return array (
  'CheckProduct' => 
  array (
    'config' => 
    array (
      'name' => '最近チェックした商品',
      'event' => 'CheckProduct',
      'code' => 'CheckProduct',
      'version' => 1.1,
      'service' => 
      array (
        0 => 'CheckProductServiceProvider',
      ),
      'const' => 
      array (
        'PLG_CHECK_PRODUCT_MAX' => 5,
      ),
    ),
    'event' => 
    array (
      'eccube.event.controller.product_detail.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerProductDetail',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'Recommend' => 
  array (
    'config' => 
    array (
      'name' => 'おすすめ商品管理プラグイン',
      'code' => 'Recommend',
      'version' => '2.0.1',
      'service' => 
      array (
        0 => 'RecommendServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => NULL,
  ),
  'Shiro8Welcome3' => 
  array (
    'config' => 
    array (
      'name' => 'ようこそプラグイン',
      'version' => 1.0,
      'code' => 'Shiro8Welcome3',
      'service' => 
      array (
        0 => 'Shiro8Welcome3ServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.front.request' => 
      array (
        0 => 
        array (
          0 => 'onRequestFront',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.front.response' => 
      array (
        0 => 
        array (
          0 => 'onResponseFront',
          1 => 'NORMAL',
        ),
      ),
      'default_frame.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'error.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'pagination.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/search_product.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/news.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/new_product.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/logo.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/login.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/garally.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/free.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/footer.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/category.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/cart.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Block/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Cart/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Contact/complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Contact/confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Contact/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Entry/activate.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Entry/complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Entry/confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Entry/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Forgot/complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Forgot/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Forgot/reset.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Form/form_layout.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Help/about.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Help/agreement.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Help/guide.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Help/privacy.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Help/tradelaw.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mail/contact_mail.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mail/customer_withdraw_mail.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mail/entry_complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mail/entry_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mail/forgot_mail.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mail/order.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mail/reset_complete_mail.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/change.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/change_complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/delivery.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/delivery_edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/favorite.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/history.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/login.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/navi.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/withdraw.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/withdraw_complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/withdraw_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Product/list.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/login.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/nonmember.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/shipping.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/shipping_edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/shipping_multiple.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/shipping_multiple_edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/shopping_error.twig' => 
      array (
        0 => 
        array (
          0 => 'onReplace',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);