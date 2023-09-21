<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/checkout-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:00 GMT -->
<head>
    <meta charset="utf-8">
    <title>Checkout
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
          <h1>Checkout</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Checkout</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="card text-center">
        <div class="card-body padding-top-2x">
          <h3 class="card-title">Thank you for your order!</h3>
          <p class="card-text">Your order has been placed and will be processed as soon as possible.</p>
          <p class="card-text">Make sure you make note of your order number, which is <span class="text-medium"><?php echo $this->input->get('or'); ?></span></p>
          <p class="card-text">You will be receiving an email shortly with confirmation of your order. 
            <u>You can now:</u>
          </p>
          <div class="padding-top-1x padding-bottom-1x"><a class="btn btn-outline-secondary" href="all-pro-list">Go Back Shopping</a><a class="btn btn-outline-primary" href="order-tracking"><i class="icon-map-pin"></i>&nbsp;Track order</a></div>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <?php include'layout/footer.php';?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
    </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/checkout-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:00 GMT -->
</html>