<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:05:09 GMT -->
<head>
    <meta charset="utf-8">
    <title>Login / Register Account
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
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="customizer/customizer.min.css">
     <!--Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4DJFPZ');     
    </script>
     <!--Modernizr-->
    <script src="assets/user/js/modernizr.min.js"></script>
  </head>
   <!--Body-->
  <body>
     <!--Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-T4DJFPZ" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript> 
    <?php include 'layout/header.php';?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Seller Login / Register Account</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="homepage">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="#">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Login / Register</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <div class="col-md-6">
            <form class="card" target="_blank" action="login-seller" method="post">
            <div class="card-body">
              <div class="form-group input-group">
                    <p style="color:red"><?php if($this->input->get('error')=='yes')
                 {
                    echo 'Invalid Username/Password!';
                 }?></p>
                    <p style="color:green"><?php if($this->input->get('success')=='yes')
                 {
                    echo 'Successfully Registered Please Login!';
                 }?></p>
                  <input class="form-control" type="text" name="sname" placeholder="Email/Phone" required><span class="input-group-addon"><i class="icon-mail"></i></span>
              </div>
              <div class="form-group input-group">
                  <input class="form-control" type="password" name="spass" placeholder="Password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
              </div>
              <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="remember_me" checked>
                  <label class="custom-control-label" for="remember_me">Remember me</label>
                </div><a class="navi-link" href="account-password-recovery">Forgot password?</a>
              </div>
              <div class="text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <!--<h3 class="margin-bottom-1x">No Account? Register</h3>-->
          <form class="row" style="border:1px solid rgba(0,0,0,0.125); border-radius:.25rem" action="seller-registration" method="post">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-fn">First Name</label>
                <input class="form-control" type="text" name="reg-fn" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-ln">Last Name</label>
                <input class="form-control" type="text" name="reg-ln" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-email">E-mail</label>
                <input class="form-control" type="email" name="reg-email" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-phone">Phone Number</label>
                <input class="form-control" type="number" name="reg-phone" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-pass">Mobile Number</label>
                <input class="form-control" type="number" name="reg-mobile" required>
              </div>
            </div> 
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-pass-confirm">Password</label>
                <input class="form-control" type="password" name="reg-pass" required>
              </div>
            </div>
              <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-pass-confirm">Confirm Password</label>
                <input class="form-control" type="text" name="reg-confirm-pass" required>
              </div>
            </div>
              <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-pass-confirm">Address</label>
                <input class="form-control" type="text" name="reg-addr">
              </div>
            </div>
              <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-pass-confirm">Company Name</label>
                <input class="form-control" type="text" name= "reg-company" required>
              </div>
            </div>
              <div class="col-sm-6">
              <div class="form-group">
                   <button class="btn btn-primary margin-bottom-none alignright" type="submit">Register</button>
              </div>
            </div>
             </form>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <footer class="site-footer" style="background-image: url(img/footer-bg.png);">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- Categories-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Shop Departments</h3>
              <div class="row">
                <div class="col-md-6">
                  <ul>
                    <li><a href="#">Computers &amp; Accessories</a></li>
                    <li><a href="#">Smartphones &amp; Tablets</a></li>
                    <li><a href="#">TV, Video &amp; Audio</a></li>
                    <li><a href="#">Cameras, Photo &amp; Video</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li><a href="#">Wearable Electronics</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li><a href="#">Printers &amp; Ink</a></li>
                    <li><a href="#">Video Games</a></li>
                    <li><a href="#">Car Electronics</a></li>
                    <li><a href="#">Smart Home, IoT</a></li>
                    <li><a href="#">Musical Instruments</a></li>
                    <li><a href="#">Software</a></li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- About Us-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">About Us</h3>
              <ul>
                <li><a href="#">Careers</a></li>
                <li><a href="#">About Unishop</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Blog</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- Account / Shipping Info-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Account &amp; Shipping Info</h3>
              <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Shipping Rates & Policies</a></li>
                <li><a href="#">Refunds & Replacements</a></li>
                <li><a href="#">Taxes</a></li>
                <li><a href="#">Delivery Info</a></li>
                <li><a href="#">Affiliate Program</a></li>
              </ul>
            </section>
          </div>
        </div>
        <hr class="hr-light mt-2 margin-bottom-2x hidden-md-down">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <!-- Contact Info-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Get In Touch With Us</h3>
              <p class="text-white">Phone: +1 (900) 33 169 7720</p>
              <ul class="list-unstyled text-sm text-white">
                <li><span class="opacity-50">Monday-Friday:&nbsp;</span>9.00 am - 8.00 pm</li>
                <li><span class="opacity-50">Saturday:&nbsp;</span>10.00 am - 6.00 pm</li>
              </ul>
              <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- Mobile App Buttons-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
            </section>
          </div>
          <div class="col-lg-6">
            <!-- Subscription-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Be Informed</h3>
              <form class="row" action="http://rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                <div class="col-sm-9">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <p class="form-text text-sm text-white opacity-50 pt-2">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</p>
                </div>
                <div class="col-sm-3">
                  <button class="btn btn-primary btn-block mt-0" type="submit">Subscribe</button>
                </div>
              </form>
              <div class="pt-3"><img class="d-block" style="width: 324px;" alt="Cerdit Cards" src="assets/user/img/credit-cards-footer.png"></div>
            </section>
          </div>
        </div>
        <!-- Copyright-->
        <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="http://rokaux.com/" target="_blank"> &nbsp;by rokaux</a></p>
      </div>
    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
    <!-- Customizer scripts-->
    <script src="customizer/customizer.min.js"></script>
  </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:05:09 GMT -->
</html>
