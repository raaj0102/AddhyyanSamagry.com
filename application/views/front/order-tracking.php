<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/order-tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:07:07 GMT -->
<head>
    <meta charset="utf-8">
    <title>Order Tracking
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
     <?php include'layout/header.php';?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Order Tracking</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Order Tracking</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <div class="card mb-3">
        <div class="p-4 text-center text-white bg-dark rounded-top"><span class="text-uppercase">Tracking Order No - </span><span class="text-medium"><?php echo $this->session->userdata('order_no');?></span></div>
        <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
          <div class="w-100 text-center py-1 px-2"><span class='text-medium'>Shipped Via:</span> UPS Ground</div>
          <div class="w-100 text-center py-1 px-2"><span class='text-medium'>Status:</span> Processing Order</div>
          <div class="w-100 text-center py-1 px-2"><span class='text-medium'>Expected Date:</span> Feb 26, 2018</div>
        </div>
        <div class="card-body">
          <div class="steps flex-sm-nowrap padding-top-1x padding-bottom-1x">
            <div class="step active"><i class="icon-shopping-bag"></i>
              <h4 class="step-title">Confirmed Order</h4>
            </div>
            <div class="step active"><i class="icon-settings"></i>
              <h4 class="step-title">Processing Order</h4>
            </div>
            <div class="step"><i class="icon-award"></i>
              <h4 class="step-title">Quality Check</h4>
            </div>
            <div class="step"><i class="icon-truck"></i>
              <h4 class="step-title">Product Dispatched</h4>
            </div>
            <div class="step"><i class="icon-home"></i>
              <h4 class="step-title">Product Delivered</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-sm-between align-items-center">
        <div class="custom-control custom-checkbox mr-3">
          <input class="custom-control-input" type="checkbox" id="notify_me" checked>
          <label class="custom-control-label" for="notify_me">Notify me when order is delivered</label>
        </div>
        <div class="text-left text-sm-right"><a class="btn btn-primary btn-sm" href="orderDetails.html" data-toggle="modal" data-target="#orderDetails">View Order Details</a></div>
      </div>
    </div>
    <?php include'layout/footer.php';?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
    </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/order-tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:07:08 GMT -->
</html>