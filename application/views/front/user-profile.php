<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Profile
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
    </script>
    </head>
  <!-- Body-->
  <body>
    <!-- Header-->
    <?php include 'layout/header.php';?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>My Profile</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>My Profile</li>
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
              <!--<div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-award"></i>290 points</div>-->
            </div>
            <div class="user-info">
                <div class="user-avatar"><a class="edit-avatar" href="profile-pic"></a><img src="assets/user/img/account/user-ava.jpg" alt="User"></div>
              <div class="user-data">
                <h4 class="h5"><?=$this->session->userdata('userfName')." ".$this->session->userdata('userlName');?></h4><span><?=$this->session->userdata('userMail')?></span>
              </div>
            </div>
          </aside>
          <nav class="list-group">
              <a class="list-group-item active" href="#"><i class="icon-user"></i>Profile</a>
              <a class="list-group-item with-badge" href="account-orders.html">
                  <i class="icon-shopping-bag"></i>Orders<span class="badge badge-default badge-pill">6</span></a>
                      <a class="list-group-item" href="user-address"><i class="icon-map-pin"></i>Addresses</a>
                      <a class="list-group-item with-badge" href="wishlist-page"><i class="icon-heart"></i>Wishlist<span class="badge badge-default badge-pill">3</span></a>
                      </nav>
        </div>
        <div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>
          <form class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-fn">First Name</label>
                <input class="form-control" type="text" id="account-fn" value="<?=$this->session->userdata('userfName')?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-ln">Last Name</label>
                <input class="form-control" type="text" id="account-ln" value="<?=$this->session->userdata('userlName')?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-email">E-mail Address</label>
                <input class="form-control" type="email" id="account-email" value="<?=$this->session->userdata('userMail')?>" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-phone">Phone Number</label>
                <input class="form-control" type="text" id="account-phone" value="<?=$this->session->userdata('userMobile')?>" required>
              </div>
            </div>
            <div class="col-12">
              <hr class="mt-2 mb-3">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                  <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                </div>
                <button class="btn btn-primary margin-right-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
              </div>
            </div>
          </form>
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
    <!-- Customizer scripts-->
   </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:02 GMT -->
</html>