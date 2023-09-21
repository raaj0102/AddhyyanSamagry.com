<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
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
    <?php include 'layout/header.php'; ?>
    <section class="container padding-bottom-2x mb-2">
      <h2 class="h3 pb-3 text-center">Recently Added Products</h2>
      <div class="row">
        <?php foreach ($products as $pd) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30">
              <?php switch ($pd->tag) {
                        case "New":
                        { 
                           echo '<div class="product-badge bg-success">'.$pd->tag.'</div>';
                           break;
                        }

                        case "Offer":
                        { 
                           echo '<div class="product-badge bg-warning">'.$pd->tag.'</div>';
                           break;
                        }

                        case "Sale":
                        { 
                           echo '<div class="product-badge bg-danger">'.$pd->tag.'</div>';
                           break;
                        }
                        
                         case "Featured":
                        { 
                           echo '<div class="product-badge bg-info">'.$pd->tag.'</div>';
                           break;
                        }
                        default:
                        {
                          break;
                        }
              }?>
              <a class="product-thumb" target="_blank" href="single-product?pid=<?= $pd->p_id?>"><img src="uploads/products/<?=$pd->photo;?>" style="height:250px" alt="Product"></a>
            <div class="product-card-body">
              <div class="product-category"><a href="#"><?= $pd->cat_name;?></a></div>
              <h3 class="product-title"><a target="_blank" href="single-product?pid=<?=$pd->p_id?>"><?=$pd->p_name;?></a></h3>
              <h4 class="product-price">
                <del>&#8377;<?=$pd->price1?></del>&#8377;<?=$pd->price2;?>
              </h4>
            </div>
              <div class="product-button-group">
                  <button class="product-button btn-wishlist addingwish" style="width:50%" id="<?=$pd->p_id?>"><i class="icon-heart"></i><span>Wishlist</span></button>
                  <button  class="product-button addtocart" data-toast data-toast-type="success" style="width:50%" id="<?=$pd->p_id?>" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!">
                      <i class="icon-shopping-cart"></i><span>To Cart</span></button>
              </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="text-center"><a class="btn btn-outline-secondary" href="all-pro-list">View All Products</a></div>
    </section>
    <!-- CTA-->
    <!-- Services-->
    <section class="container padding-top-3x padding-bottom-2x">
      <div class="row">
        <div class="col-md-4 col-sm-8 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="assets/user/img/services/02.png" alt="Money Back">
          <h6 class="mb-2">Money Back Guarantee</h6>
          <p class="text-sm text-muted mb-0">We return money within 30 days</p>
        </div>
        <div class="col-md-4 col-sm-8 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="assets/user/img/services/03.png" alt="Support">
          <h6 class="mb-2">24/7 Customer Support</h6>
          <p class="text-sm text-muted mb-0">Friendly 24/7 customer support</p>
        </div>
        <div class="col-md-4 col-sm-8 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="assets/user/img/services/04.png" alt="Payment">
          <h6 class="mb-2">Secure Online Payment</h6>
          <p class="text-sm text-muted mb-0">We posess SSL / Secure Certificate</p>
        </div>
      </div>
    </section>
    <?php include 'layout/footer.php'; ?>
    <!-- Back To Top Button-->
    <a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6329fffe37898912e96a51cd/1gde0vv29';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
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
                   success:function(data)
                   {                  
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