<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:05:09 GMT -->
<head>
    <meta charset="utf-8">
    <title><?php $title; ?></title>
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
    <?php include 'layout/header.php'; ?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Cart</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Cart</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1" id="refresh-section">
<!--       Alert
      <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close" data-dismiss="alert"></span><i class="icon-award"></i>&nbsp;&nbsp;With this purchase you will earn <span class='text-medium'>2,549</span> Reward Points.</div>
       Shopping Cart-->
<div class="table-responsive shopping-cart">
        <table class="table">
          <thead>
            <tr>
              <th>Product Name</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Unit Price</th>
              <th class="text-center">Total</th>
               <th class="text-center">
                   <button class="btn btn-sm btn-outline-danger clearCart">Clear Cart</button></th>
            </tr>
          </thead>
          <tbody>
             <?php 
            $cartProduct = $this->cart->contents();
//            echo '<pre>';
//            print_r($cartProduct);
//            die();
             foreach ($cartProduct as $cp) { ?>
            <tr>
              <td>
                <div class="product-item"><a class="product-thumb" href="#"><img src="uploads/products/<?=$cp['photo']?>" alt="Product"></a>
                  <div class="product-info">
                      <h4 class="product-title"><a href="#"><?=$cp['name']?></a></h4><span><em class="font-weight-bold">Category:</em><?=$cp['cat']?></span>
                  </div>
                </div>
              </td>
              <td class="text-center">
                <div class="count-input">
                    <!--<input type="number" value="<?=$cp['qty']?>" class="form-control updateCart">-->
                    <select class="form-control updateCart" id="<?=$cp['rowid']?>" >
                        <?php for($i=1;$i<=5;$i++) { ?>
                        <option value="<?=$i?>"<?php if($i==$cp['qty']){echo 'selected';} ?>><?=$i?></option>
                        <?php } ?>
                    </select>
                </div>
              </td>
              <td class="text-center text-lg">&#8377;<?= $cp['price']?></td>
              <td class="text-center text-lg">&#8377;<?= $cp['subtotal']?></td>
              <td class="text-center">
                  <button class="remove-from-cart removecart btn btn-outline-danger btn-sm removecart" id="<?=$cp['rowid']?>" data-toggle="tooltip" title="Remove item"><i class="icon-x"></i></button>
              </td>
            </tr> 
             <?php }?>
          </tbody>
        </table>
      </div>
      <div class="shopping-cart-footer">     
        <div class="column text-lg"><span class="text-muted">Subtotal:&nbsp; </span><span class="text-gray-dark">&#8377; <?=$this->cart->total();?></span></div>
      </div>
      <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-outline-secondary" href="all-pro-list"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
        <div class="column">
            <a class="btn btn-primary" href="checkout?ch=address">Checkout</a></div>
      </div>
    </div>
   <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>
   $(document).on('click','.removecart',function()
   {
       var row_id = $(this).attr("id");
        if(row_id !==""){
            $.ajax({
           url:"remove-from-cart",
           method:"POST",
           data:{
               row_id: row_id            
           },
                   success:function(data){
//                       $el.html(data);
                        
                            $('#refresh-section').load(window.location.href + " #refresh-section");
                            $('.refreshDiv').load(window.location.href + " .refreshDiv");
                            $('.refreshDiv2').load(window.location.href + " .refreshDiv2");
                    }
       });
       }
       else{
           alert("Please login first");
       }
      
   });
</script>
<script> 
    
      $(document).on('click','.clearCart',function()
      {
          $.ajax({
           url:"clear-cart",
           method:"POST",
           success:function(data){
                            $('#refresh-section').load(window.location.href + " #refresh-section");
                            $('.refreshDiv').load(window.location.href + " .refreshDiv");
                            $('.refreshDiv2').load(window.location.href + " .refreshDiv2");
                     }
       });
             
   });  
</script>
    <script>
    $('.updateCart').on('change', function() {
       var rowId = $(this).attr("id");
       var qtyc = parseInt($(this).find(":selected").val());
       
       $.ajax({
           url:"change-cart-qty",
           method:"POST",
           data:{
               row_id : rowId,
               qty :qtyc
           },
           success:function(data){
                 $('#refresh-section').load(window.location.href + " #refresh-section");
                 $('.refreshDiv').load(window.location.href + " .refreshDiv");
                 $('.refreshDiv2').load(window.location.href + " .refreshDiv2");                    
           }
       });
   });
    </script>
    </body>

</html>