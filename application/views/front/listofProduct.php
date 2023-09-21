<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/shop-list-ns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Oct 2018 10:05:57 GMT -->
<head>
    <meta charset="utf-8">
    <title><?php $title;?></title>
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
     </head>
  <!-- Body-->
  <body>
   <?php include 'layout/header.php';?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>List View</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>List View</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-0x">
      <div class="row justify-content-center">
        <!-- Products-->
        <div class="col-lg-12">
         <div class="shop-toolbar padding-bottom-1x mb-2">
            <div class="column">
              <div class="shop-view"><a class="grid-view" href="all-pro-list"><span></span><span></span><span></span></a><a class="list-view active" href="#"><span></span><span></span><span></span></a></div>
            </div>
          </div>
          <!-- Products List-->
          <?php foreach ($allProducts as $al) { ?>
          <div class="product-card product-list mb-30">   
              <a class="product-thumb" href="single-product?pid=<?= $al->p_id?>">
                
                      <?php switch ($al->tag) {
                        case "New":
                        { 
                           echo '<div class="product-badge bg-success">'.$al->tag.'</div>';
                           break;
                        }

                        case "Offer":
                        { 
                           echo '<div class="product-badge bg-warning">'.$al->tag.'</div>';
                           break;
                        }

                        case "Sale":
                        { 
                           echo '<div class="product-badge bg-danger">'.$al->tag.'</div>';
                           break;
                        }
                        
                         case "Featured":
                        { 
                           echo '<div class="product-badge bg-info">'.$al->tag.'</div>';
                           break;
                        }
                        default:
                        {
                          break;
                        }
              }?>
                
                  <img src="uploads/products/<?=$al->photo;?>" style="height:230px" alt="Product"></a>
            <div class="product-card-inner">
              <div class="product-card-body">
                <div class="product-category"><a href="#"><?= $al->cat_name;?></a></div>
                <h3 class="product-title"><a href="single-product?pid=<?= $al->p_id?>"><?=$al->p_name;?></a></h3>
                <h4 class="product-price">
                  <del>&#8377;<?=$al->price1?></del>&#8377;<?=$al->price2;?>
                </h4>
                <p class="text-sm text-muted hidden-xs-down my-1"><?=$al->p_desc;?></p>
              </div>
              <div class="product-button-group">
                  <button class="product-button btn-wishlist addingwish" style="width:50%" id="<?= $al->p_id?>" href="#"><i class="icon-heart"></i><span>Wishlist</span></button>
                   <button class="product-button addtocart" href="#" style="width:50%" id="<?= $al->p_id?>" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!">
                       <i class="icon-shopping-cart"></i><span>To Cart</span></button>
              </div>   
            </div>
          </div>
           <?php } ?>
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
      </div>
    </div>
    <!-- Site Footer-->
    <?php include 'layout/footer.php';?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
   <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>
   $(document).on('click','.addingwish',function()
   {
       var p_id = $(this).attr("id");
       var u_id = '<?php echo $this->session->userdata('userId');?>';
       if(u_id>0){
            $.ajax({
           url:"add-to-wishlist",
           method:"POST",
           data:{
               product_id: p_id,
               user_id: u_id
           },
                   success:function(data){
                      
                       }
       });
       }
       else{
           alert("Please login first");
       }
      
   });
  </script>
  <script>
     $(document).on('click','.addtocart',function()
   {
       var p_id = $(this).attr("id");
      $.ajax({
           url:"add-to-cart",
           method:"POST",
           data:{
               product_id: p_id
           },
                   success:function(data)
                   {
                        $('.refreshDiv').load(window.location.href + " .refreshDiv");
                        $('.refreshDiv2').load(window.location.href + " .refreshDiv2");                   
                      }
       });  
    });
</script>
   </body>
  </html>