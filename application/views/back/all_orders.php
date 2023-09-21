<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/search_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jan 2018 05:43:43 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$title;?></title>

    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
    <?php include 'layout/sidebar.php'; ?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <?php include 'layout/header_dash.php';?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>All Orders</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="seller-dashboard">Dashboard</a>
                        </li>
                        <li>
                            Orders
                        </li>
                        <li class="active">
                            <strong>All Orders</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th>Sno</th>
                        <th>Order No. </th>
                        <th>Name </th>
                        <th>Phone </th>
                        <th>Bill Amount </th>
                        <th>Status </th>
                        <th>Order Date </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($allOrder as $ot) { ?>
                      <tr>
                        <td><?=$i;$i++;?></td>
                        <td>#<?=$ot->order_no;?></td>
                        <td><?=$ot->Fname." ".$ot->Lname;?></td>
                        <td><?=$ot->u_mobile;?></td>
                        <td>&#8377;<?=$ot->amount;?></td>
                        <td><span class="badge badge-success"><?=$ot->order_status;?></span></td>
                        <td><?=$ot->order_date;?></td>
                        <td><a href="order-details?or=<?= base64_encode($ot->order_no);?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a></td>
                      </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div> 
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/search_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jan 2018 05:43:43 GMT -->
</html>
