  <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="assets/admin/img/user.png" width="100" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"><?= $this->session->userdata('sellercompany');?><strong class="font-bold"></strong>
                             </span> <span class="text-muted text-xs block"><?= $this->session->userdata('sellerfName')." ".$this->session->userdata('sellerlName');?><b class="caret"></b></span></span></a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="seller-profile">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="logout-seller">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        Ecom
                    </div>
                </li>
                <li class="active">
                    <a href="seller-dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-codepen"></i> <span class="nav-label">Courses</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="add-category">Add Course</a></li>
                        <li><a href="all-categories">All Courses</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Products</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="add-product">Add Product</a></li>
                        <li><a href="pro-list">All Product</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Orders</span><span class="fa arrow"></span><span class="label label-warning pull-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="all-orders">All Order</a></li>
                        <li><a href="lockscreen.html">Recent Order</a></li>
                        <li><a href="invoice.html">Delivered Order</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#"><i class="fa fa-gears"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Change password</a></li>
                        <li><a href="#">Other settings</a></li>
                    </ul>
                    </li>
                     <li>
                  <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Reports</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.html">Today</a></li>
                        <li><a href="mail_detail.html">Weekly</a></li>
                        <li><a href="mail_compose.html">Monthly</a></li>
                        <li><a href="email_template.html">Yearly</a></li>
                    </ul>
                     </li>
            </ul>

        </div>
    </nav>

