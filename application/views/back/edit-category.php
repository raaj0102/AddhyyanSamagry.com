<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
</head>
<body>
    <?php include 'layout/sidebar.php'; ?>
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <?php include 'layout/header_dash.php';?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    <h2>Edit Course</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="seller-dashboard">Home</a>
                        </li>
                        <li>
                            <a href="seller-dashboard">Course</a>
                        </li>
                        <li class="active">
                            <strong>Edit Course</strong>
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
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Edit Course</h3>
                                <form role="form" action="upd-cat" method="post" enctype="multipart/form-data">
                                    <div class="form-group"><label>Course Name</label><input type="text" name="catName" value="<?php echo $catList->cat_name?>" class="form-control" required></div>
                                    <div class="form-group"><label>Course Photo</label> <input type="file" name="cat_img" id="imgCat" value="<?php echo $catList->cat_img?>" class="form-control"></div>
                                     <input type="hidden" name="Cid" value="<?=$catList->cid?>">
                                     <input type="hidden" name="cat_img_old" value="<?=$catList->cat_img?>">
                                    <div>
                                        <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Update</strong></button>     
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">          
                                <p class="text-center">
                                    <!--<a href="#"><i class="fa fa-sign-in big-icon"></i></a>-->
                                   <?php if(!empty($catList->cat_img)) {?>
                                    <img  src="<?=base_url()?>uploads/category/<?=$catList->cat_img;?>" class="img img-responsive img-thumbnail img-preview-sm">
                                    <?php } ?>
                                     <img id="cat" class="img img-responsive img-thumbnail img-preview-sm">    
                                </p>
                            </div>
                        </div>
                    </div>
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
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
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

