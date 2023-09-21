<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Morris -->
    <link href="assets/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
  <?php include 'layout/sidebar.php'; ?>
        <div id="page-wrapper" class="gray-bg">
        <?php include 'layout/header_dash.php';?>               
            <div class="wrapper wrapper-content">
            <div class="row">
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-th-large fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span><a href="all-categories" style="color:white;"> All Courses </a></span>
                            <h2 class="font-bold"><?=$stats['total_cat'];?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 blue-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-th fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span><a href="pro-list" style="color:white;"> All Products</a></span>
                            <h2 class="font-bold"><?= $stats['total_pro']?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 bg-warning">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-truck fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span><a href="all-orders" style="color:white;">Total Orders </a></span>
                            <h2 class="font-bold"><?= $stats['all_pro']?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 bg-info">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-money fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span><a href="#" style="color:white;"> Total Income</a></span>
                            <h2 class="font-bold">&#8377; <?= $stats['total_income']?></h2>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="ibox-title">
                        <h5>Orders [Month:October]</h5>
                    </div>
                    <div class="ibox-content">
                        <canvas id="lineChart" style="width:100%;max-width:600px; height:250px"></canvas>
                    </div>
                </div>
            <div class="col-lg-5">
                    <div class="ibox-title">
                        <h5>Category wise Products</h5>
                    </div>
                    <div class="ibox-content">
                        <canvas id="myChart" style="width:100%;max-width:600px; height:250px"></canvas>
                    </div>
            </div>
            </div>
        <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Today's Order </h5>
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
            <div class="row">
                <div class="col-sm-9 m-b-xs"></div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="input-sm form-control"> 
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-sm btn-primary"> Go!</button>
                          </span>
                    </div>
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($orderToday as $ot) { ?>
                      <tr>
                        <td><?=$i;$i++;?></td>
                        <td>#<?=$ot->order_no;?></td>
                        <td><?=$ot->Fname." ".$ot->Lname;?></td>
                        <td><?=$ot->u_mobile;?></td>
                        <td>&#8377;<?=$ot->amount;?></td>
                        <td><span class="badge badge-success"><?=$ot->order_status;?></span></td>
                        <td><a href="order-details?or=<?= base64_encode($ot->order_no);?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a></td>
                      </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2020-2030
            </div>
        </div>
        </div>
        <div id="right-sidebar">
            <div class="sidebar-container">
                <ul class="nav nav-tabs navs-3">
                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">Notes</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-2">Projects</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#tab-3">
                        <i class="fa fa-gear"></i></a>
                    </li>
                </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                            <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                    </div>
                <div>
                    <div class="sidebar-message">
                        <a href="#">
                    <div class="pull-left text-center">
                        <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a1.jpg">
                            <div class="m-t-xs">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                    </div>
                    <div class="media-body">
                        There are many variations of passages of Lorem Ipsum available.
                        <br>
                        <small class="text-muted">Today 4:21 pm</small>
                    </div>
                        </a>
                    </div>
                        <div class="sidebar-message">
                            <a href="#">
                        <div class="pull-left text-center">
                            <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a2.jpg">
                        </div>
                        <div class="media-body">
                            The point of using Lorem Ipsum is that it has a more-or-less normal.
                            <br>
                            <small class="text-muted">Yesterday 2:45 pm</small>
                        </div>
                            </a>
                        </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a3.jpg">
                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        All the Lorem Ipsum generators on the Internet tend to repeat.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a3.jpg">
                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="assets/admin/img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        Uncover many web sites still in their infancy. Various versions have.
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>
                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.
                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.
                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.
                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.
                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-3" class="tab-pane">
                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>
                        <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                    <label class="onoffswitch-label" for="example">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Enable history
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                    <label class="onoffswitch-label" for="example3">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Show charts
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                    <label class="onoffswitch-label" for="example4">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Offline users
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                    <label class="onoffswitch-label" for="example5">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Global search
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                    <label class="onoffswitch-label" for="example6">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Update everyday
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                    <label class="onoffswitch-label" for="example7">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <h4>Settings</h4>
                            <div class="small">
                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
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
    <!-- Flot -->
    <script src="assets/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="assets/admin/js/plugins/flot/curvedLines.js"></script>
    <!-- Peity -->
    <script src="assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/admin/js/demo/peity-demo.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="assets/admin/js/inspinia.js"></script>
    <script src="assets/admin/js/plugins/pace/pace.min.js"></script>
    <!-- jQuery UI -->
    <script src="assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Jvectormap -->
    <script src="assets/admin/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Sparkline -->
    <script src="assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Sparkline demo data  -->
    <script src="assets/admin/js/demo/sparkline-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
var xValues = [<?= implode(",", $piedata['catName'])?>];
var yValues = [<?= implode(",", $piedata['proNo'])?>];
var barColors = [
//  "#b91d47",
//  "#00aba9",
//  "#2b5797",
//  "#e8c3b9",
//  "#1e7145",
//  "#1e7445",
//  "#1e9845",
//  "#1e9805",
//  "#1f3305",
//  "#45566e"
//  
  <?php $a = $piedata['catCount'];
  for ($i=1; $i<=$a; $i++)
  {
      echo '"#'.random_color().'",';
  }
          ?>
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: false,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>
<script>
var xValues = [<?= implode(",", $linedata['dt'])?>];
var yValues = [<?= implode(",", $linedata['ord'])?>];

new Chart("lineChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,222,250,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false}
//    scales: {
//      yAxes: [{ticks: {min: 6, max:16}}],
//    }
  }
});
</script>
<?php 
  function random_color_part(){
      return str_pad( dechex( mt_rand(0, 255)), 2,'0', STR_PAD_LEFT);
  }
  function random_color(){
      return random_color_part().random_color_part().random_color_part();
  }
?>
</body>
</html>
