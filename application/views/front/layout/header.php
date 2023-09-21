<!-- Header-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="site-header navbar-sticky">
      <!-- Topbar-->
      <div class="topbar d-flex justify-content-between">
        <!-- Logo-->
        <div class="site-branding d-flex"><a class="site-logo align-self-center" href="#"><img src="assets/user/img/logo/aa.png" alt="AddhayyanSamagry"></a></div>
        <!-- Search / Categories-->
        <div class="search-box-wrap d-flex">
          <div class="search-box-inner align-self-center">
            <div class="search-box d-flex">
              <div class="btn-group categories-btn">
                <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="icon-menu text-lg"></i>&nbsp;Courses</button>
                <div class="dropdown-menu mega-dropdown">
                  <div class="row">
                      <?php foreach ($catList as $cl) { ?>
                      <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="all-products?cat=<?=$cl->cid;?>"><img class="d-block" style="height:70%" src="uploads/category/<?php echo $cl->cat_img;?>"><span class="text-gray-dark"><?=$cl->cat_name;?></span></a></div> 
                      <?php } ?>
                  </div>
                </div>
              </div>
              <form class="input-group" method="get"><span class="input-group-btn">
                  <button type="submit"><i class="icon-search"></i></button></span>
                <input class="form-control" type="search" placeholder="Search for anything">
              </form>
            </div>
          </div>
        </div>
        <!-- Toolbar-->
        <div class="toolbar d-flex">
            <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
              <div><i class="icon-user"></i><span class="text-label">Profile</span></div>
              </a></div>
          <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
              <div><i class="icon-menu"></i><span class="text-label">Menu</span></div>
              </a></div>
          <?php if($this->session->userdata('userId')== "") {?>
          <div class="toolbar-item hidden-on-mobile"><a href="account-loginPage">
              <div><i class="icon-user"></i><span class="text-label">Sign In / Up</span></div></a>
            <div class="toolbar-dropdown text-center px-3">
             <a class="btn btn-primary btn-sm btn-block" href="account-loginPage">Sign In</a>
              <p class="text-xs text-muted mb-2">New customer?&nbsp;<a href="account-loginPage">Register</a></p>
            </div>
          </div>
              <?php } else { ?>
             <div class="toolbar-item hidden-on-mobile"><a href="#">
              <div><i class="icon-user"></i><span class="text-label"><?php echo $this->session->userdata('userfName')." ".$this->session->userdata('userlName')?></span></div></a>
            <div class="toolbar-dropdown text-center px-3">
             <a class="btn btn-primary btn-sm btn-block" href="logout-user">Logout</a>
            </div>
             </div>
              <?php }?>
          <div class="toolbar-item"><a href="cart-page">
                  <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label refreshDiv"><?=$this->cart->total_items();?></span></span><span class="text-label">Cart</span></div></a>
           </div>
        </div>
        <!-- Mobile Menu-->
        <div class="mobile-menu">
          <!-- Search Box-->
          <div class="mobile-search">
            <form class="input-group" method="get"><span class="input-group-btn">
                <button type="submit"><i class="icon-search"></i></button></span>
              <input class="form-control" type="search" placeholder="Search site">
            </form>
          </div>
           <!-- Slideable (Mobile) Menu-->
          <nav class="slideable-menu">
            <ul class="menu" data-initial-height="385">
              <li class="has-children active"><span><a href="homepage">Home</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li><a href="all-categoryPage">All Courses</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Help/FAQs</a></li>
                </ul>
              </li>
              <li><span>
                      <a href="all-pro-list">Products</a>
                      </span>
              </li>
              <?php if($this->session->userdata('userId')!= "") {?>
              <li class="has-children"><span><a href="#">Account</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li><a href="account-profile">Profile</a></li>
                    <li><a href="account-password-recovery.html">Change Password</a></li>
                    <li><a href="account-orders">Orders List</a></li>
                    <li><a href="wishlist-page">Wishlist</a></li>
                   <li><a href="account-address.html">Contact / Shipping Address</a></li>
                    </ul>
              </li>
              <?php }?>
               <li><a href="seller-login-page">Become a Seller</a>
               </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Navbar-->
      <div class="navbar">
        <div class="btn-group categories-btn">
          <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="icon-menu text-lg"></i>&nbsp;Courses</button>
          <div class="dropdown-menu mega-dropdown">
            <div class="row">
             <?php foreach ($catList as $cl) { ?>
                  <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="all-products?cat=<?=$cl->cid;?>"><img class="d-block" style="height:70px" src="uploads/category/<?php echo $cl->cat_img;?>"><span class="text-gray-dark"><?=$cl->cat_name;?></span></a></div> 
             <?php } ?>
            </div>
          </div>
        </div>
        <!-- Main Navigation-->
        <nav class="site-menu">
          <ul>
            <li class="has-submenu active"><a href="homepage">Home</a>
              <ul class="sub-menu">
                <li><a href="all-categoryPage">All Courses</a>
                </li>
                <li><a href="#">About us</a>
                </li>
                <li><a href="#">Contacts</a>
                </li>
                <li><a href="#">Help/FAQs</a>
                </li>
              </ul>
            </li>
            <li><a href="all-pro-list">Products</a>
            </li>
            <?php if($this->session->userdata('userId')!= "") {?>
            <li class="has-submenu"><a href="#">Account</a>
              <ul class="sub-menu">
                  <li><a href="account-profile">Profile</a></li>
                  <li><a href="account-password-recovery.html">Change Password</a></li>
                  <li><a href="account-orders">Orders List</a></li>
                  <li><a href="wishlist-page">Wishlist</a></li>
                 <li><a href="account-address.html">Contact / Shipping Address</a></li>
                  </ul>
            </li>
            <?php } ?>
            <li><a href="seller-login-page">Become a Seller</a>
<!--              <ul class="sub-menu">
                  <li><a href="">Register</a></li>
                  <li><a href="">Login</a></li>
              </ul>-->
            </li>
          </ul>
        </nav>
        <!-- Toolbar ( Put toolbar here only if you enable sticky navbar )-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <div class="toolbar-item"><a href="cart-page">
                    <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label refreshDiv2"><?=$this->cart->total_items();?></span></span><span class="text-label">Cart</span></div></a>
              <div class="toolbar-dropdown cart-dropdown widget-cart">
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>