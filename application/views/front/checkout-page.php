<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/checkout-address.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:05:57 GMT -->
<head>
    <meta charset="utf-8">
    <title>Checkout-Page</title>
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
    <link rel="stylesheet" media="screen" href="assets/user/css/card.min.html">
    </head>
  <!-- Body-->
  <body>
    <?php include 'layout/header.php';?>
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
        <?php if((isset($_REQUEST['ch'])) &&($_REQUEST['ch']=="address")){ ?>
        <div class="col-xl-9 col-lg-8">
            <div class="steps flex-sm-nowrap mb-5"><a class="step active" href="checkout?address">
              <h4 class="step-title">1. Address</h4></a>
              <a class="step" href="checkout?ch=payment"><h4 class="step-title">2. Payment</h4></a>
              <a class="step" href="checkout?ch=review">
              <h4 class="step-title">3. Review</h4></a></div>
          <h4>Billing Address</h4>
          <hr class="padding-bottom-1x">
          <form action="checkout" method="POST">
         <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                  <label for="checkout-city">City <sup>*</sup></label>
                  <input type="text" class="form-control" name="city" autofocus required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-zip">ZIP Code <sup>*</sup></label>
                <input class="form-control" type="number" name="zipcode" id="checkout-zip" required>
              </div>
            </div>
          </div>
          <div class="row padding-bottom-1x">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-address1">Address 1 <sup>*</sup></label>
                <input class="form-control" name="addr1" type="text" id="checkout-address1" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-address2">Address 2 (optional)</label>
                <input class="form-control" name="addr2" type="text" id="checkout-address2">
              </div>
            </div>
          </div>
          <h4>Shipping Address</h4>
          <hr class="padding-bottom-1x">
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" id="same_address" checked>
              <label class="custom-control-label" for="same_address">Same as billing address</label>
            </div>
          </div>
          <div class="d-flex justify-content-between paddin-top-1x mt-4">
              <a class="btn btn-outline-secondary" href="cart-page">
                  <i class="icon-arrow-left"></i>
                  <span class="hidden-xs-down">&nbsp;Back To Cart</span>
              </a>
            <!--<a class="btn btn-primary" href="checkout?ch=payment"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a>-->
              <input type="hidden" name="ch" value="payment">
              <button class="btn btn-primary" type="submit" name="cartBtn" value="address">Continue<i class="icon-arrow-right"></i></button>
          </div>
        </form>
        </div>
        <?php }?>
        <?php if((isset($_REQUEST['ch'])) &&($_REQUEST['ch']=="payment")){ ?>
        <div class="col-xl-9 col-lg-8">
            <div class="steps flex-sm-nowrap mb-5">
                <a class="step" href="checkout?ch=address">
                  <h4 class="step-title"><i class="icon-check-circle"></i>1. Address</h4></a>
                  <a class="step active" href="checkout?payment">
                  <h4 class="step-title">2. Payment</h4></a><a class="step" href="checkout?ch=review">
                  <h4 class="step-title">3. Review</h4></a></div>
          <h4>Choose Payment Method</h4>
          <hr class="padding-bottom-1x">
          <div class="accordion" id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a href="#card" data-toggle="collapse"><i class="icon-credit-card"></i>Pay with Credit/Debit Card</a></h6>
              </div>
              <div class="collapse show" id="card" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <p>We accept following credit/debit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="assets/user/img/credit-cards.png" style="width: 120px;" alt="Cerdit Cards"></p>
                  <div class="card-wrapper">
                  <form class="interactive-credit-card row" action="checkout" method="POST">
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="number" name="cardNo" placeholder="Card Number" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="text" name="fname" placeholder="Full Name" required>
                    </div>
                    <div class="form-group col-sm-3">
                      <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                    </div>
                    <div class="form-group col-sm-3">
                      <input class="form-control" type="password" name="cvc" placeholder="CVC" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="hidden" value="review" name="ch">
                        <input type="hidden" value="CARD" name="pMethod">
                        <button class="btn btn-outline-primary btn-block mt-0" type="submit" value="payment" name="cartBtn">Submit</button>
                    </div>
                  </form>
                 </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#paypal" data-toggle="collapse"><i class="socicon-paypal"></i>Pay with UPI</a></h6>
              </div>
              <div class="collapse" id="paypal" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                        <p>UPI</p>
                         <form class="row" action="checkout" method="POST">
                             <div class="col-sm-12">
                      <div class="form-group">
                          <input class="form-control" name="upiId" type="text" placeholder="UPI ID" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <input type="hidden" value="review" name="ch">
                          <input type="hidden" value="UPI" name="pMethod">
                          <button class="btn btn-outline-primary margin-top-none" name="cartBtn" value="payment" type="submit">Verify</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#points" data-toggle="collapse"><i class="icon-home"></i>Cash On Delivery (COD)</a></h6>
              </div>
                <form action="checkout" method="post">
              <div class="collapse" id="points" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <div class="custom-control custom-checkbox d-block">
                    <!--<input class="custom-control-input" type="checkbox" id="use_points">-->
                    <input type="hidden" value="review" name="ch">
                    <input type="hidden" value="COD" name="pMethod">
                    <button name="cartBtn" value="payment" class="btn btn-primary" href="checkout?ch=review"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></button>
                     </div>
                </div>
              </div>
               </form>
            </div>
          </div>
          <div class="d-flex justify-content-between paddin-top-1x mt-4">
              <a class="btn btn-outline-secondary" href="checkout?ch=address"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a>
              </div>
        </div>
        <?php }?>
        <?php if((isset($_REQUEST['ch'])) &&($_REQUEST['ch']=="review")){ ?>
        <div class="col-xl-9 col-lg-8">
          <div class="steps flex-sm-nowrap mb-5"><a class="step" href="checkout?ch=address">
              <h4 class="step-title"><i class="icon-check-circle"></i>1. Address</h4></a>
              <a class="step" href="checkout?ch=payment">
              <h4 class="step-title"><i class="icon-check-circle"></i>2. Payment</h4></a>
              <a class="step active" href="checkout?ch=review">
              <h4 class="step-title">3. Review</h4></a></div>
              <h4 class="padding-bottom-1x">Review Your Order</h4>
               <form action="place-order" method="POST">
          <div class="table-responsive shopping-cart">
            <table class="table">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th class="text-center">Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                   <?php 
            $cartProduct = $this->cart->contents();
             foreach ($cartProduct as $cp) { ?>
                <tr>
                  <td>
                    <div class="product-item"><a class="product-thumb" href="single_productinfo.html"><img src="uploads/products/<?=$cp['photo']?>" alt="Product"></a>
                      <div class="product-info">
                        <h4 class="product-title"><a href="single_productinfo.html"><?=$cp['name']?><small>x <?=$cp['qty']?></small></a></h4>
                        <span><em>Category:</em> <?=$cp['cat']?></span>
                        <span><em>MRP:</em> &#8377;<?=$cp['price']?></span>
                      </div>
                    </div>
                  </td>
                  <td class="text-center text-lg">&#8377;<?= $cp['subtotal']?></td>
                </tr>
             <?php }?>
              </tbody>
            </table>
          </div>
          <div class="shopping-cart-footer">
            <div class="column"></div>
            <div class="column text-lg"><span class="text-muted">Subtotal:&nbsp; </span><span class="text-gray-dark">&#8377;<?=$this->cart->total();?></span></div>
          </div>
          <div class="row padding-top-1x mt-3">
            <div class="col-sm-6">
              <h5>Shipping to:</h5>
              <ul class="list-unstyled">
                <li><span class="text-muted">User:&nbsp; </span><?=$this->session->userdata('userfName')." ".$this->session->userdata('userlName');?></li>
                <li><span class="text-muted">City:&nbsp; </span><?=$this->session->userdata('city');?></li>
                <li><span class="text-muted">Pin:&nbsp; </span><?=$this->session->userdata('zip');?></li>
                <li><span class="text-muted">Address:&nbsp; </span><?=$this->session->userdata('addr1')."<br>".$this->session->userdata('addr2');?></li>
                <li><span class="text-muted">Phone:&nbsp; </span><?=$this->session->userdata('userMobile');?></li>
              </ul>
            </div>
            <div class="col-sm-6">
              <h5>Payment method:</h5>
              <ul class="list-unstyled">
                  <li><span class="text-bold"><?=$this->session->userdata('pMethod');?></span></li>
              </ul>
            </div>
          </div>
          <div class="d-flex justify-content-between paddin-top-1x mt-4">
              <a class="btn btn-outline-secondary" href="checkout?ch=payment">
                  <i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a>
                  <input type="hidden" name="uID" value="<?=$this->session->userdata('userId');?>">
                  <button class="btn btn-primary" type="submit">Complete Order</button>
          </div>
         </form>
        </div>
        <?php }?>
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
                  <td class="text-gray-dark">&#8377;<?= $subtotal = $this->cart->total();?></td>
                </tr>
                <tr>
                  <td>Shipping:</td>
                  <td class="text-gray-dark">&#8377;<?= $shipping = 50?></td>
                </tr>
                <tr>
                  <td>Estimated tax(GST 10%):</td>
                  <td class="text-gray-dark">&#8377;<?= $tax = ($subtotal*10)/100;?></td>
                </tr>
                <tr>
                  <td>Grand Total:</td>
                  <td class="text-lg text-gray-dark">&#8377;
                  <?= $gTotal = $subtotal+$tax+$shipping;
                  $sess_data = array(
                      'gTotal'=>$gTotal);           
                       $this->session->set_userdata($sess_data);
                  ?></td>
                </tr>
              </table>
            </section>
            <!-- Featured Products Widget-->
