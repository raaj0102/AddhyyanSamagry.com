<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jan 2018 05:48:27 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$title;?></title>

    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="assets/admin/css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">

    <link href="assets/admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?php include 'layout/sidebar.php';?>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <?php include 'layout/header_dash.php';?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Order Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="seller-dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a>Orders</a>
                        </li>
                        <li class="active">
                            <strong>Order Details</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
            <?php foreach ($orderdetails as $odt) { ?>
            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="order_id">Order ID</label>
                            <input type="text" value="<?=base64_decode($this->input->get('or'));?>"  class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="status">Order status</label>
                            <input type="text" name="status" value="<?=$odt->order_status;?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Order Date</label>
                            <input type="text" name="order-date" value="<?=$odt->order_date;?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" class="form-control" name="city" value="<?=$odt->City;?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">ZipCode</label>
                            <input type="number" name="zip" class="form-control" value="<?=$odt->Zip_code;?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" name="add" value="<?=$odt->addr1;?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>

                                    <th>S.No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Qty</th>
                                    <th>Available Stock</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($oDetails as $od) { ?>
                                <tr>
                                    <td>
                                      <?=$i; $i++;?>
                                    </td>
                                    <td>
                                        <img width="100px" src="uploads/products/<?=$od->photo;?>">
                                    </td>
                                    <td>
                                       <?=$od->p_name;?>
                                    </td>
                                    <td>
                                        &#8377;<?=$od->price2;?>
                                    </td>
                                    <td>
                                        <?=$od->qty;?>
                                    </td>
                                    <td>
                                        <span class="label label-primary"><?=$od->stock;?></span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
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

    <!-- Data picker -->
    <script src="assets/admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- FooTable -->
    <script src="assets/admin/js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

            $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#date_modified').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        });

    </script>
</body>
</html>
