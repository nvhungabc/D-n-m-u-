<body id="index1 ">

<div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
<?php 

function currency_format($number, $suffix = 'VND') {
  if (!empty($number)) {
      return number_format($number, 0, ',', '.') . ' '. "{$suffix}";
  }
}?>
<!-- Start Switcher -->



    <div class="demo_changer">

        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>

        <div class="form_holder">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="predefined_styles">

                        <div class="skin-theme-switcher">

                            <h4>Color</h4>

                            <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a>

                            <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>

                            <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#228dcb;"> </a>

                            <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>

                            <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>

                            <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- /Switcher -->  

        

<!--Header-->

<header>

  <div class="default-header">

    <div class="container">

      <div class="row">

        <div class="col-sm-3 col-md-2">

          <div class="logo"> <a href="index.php"><img src="assets/image/logo.png" alt="image"/></a> </div>

        </div>

        <div class="col-sm-9 col-md-10">

          <div class="header_info">

            <div class="header_widgets">

              <div class="circle_icon"> <i class="fa-solid fa-envelope"></i> </div>

              <p class="uppercase_text">Hỗ trợ qua Mail </p>

              <a href="mailto:info@example.com">hungnvph23034@fpt.edu.vn</a> </div>

            <div class="header_widgets">

              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>

              <p class="uppercase_text">Dịch vụ hỗ trợ: </p>

              <a href="tel:61-1234-5678-09">+84 367767248</a> </div>

            <div class="social-follow">

              <ul>

                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

              </ul>

            </div>
          
           <?php 
           if(!isset($_SESSION['username'])) {
            echo' <div class="login_btn"> <a href="index.php?url=login" class="btn btn-xs uppercase"  >Đăng Nhập / Đăng Ký</a> </div>
            ';
           } else {
           
            echo ' <div class="login_btn"> <a  class="btn btn-xs uppercase"  >Hello ->'.$_SESSION['username'].'</a> </div>
            ';
           }
            ?>
           
        
            
        
            <div>
           
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

  

 <!-- Navigation -->

  <nav id="navigation_bar" class="navbar navbar-expand-lg">

    <div class="container">

	<div class="row header-row desktop">

      <div class="navbar-header">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>

      </div>

      

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="nav navbar-nav">

          <li> <a href="index.php" >Trang Chủ</a>

          	 <!-- <ul class="dropdown-menu">

              <li><a href="index.html">Home Page 1</a></li>

              <li><a href="index-2.html">Home Page 2</a></li>

			  <li><a href="index-3.html">Home Page 3</a></li>

            </ul> -->

          </li>

          <li><a href="index.php?url=thong_tin">Thông tin</a></li>

          <li class="dropdowns"><a href="index.php?url=list_san_pham" id="dropdownMenuButton2">Danh Sách Xe</a>

            <ul class="dropdown-menu">
            </ul>

          </li>

          <li class="dropdown"><a href="index.php?url=danh_sach_dm" id="dropdownMenuButton3"  aria-expanded="false">Danh Mục</a>

            <ul class="flex dropdown-menu ">
            </ul>

          </li>
        </ul>

      </div>

	  <div class="header_wrap">

        <div class="user_login">
        <?php
                    if(isset($_SESSION['ma_kh'])){
                      $ma_kh = $_SESSION['ma_kh'];
                    }
                    else{
                    $ma_kh = "";
                   }
                      $link_dl= "index.php?url=ds_dat_lich&ma_kh=".$ma_kh
                       ?>
          <ul>

            <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> <?= isset($_SESSION['username'])?$_SESSION['username']:"Tên Đăng Nhập" ?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            
              <ul   class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
               
                
      
                
                <li><a class="dropdown-item" href="">Xe Của Tôi</a></li>
                <?php if(isset($_SESSION['username'])){?>
                <li><a class="dropdown-item" onclick="return confirm('Bạn có chắc là muốn đăng xuất')"  name="dang_xuat" href="index.php?url=logout">Đăng Xuất</a></li>
              
              </ul>
             
            </li>

          </ul>
          <?php }?>
        </div>

        <div class="header_search">

          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>

          <form action="index.php?url=list_san_pham" method="post" id="header-search-form">

            <input type="text" name="key" placeholder="Search..." class="form-control">

            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

          </form>

        </div>

      </div>

  </div>

	  

	  <!-- mobile-view -->

	  <div class="row header-row mobile">

	<div class="col-10 col-md-8 right">

      <div class="navbar-header">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>

      </div>

      

      <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <ul class="nav navbar-nav">

          <li ><a href="index.php"  >Home</a>
          </li>

          <li><a href="about-us.html">About Us</a></li>

          <li class="dropdown"><a href="#" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false">Inventory</a>

            <ul class="dropdown-menu">

              <li><a href="listing-grid.html">Grid Style</a></li>

              <li><a href="listing-classic.html">Classic Style</a></li>

              <li><a href="listing-detail.html">Detail Page Style 1</a></li>

              <li><a href="listing-detail-2.html">Detail Page Style 2</a></li>

            </ul>

          </li>

          <li class="dropdown"><a href="#" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">Dealers</a>

            <ul class="dropdown-menu">

              <li><a href="dealers-list.html">List View</a></li>

              <li><a href="dealers-profile.html">Detail Page</a></li>

            </ul>

          </li>

          <li class="dropdown"><a href="#" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

            <ul class="dropdown-menu">

              <li><a href="services.html">Services</a></li>

              <li><a href="contact-us.html">Contact Us</a></li>

              <li><a href="compare.html">Compare Vehicles</a></li>

              <li><a href="faq.html">FAQ</a></li>

              <li><a href="404.html">404 Error</a></li>

              <li><a href="coming-soon.html">Coming Soon</a></li>

            </ul>

          </li>

          <li class="dropdown"><a href="#" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">News</a>

            <ul class="dropdown-menu">

              <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>

              <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>

              <li><a href="blog-detail.html">Blog Detail</a></li>

            </ul>

          </li>

        </ul>

      </div>

	  <div class="header_wrap">

        <div class="user_login">

          <ul>

            <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle" id="dropdownMenuButton13" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> Jhon Anderson <i class="fa fa-angle-down" aria-hidden="true"></i></a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton13">

                <li><a class="dropdown-item" href="profile-settings.html">Profile Settings</a></li>

                <li><a class="dropdown-item" href="my-vehicles.html">My Vehicles</a></li>

                <li><a class="dropdown-item" href="post-vehicle.html">Post a Vehicle</a></li>

                <li><a class="dropdown-item" onclick="return confirm('Bạn có chắc là muốn đăng xuất')"  name="dang_xuat" href="index.php?url=logout">Sign Out</a></li>

              </ul>

            </li>

          </ul>

        </div>

        <div class="header_search">

          <div id="search_toggle1"><i class="fa fa-search" aria-hidden="true"></i></div>

          <form action="#" method="get" id="header-search-form1">

            <input type="text" placeholder="Search..." class="form-control">

            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

          </form>

        </div>

      </div>

	  </div>

	  

	  <div class="col-2 col-md-4 right">

		<div class="user_login mobile">

          <ul>

            <li class="dropdown"> <a href="#" id="dropdownMenuButton15" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i></a>

              <ul class="dropdown-menu">

                <li><a href="profile-settings.html">Profile Settings</a></li>

                <li><a href="my-vehicles.html">My Vehicles</a></li>

                <li><a href="post-vehicle.html">Post a Vehicle</a></li>

                <li><a onclick="return confirm('Bạn có chắc là muốn đăng xuất')"  name="dang_xuat" href="index.php?url=logout">Sign Out</a></li>

              </ul>

            </li>

          </ul>

        </div>

	  </div>

	  

	  </div>

	  <!-- mobile-view -->

	  

    </div>

  </nav>

  <!-- Navigation end --> 

  

</header>