<!--            <section class="widget widget-featured-products">
              <h3 class="widget-title">Recently Viewed</h3>
               Entry
              <div class="entry">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/01.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">GoPro Hero4 Silver</a></h4><span class="entry-meta">$287.99</span>
                </div>
              </div>
               Entry
              <div class="entry">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/02.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">Puro Sound Labs BT2200</a></h4><span class="entry-meta">$95.99</span>
                </div>
              </div>
               Entry
              <div class="entry">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/03.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">HP OfficeJet Pro 8710</a></h4><span class="entry-meta">$89.70</span>
                </div>
              </div>
               Entry
              <div class="entry pb-2">
                <div class="entry-thumb"><a href="single_productinfo.html"><img src="assets/user/img/shop/widget/05.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="single_productinfo.html">iPhone X 256 GB Space Gray</a></h4><span class="entry-meta">$1,450.00</span>
                </div>
              </div>
            </section>-->
<!--             Promo Banner<a class="card border-0 bg-secondary" href="shop-grid-ls.html">
              <div class="card-body"><span class="d-block text-lg text-thin mb-2">Limited Time Deals</span>
                <h3>Surface Pro 4</h3>
                <p class="d-inline-block bg-warning text-white">&nbsp;&nbsp;Shop Now&nbsp;<i class="icon-chevron-right d-inline-block align-middle"></i>&nbsp;</p>
              </div><img class="d-block mx-auto" src="assets/user/img/shop/widget/promo.jpg" alt="Surface Pro"></a>-->
          </aside>
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
     <script src="assets/user/js/card.min.js"></script>
    </body>
</html>