<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:00 GMT -->
<head>
    <meta charset="utf-8">
    <title>My Orders
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="assets/user/css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="assets/user/css/styles.min.css">
 </head>
  <!-- Body-->
  <body>
    <?php include 'layout/header.php';?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>My Orders</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>My Orders</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <div class="col-lg-4">
          <aside class="user-info-wrapper">
            <div class="user-cover" style="background-image: url(assets/user/img/account/user-cover-img.jpg);">
              <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-award"></i>290 points</div>
            </div>
            <div class="user-info">
              <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="assets/user/img/account/user-ava.jpg" alt="User"></div>
              <div class="user-data">
                <h4 class="h5"><?=$this->session->userdata('userfName')." ".$this->session->userdata('userlName');?></h4><span><?=$this->session->userdata('userMail')?></span>
              </div>
            </div>
          </aside>
          <nav class="list-group"><a class="list-group-item with-badge active" href="account-orders.html"><i class="icon-shopping-bag"></i>Orders<span class="badge badge-default badge-pill">6</span></a><a class="list-group-item" href="account-profile.html"><i class="icon-user"></i>Profile</a><a class="list-group-item" href="account-address.html"><i class="icon-map-pin"></i>Addresses</a><a class="list-group-item with-badge" href="my-wishlist.html"><i class="icon-heart"></i>Wishlist<span class="badge badge-default badge-pill">3</span></a><a class="list-group-item with-badge" href="account-tickets.html"><i class="icon-tag"></i>My Tickets<span class="badge badge-default badge-pill">4</span></a></nav>
        </div>
        <div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>Order #</th>
                  <th>Date Purchased</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($orderList as $ol ) { ?>
                <tr>
                  <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><?=$ol->order_no;?></a></td>
                  <td><?=$ol->order_date;?></td>
                  <td><span class="text-danger"><?=$ol->order_status;?></span></td>
                  <td><span>&#8377;<?=$ol->amount;?></span></td>
                  <td><span><a href="order-tracking">Track Order</a></span></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <hr>
          <div class="text-right"><a class="btn btn-link-primary margin-bottom-none" href="#"><i class="icon-download"></i>&nbsp;Order Details</a></div>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <?php include 'layout/footer.php';?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
   </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:01 GMT -->
</html>