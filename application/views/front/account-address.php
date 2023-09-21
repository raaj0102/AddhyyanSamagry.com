<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-address.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:02 GMT -->
<head>
    <meta charset="utf-8">
    <title>Contact / Shipping Address
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
    <!-- Header-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <?php include 'layout/header.php';?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Contact / Shipping Address</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Contact Address</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
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
          <nav class="list-group">
              <a class="list-group-item with-badge" href="account-orders.html"><i class="icon-shopping-bag"></i>Orders<span class="badge badge-default badge-pill">6</span></a>
              <a class="list-group-item" href="account-profile">
                  <i class="icon-user"></i>Profile</a>
                  <a class="list-group-item active" href="#">
                      <i class="icon-map-pin"></i>Addresses</a>
                      <a class="list-group-item with-badge" href="wishlist-page">
                          <i class="icon-heart"></i>Wishlist<span class="badge badge-default badge-pill">3</span></a>
                           </nav>
        </div>
        <div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>
          <h5>Contact Address</h5>
          <hr class="padding-bottom-1x">
          <form class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-company">Country</label>
                <input class="form-control" type="text" id="account-company" value="India" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-country">State</label>
                <select class="form-control" id="account-country">
                  <option>Select State</option>
                  <option>Aandhra Pradesh</option>
                  <option>Arunachal Pradesh</option>
                  <option>Assam</option>
                  <option>Bihar</option>
                  <option>Chhattisgarh</option>
                  <option>Goa</option>
                  <option selected>Haryana</option>
                  <option selected>Himachal Pradesh</option>
                  <option selected>Jharkhand</option>
                  <option selected>Karnataka</option>
                  <option selected>Kerala</option>
                  <option selected>Madhya Pradesh</option>
                  <option selected>Maharashtra</option>
                  <option selected>Manipur</option>
                  <option selected>Meghalaya</option>
                  <option selected>Mizoram</option>
                  <option selected>Nagaland</option>
                  <option selected>Odisha</option>
                  <option selected>Punjab</option>
                  <option selected>Rajasthan</option>
                  <option selected>Sikkim</option>
                  <option selected>TamilNadu</option>
                  <option selected>Telangana</option>
                  <option selected>Tripura</option>
                  <option selected>Uttar Pradesh</option>
                  <option selected>Uttrakhand</option>
                  <option selected>West Bengal</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-city">City</label>
                <select class="form-control" id="account-city">
                  <option>Choose city</option>
                  <option>Delhi</option>
                  <option>Mumbai</option>
                  <option>Noida</option>
                  <option>Bangalore</option>
                  <option selected>Raipur</option>
                  <option>Kolkata</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-zip">ZIP Code</label>
                <input class="form-control" type="text" id="account-zip" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-address1">Address 1</label>
                <input class="form-control" type="text" id="account-address1" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-address2">Address 2</label>
                <input class="form-control" type="text" id="account-address2">
              </div>
            </div>
            <div class="col-12 padding-top-1x">
              <h5>Shipping Address</h5>
              <hr class="padding-bottom-1x">
              <div class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox" id="same_address" checked>
                <label class="custom-control-label" for="same_address">Same as Contact Address</label>
              </div>
              <hr class="margin-top-1x margin-bottom-1x">
              <div class="text-right">
                <button class="btn btn-primary margin-bottom-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-check-circle" data-toast-title="Success!" data-toast-message="Your address updated successfuly.">Update Address</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include 'layout/footer.php';?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
    </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-address.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:02 GMT -->
</html>