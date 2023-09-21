<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/account-wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:06:02 GMT -->
<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
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
          <h1>My Wishlist</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>My Wishlist</li>
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
          <nav class="list-group"><a class="list-group-item" href="account-profile"><i class="icon-user"></i>Profile</a><a class="list-group-item with-badge active" href="my-wishlist.html"><i class="icon-heart wish"></i>Wishlist<span class="badge badge-default badge-pill">0</span></a><a class="list-group-item with-badge" href="account-orders.html"><i class="icon-shopping-bag"></i>Orders<span class="badge badge-default badge-pill">6</span></a><a class="list-group-item" href="user-address"><i class="icon-map-pin"></i>Addresses</a></nav>
        </div>
          <div class="col-lg-8">
           <!-- Wishlist Table-->
           <div id="refresh-section" class="table-responsive wishlist-table mb-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th class="text-center">
                      <button class="btn btn-sm btn-outline-danger clearwish">Clear Wishlist</button></th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  foreach ($wishlist as $wl) { ?>
                  <tr>
                  <td>
                    <div class="product-item"><a class="product-thumb" href="single-product?pid=<?=$wl->product_id?>"><img src="uploads/products/<?=$wl->photo?>" alt="Product"></a>
                      <div class="product-info">
                        <h4 class="product-title"><a href="single-product?pid=<?=$wl->product_id?>"><?=$wl->p_name?></a></h4>
                        <div class="text-lg mb-1">&#8377; <?=$wl->price2?></div>
                        <div class="text-sm">Availability:
                          <div class="d-inline text-success"><?=$wl->pstatus?></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center">
                      <button class="remove-from-cart btn btn-sm btn-outline-danger removewish" id="<?=$wl->product_id?>" data-toggle="tooltip" title="Remove item"><i class="icon-x"></i></button>
                  </td>
                </tr>
                  <?php }?>
                 </tbody>
            </table>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="inform_me" checked>
            <label class="custom-control-label" for="inform_me">Inform me when item from my wishlist is available</label>
          </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>
   $(document).on('click','.removewish',function()
   {
       var p_id = $(this).attr("id");
       var u_id = '<?php echo $this->session->userdata('userId');?>';
       if(u_id>0){
            $.ajax({
           url:"remove-from-wishlist",
           method:"POST",
           data:{
               product_id: p_id,
               user_id: u_id
           },
                   success:function(data){
//                       $el.html(data);
                        
                            $('#refresh-section').load(location.href + " #refresh-section");
                    }
       });
       }
       else{
           alert("Please login first");
       }
      
   });
</script>
<script> 
    
      $(document).on('click','.clearwish',function()
      {
       var u_id = '<?php echo $this->session->userdata('userId');?>';
       if(u_id>0){
            $.ajax({
           url:"clear-wishlist",
           method:"POST",
           data:{
               user_id: u_id
           },
                   success:function(data){
//                       $el.html(data);
                        
                            $('#refresh-section').load(location.href + " #refresh-section");
                    }
       });
       }
       else{
           alert("Please login first");
       }
      
   });
</script>
 </body>
</html>