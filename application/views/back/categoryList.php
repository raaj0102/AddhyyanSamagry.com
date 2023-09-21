<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
    <?php include 'layout/sidebar.php'; ?>
        <div id="page-wrapper" class="gray-bg">
            <?php include 'layout/header_dash.php';?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Course Table </h2> 
                    <h2 style="color:orange"><?php if($this->input->get('success')=='yes')
                     {
                         echo 'Updated Successfully..!!';
                     }?></h2>
                    <h2 style="color:red"><?php if($this->input->get('dlt')=='yes')
                     {   
                         echo 'Deleted Data Successfully..!!';
                     }?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="seller-dashboard">Home</a>
                        </li>
                        <li>
                            <a href="add-category">Add Course</a>
                        </li>
                        <li class="active">
                            <a href="all-categories"><strong>All Course</strong></a>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Course Data Table</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Course Name</th>
                        <th>Course Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        foreach ($catList as $cd) { ?>
                    <tr class="center">
                        <td><?=$i; $i++;?></td>
                        <td><?=$cd->cat_name;?></td>
                        <td>
                            <img alt="<?=$cd->cat_name;?>" class="img img-thumbnail" style="height:100px" src="uploads/category/<?=$cd->cat_img;?>">
                        </td>
                        <td>
                            <a href="edit-sdata?Cid=<?php echo $cd->cid; ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="delete-sdata?Cid=<?php echo $cd->cid; ?>" onclick="return confirm ('Are you sure want to delete this category?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>                      
                    </tr> 
                        <?php } ?>
           </tbody>
                    </table>
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
    <script src="assets/admin/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="assets/admin/js/inspinia.js"></script>
    <script src="assets/admin/js/plugins/pace/pace.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
</body>
</html>
