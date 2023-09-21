<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/checkout-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:00 GMT -->
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
      <div class="row">
        <!-- Checkout Adress-->
        <div class="col-xl-9 col-lg-8">
          <div class="steps flex-sm-nowrap mb-5"><a class="step" href="checkout-address">
              <h4 class="step-title"><i class="icon-check-circle"></i>1. Address</h4></a><a class="step" href="checkout-shipping">
             <h4 class="step-title"><i class="icon-check-circle"></i>3. Payment</h4></a><a class="step active" href="checkout-review">
              <h4 class="step-title">4. Review</h4></a></div>
          <h4 class="padding-bottom-1x">Review Your Order</h4>
          <div class="table-responsive shopping-cart">
            <table class="table">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th class="text-center">Subtotal</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="product-item"><a class="product-thumb" href="single_productinfo.html"><img src="assets/user/img/shop/cart/01.jpg" alt="Product"></a>
                      <div class="product-info">
                        <h4 class="product-title"><a href="single_productinfo.html">Canon EOS M50 Mirrorless Camera<small>x 1</small></a></h4><span><em>Type:</em> Mirrorless</span><span><em>Color:</em> Black</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-center text-lg">$910.00</td>
                  <td class="text-center">
                      <!--<a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a>-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="product-item"><a class="product-thumb" href="single_productinfo.html"><img src="assets/user/img/shop/cart/02.jpg" alt="Product"></a>
                      <div class="product-info">
                        <h4 class="product-title"><a href="single_productinfo.html">Apple iPhone X 256 GB Space Gray<small>x 1</small></a></h4><span><em>Memory:</em> 256 GB</span><span><em>Color:</em> Space Gray</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-center text-lg">$1,450.00</td>
                  <td class="text-center">
                      <!--<a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a>-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="product-item"><a class="product-thumb" href="single_productinfo.html"><img src="assets/user/img/shop/cart/03.jpg" alt="Product"></a>
                      <div class="product-info">
                        <h4 class="product-title"><a href="single_productinfo.html">HP LaserJet Pro Laser Printer<small>x 1</small></a></h4><span><em>Type:</em> Laser</span><span><em>Color:</em> White</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-center text-lg">$188.50</td>
                  <td class="text-center">
                      <!--<a class="btn btn-outline-primary btn-sm" href="cart.html"></a>-->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="shopping-cart-footer">
            <div class="column"></div>
            <div class="column text-lg"><span class="text-muted">Subtotal:&nbsp; </span><span class="text-gray-dark">$2,548.50</span></div>
          </div>
          <div class="row padding-top-1x mt-3">
            <div class="col-sm-6">
              <h5>Shipping to:</h5>
              <ul class="list-unstyled">
                <li><span class="text-muted">Client:&nbsp; </span>Daniel Adams</li>
                <li><span class="text-muted">Address:&nbsp; </span>44 Shirley Ave. West Chicago, IL 60185, USA</li>
                <li><span class="text-muted">Phone:&nbsp; </span>+1(808) 764 554 330</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <h5>Payment method:</h5>
              <ul class="list-unstyled">
                <li><span class="text-muted">Credit Card:&nbsp; </span>**** **** **** 5300</li>
              </ul>
            </div>
          </div>
          <div class="d-flex justify-content-between paddin-top-1x mt-4"><a class="btn btn-outline-secondary" href="checkout-payment"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a><a class="btn btn-primary" href="checkout-complete">Complete Order</a></div>
        </div>
        <!-- Sidebar          -->
        <div class="col-xl-3 col-lg-4">
          <aside class="sidebar">
            <div class="padding-top-2x hidden-lg-up"></div>
            <!-- Order Summary Widget-->
            <section class="widget widget-order-summary">
              <h3 class="widget-title">Order Summary</h3>
              <table class="table">
                <tr>
                  <td>Cart Subtotal:</td>
                  <td class="text-gray-dark">$2,548.50</td>
                </tr>
                <tr>
                  <td>Shipping:</td>
                  <td class="text-gray-dark">$26.50</td>
                </tr>
                <tr>
                  <td>Estimated tax:</td>
                  <td class="text-gray-dark">$9.72</td>
                </tr>
                <tr>
                  <td></td>
                  <td class="text-lg text-gray-dark">$2,584.72</td>
                </tr>
              </table>
            </section>
            <!-- Featured Products Widget-->
            <section class="widget widget-featured-products">
              <h3 class="widget-title">Recently Viewed</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/01.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">GoPro Hero4 Silver</a></h4><span class="entry-meta">$287.99</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/02.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">Puro Sound Labs BT2200</a></h4><span class="entry-meta">$95.99</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/03.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">HP OfficeJet Pro 8710</a></h4><span class="entry-meta">$89.70</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry pb-2">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/05.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">iPhone X 256 GB Space Gray</a></h4><span class="entry-meta">$1,450.00</span>
                </div>
              </div>
            </section>
            <!-- Promo Banner--><a class="card border-0 bg-secondary" href="shop-grid-ls.html">
              <div class="card-body"><span class="d-block text-lg text-thin mb-2">Limited Time Deals</span>
                <h3>Surface Pro 4</h3>
                <p class="d-inline-block bg-warning text-white">&nbsp;&nbsp;Shop Now&nbsp;<i class="icon-chevron-right d-inline-block align-middle"></i>&nbsp;</p>
              </div><img class="d-block mx-auto" src="assets/user/img/shop/widget/promo.jpg" alt="Surface Pro"></a>
          </aside>
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

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/checkout-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:00 GMT -->
</html>