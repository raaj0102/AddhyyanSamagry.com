<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/shop-grid-ns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:05:57 GMT -->
<head>
    <meta charset="utf-8">
    <title><?=$title;?>
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
          <h1>All Courses</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="homepage">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>All Courses</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <!-- Shop Toolbar-->
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <div class="shop-view"><a class="grid-view active" href="#"><span></span><span></span><span></span></a><a class="list-view" href="#"><span></span><span></span><span></span></a></div>
        </div>
      </div>
      <!-- Products Grid-->
      <div>
      <div class="row">         
          <?php foreach ($catlist as $cl) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-card mb-30">       
            <a class="product-thumb" href="#"><img src="uploads/category/<?=$cl->cat_img;?>" style="height:180px" alt="category"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#"><h5><?= $cl->cat_name;?></h5></a></div>          
            </div>
            </div>
            </div>
          <?php }?>
          </div>
          </div>
          </div>
      <!-- Pagination-->
      <nav class="pagination">
        <div class="column">
          <ul class="pages">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">12</a></li>
          </ul>
        </div>
        <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-chevron-right"></i></a></div>
      </nav>
    </div>
    <!-- Site Footer-->
    <?php include 'layout/footer.php';?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
  </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/shop-grid-ns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:05:57 GMT -->
</html>

