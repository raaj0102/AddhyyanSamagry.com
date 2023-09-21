<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'MainC';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route ['homepage'] = 'MainC/index';

//==================user====================================================
$route['account-loginPage'] = 'MainC/login_page';
$route['registration-form'] = 'MainC/register_user_data';
$route['login-user'] = 'AuthenC/user_login';
$route['logout-user'] = 'AuthenC/user_logout';
$route['all-products'] = 'UserC/pro_catList';
$route['all-pro-list'] = 'UserC/pro_list';
$route['list-view'] = 'UserC/view_list';
$route['single-product'] = 'UserC/pro_single';
$route['all-categoryPage'] = 'UserC/get_category_list';
$route['add-to-wishlist'] = 'UserC/add_wishlist';
$route['wishlist-page'] = 'UserC/all_wishlist';
$route['remove-from-wishlist'] = 'UserC/remove_wishlist';
$route['clear-wishlist'] = 'UserC/clear_wishlist';
$route['add-to-cart'] = 'UserC/add_to_cart';
$route['remove-from-cart'] = 'UserC/remove_from_cart';
$route['clear-cart'] = 'UserC/clear_cart';
$route['cart-page'] = 'UserC/cart_list';
$route['change-cart-qty'] = 'UserC/upd_cart';
$route['checkout'] = 'UserC/checkout_cart';
$route['place-order'] = 'UserC/order_place';
$route['checkout-complete'] = 'UserC/checkout_complete';
$route['order-tracking'] = 'UserC/track_order';
$route['account-orders'] = 'UserC/user_orders';
$route['account-profile'] = 'UserC/user_profile';
$route['user-address'] = 'UserC/address_user';
$route['product-comparison'] = 'UserC/product_compare';
$route['profile-pic'] = 'UserC/pro_pic';

//=================seller=================================================
$route['seller-registration'] = 'MainC/register_seller_data';
$route['seller-login-page'] = 'MainC/login_page2';
$route['login-seller'] = 'AuthenC/seller_login';
$route['logout-seller'] = 'AuthenC/seller_logout';
$route['seller-dashboard'] ='AuthenC/dashboard_seller';
$route['account-password-recovery'] ='SellerC/recovery_password';
$route['order-details'] ='SellerC/order_details';
$route['all-orders'] ='SellerC/all_orders';
$route['seller-profile'] ='SellerC/profile_seller';


//=============category Management=========================================
$route['add-category'] ='SellerC/category_add';
$route['ins-cat'] ='SellerC/ins_addCat';
$route['all-categories'] ='SellerC/category_list';
$route['edit-sdata'] ='SellerC/edt_catList';
$route['upd-cat'] ='SellerC/upd_catList';
$route['delete-sdata'] ='SellerC/dlt_catList';

//=====================product management===========================
    $route['add-product'] ='SellerC/add_prod';
    $route['ins-product'] ='SellerC/ins_prod';   
    $route['pro-list'] ='SellerC/pro_list';
    $route['edit-pdata'] ='SellerC/edt_proList';
    $route['upd-product'] ='SellerC/upd_proList';
    $route['dlt-pdata'] ='SellerC/dlt_proList';
    
    
    




