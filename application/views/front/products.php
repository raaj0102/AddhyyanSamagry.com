<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $title; ?>
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
    <?php include 'layout/header.php'; ?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
            <h1 class="font-bold"><?php $cId = $this->input->get('cat');
          echo $this->db->query("SELECT cat_name FROM category WHERE cid ='$cId'")->row()->cat_name;
          ?></h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><?php $cId = $this->input->get('cat');
          echo $this->db->query("SELECT cat_name FROM category WHERE cid = '$cId'")->row()->cat_name;
          ?></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <div class="row">
        <!-- Products-->
        <div class="col-lg-9 order-lg-2">
          <div class="shop-toolbar padding-bottom-1x mb-2">
            <div class="column">
              <div class="shop-sorting">
                <label for="sorting">Sort by:</label>
                <select class="form-control" id="sorting" onchange="getSort()">
                    <option value="0" selected disabled>Sort By</option>
                    <option value="1">Rating</option>
                    <option value="2">Low - High Price</option>
                    <option value="3">High - Low Price</option>
                    <option value="4">A - Z Order</option>
                    <option value="5">Z - A Order</option>
                </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
              </div>
            </div>
            <div class="column">
              <div class="shop-view"><a class="grid-view active" href="all-pro-list"><span></span><span></span><span></span></a><a class="list-view" href="list-view"><span></span><span></span><span></span></a></div>
            </div>
          </div>
          <!-- Products Grid-->
          <div class="row">
              <?php foreach ($plist as $pl) { ?>
            <div class="col-md-4 col-sm-6">
              <div class="product-card mb-30">
                  <?php switch ($pl->tag) {
                        case "New":
                        { 
                           echo '<div class="product-badge bg-success">'.$pl->tag.'</div>';
                           break;
                        }

                        case "Offer":
                        { 
                           echo '<div class="product-badge bg-warning">'.$pl->tag.'</div>';
                           break;
                        }

                        case "Sale":
                        { 
                           echo '<div class="product-badge bg-danger">'.$pl->tag.'</div>';
                           break;
                        }
                        
                         case "Featured":
                        { 
                           echo '<div class="product-badge bg-info">'.$pl->tag.'</div>';
                           break;
                        }
                        default:
                        {
                          break;
                        }
              }?>
                  <a class="product-thumb" href="single-product?pid=<?=$pl->p_id;?>"><img src="uploads/products/<?= $pl->photo; ?>" style="height:250px" alt="Product"></a>
                <div class="product-card-body">
                  <div class="product-category"><a href="#"><?= $pl->cat_name;?></a></div>
                  <h3 class="product-title"><a href="single-product?pid=<?=$pl->p_id;?>"><?=$pl->p_name; ?></a></h3>
                  <h4 class="product-price">
                    <del>&#8377;<?=$pl->price1;?></del>&#8377;<?=$pl->price2;?>
                  </h4>
                </div>
                <div class="product-button-group">
                    <button class="product-button btn-wishlist addtowish" style="width:50%" id="<?=$pl->p_id;?>"><i class="icon-heart"></i><span>Wishlist</span></button>
                    <button class="product-button addtocart" data-toast data-toast-type="success" style="width:50%" data-toast-position="topRight" id="<?=$pl->p_id;?>" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!">
                        <i class="icon-shopping-cart"></i><span>To Cart</span></button></div>
              </div>
            </div> 
              <?php } ?>
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
        <!-- Sidebar          -->
        <div class="col-lg-3 order-lg-1">
          <div class="sidebar-toggle position-left"><i class="icon-filter"></i></div>
          <aside class="sidebar sidebar-offcanvas position-left"><span class="sidebar-close"><i class="icon-x"></i></span>
            <!-- Widget Categories-->
            <section class="widget widget-categories">
              <h3 class="widget-title">Shop Categories</h3>
              <ul>
                  <?php foreach ($catList as $cl) { ?>
                <li><a href="all-products?cat=<?=$cl->cid;?>"><?=$cl->cat_name;?><span>(<?=$cl->total;?>)</span>
                  </li>
                  <?php } ?>
               </ul>
            </section>
            <!-- Widget Price Range-->
            <section class="widget widget-categories">
              <h3 class="widget-title">Price Range</h3>
              <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                <div class="ui-range-slider"></div>
                <footer class="ui-range-slider-footer">
                  <div class="column">
                    <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
                  </div>
                  <div class="column">
                    <div class="ui-range-values">
                      <div class="ui-range-value-min">$<span></span>
                        <input type="hidden">
                      </div>&nbsp;-&nbsp;
                      <div class="ui-range-value-max">$<span></span>
                        <input type="hidden">
                      </div>
                    </div>
                  </div>
                </footer>
              </form>
            </section>
          </aside>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
  <?php include 'layout/footer.php'; ?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="assets/user/js/vendor.min.js"></script>
    <script src="assets/user/js/scripts.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
    <script>
     function getSort()
     {
         var v = document.getElementById('sorting').value;
         var cat = <?= $this->input->get('cat');?>;
         window.location.href = 'all-products?cat='+cat+'&sort='+v;
     }
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
  </body>
</html>