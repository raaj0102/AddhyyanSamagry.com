

<!DOCTYPE html>
<html>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jan 2018 05:42:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/select2/select2.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'layout/sidebar.php'; ?>
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <?php include 'layout/header_dash.php';?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    <h2>Edit Product Data</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="seller-dashboard">Home</a>
                        </li>
                        <li>
                            <a href="seller-dashboard">Products</a>
                        </li>
                        <li class="active">
                            <strong>Edit Product</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-11">
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  
                    </div>
                <form role="form" action="upd-product" method="post" enctype="multipart/form-data">
                    <div class="ibox-content">
                        <div class="row">    
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Product Name *</label><input type="text" name="pro_name" value="<?php echo $proList->p_name?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Available Stock *</label><input type="number" name="pro_qty" value="<?php echo $proList->qty?>" class="form-control" required>
                                    </div>
<!--                                <div class="form-group">
                                    <label>Description</label><textarea type="number" name="desc" value="<?php echo $proList->p_desc?>" class="form-control"></textarea>
                                </div>-->
                                <div>
                                        <button class="btn btn-sm btn-primary m-t-n-xs center-block" type="submit"><strong>Update Product</strong></button>     
                                </div>
                            </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>MRP Price *</label><input type="number" name="Mprice" value="<?php echo $proList->price1?>" class="form-control" required>
                                         </div>
                                         <div class="form-group">
                                             <label>Offer Price *</label><input type="number" name="Oprice1" value="<?php echo $proList->price2?>" class="form-control" required>
                                         </div>
<!--                                    <label>Select Category *</label>
                                    <select name="pcat" data-placeholder="choose a category" class="chosen-select" required>
                                        <option selected disabled>Select Category</option>
                                        <?php foreach ($cat as $c): ?>
                                        <option value="<?=$c->cid?>" <?php if($c==$proList->category){echo 'selected';} ?>><?=$c->cat_name?></option>  
                                        <?php endforeach; ?>
                                    </select>                     -->
                                </div>
                            <div class="col-sm-4"> 
                                
                                <div class="form-group"><label>Product Photo *</label> <input type="file" value="<?php echo $proList->photo?>" name="pro_img" id="imgCat" class="form-control" required></div>

                                <p class="text-center">
                                    <!--<a href="#"><i class="fa fa-sign-in big-icon"></i></a>-->
                                    <img id="cat" class="img img-responsive img-thumbnail img-preview-sm">
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>              
            </div>           
        </div>
        </div>
        </div>
    <!-- Mainly scripts -->
    <script src="assets/admin/js/jquery-3.1.1.min.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="assets/admin/js/inspinia.js"></script>
    <script src="assets/admin/js/plugins/pace/pace.min.js"></script>
    <!-- iCheck -->
    <script src="assets/admin/js/plugins/iCheck/icheck.min.js"></script>
     <script src="assets/admin/js/plugins/chosen/chosen.jquery.js"></script>
      <script src="assets/admin/js/plugins/select2/select2.full.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
             $('.chosen-select').chosen({width: "100%"});
        </script>
        <script>
        imgCat.onchange =evt =>{
            const [file] = imgCat.files
            if(file){
                cat.src = URL.createObjectURL(file)
            }
        }
        
        
        </script>
</body>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jan 2018 05:42:51 GMT -->
</html>
