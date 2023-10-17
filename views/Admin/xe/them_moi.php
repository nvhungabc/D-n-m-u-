<?php
  if (isset($_POST['btn_them'])) {
    $ten_xe = $_POST['ten_xe'];
    $don_gia = $_POST['don_gia'];
    $ma_loai = $_POST['ma_loai'];
    $hinh =  $_FILES['hinh'];
  
    $thong_tin = $_POST['thong_tin'];
    $giam_gia = $_POST['giam_gia'];
    $so_km = $_POST['so_km'];
    $xuat_xu = $_POST['xuat_xu'];
    $slots = $_POST['slots'];
    $dong_co = $_POST['dong_co'];
    $file_name = uniqid() . $_FILES['hinh']['name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
  
    $sql = "SELECT * FROM xe ";
    $xe = getData($sql, FETCH_ALL);
    foreach ($xe as $value) {
        if ($ten_xe == $value['ten_xe']) {
            $error['ten_xe'] = 'Tên xe đã tồn tại';
        }
    }
   if(!$ten_xe){
    $ten_xe_err = 'CHƯA NHẬP';
   }
   if(!$don_gia){
    $don_gia_err = 'CHƯA NHẬP';
   }
   if(!$ma_loai){
     $ma_loai_err ='CHƯA NHẬP';
   }
   if(!$hinh['name']){
    $hinh_err = 'CHƯA NHẬP';
    $hinh1_err = 'CHƯA NHẬP';
   }
 
   if(!$thong_tin){
    $thong_tin_err ='CHƯA NHẬP';
   }
   if(!$giam_gia){
    $giam_gia_err = 'CHƯA NHẬP';
   }
   if(!$so_km){
    $so_km_err = 'CHƯA NHẬP';
   }
   if(!$xuat_xu){
    $xuat_xu_err = 'CHƯA NHẬP';
   }
   if(!$slots){
    $slots_err = 'CHƯA NHẬP';
   }
   if(!$dong_co){
    $dong_co_err = 'CHƯA NHẬP';
   }
   if($_FILES['hinh']['name'] != ''){
    if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
      $_SESSION['error'] = "File chỉ được có đuôi png,jpg,jpeg ";}
  }

   }

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
  <title>Matrix Template - The Ultimate Multipurpose admin template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
  <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <a class="navbar-brand" href="index2.php">
            <b class="logo-icon p-l-10">
              <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
            </b>
            <span class="logo-text">
              <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

            </span>
          </a>

          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

          <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

          </ul>

          <ul class="navbar-nav float-right">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="index.php?url=logout" onclick="return confirm('Bạn có chắc là muốn đăng xuất')" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>

            </li>

          </ul>
        </div>
      </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin5">

      <div class="scroll-sidebar">

        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index2.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">HOME</span></a></li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">LOẠI XE </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=ds_loai_xe" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">DANH SÁCH </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=them_loai_xe" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> THÊM MỚI </span></a></li>
              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">KHÁCH HÀNG </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=them_khach_hang" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> THÊM MỚI </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_khach_hang" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> DANH SÁCH </span></a></li>
              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-car"></i><span class="hide-menu">XE </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=them_xe" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> THÊM MỚI </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_xe" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> DANH SÁCH</span></a></li>

              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> ĐƠN ĐẶT</span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=ds_dang_ky_1" class="sidebar-link"><i class="fa-solid fa-check"></i><span class="hide-menu">ĐÃ DUYỆT </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_dang_ky_0" class="sidebar-link"><i class="fa-solid fa-xmark"></i></i><span class="hide-menu">CHƯA DUYỆT</span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_dang_ky_2" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i></i><span class="hide-menu">HỦY ĐƠN</span></a></li>
              </ul>
            </li>
          
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-sharp fa-solid fa-comments"></i></i><span class="hide-menu">BÌNH LUẬN  </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=ds_bl" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">DANH SÁCH </span></a></li>
             
              </ul>
            </li>

            </li>

          </ul>
        </nav>

      </div>

    </aside>

    <div class="page-wrapper">

      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">THÊM MỚI XE</h4>

          </div>
        </div>
      </div>
      <div class="container-fluid">
                <div class="r" >
                    <div class="col-md-6" style="margin: auto;"> 
                        <div class="card">
                            <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                          
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã Xe</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Auto" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tên Xe</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Nhập Tên Xe" name="ten_xe"  value = '<?= isset($ten_xe) ? $ten_xe : ''?>'>
                                            <span style="color: red;">
        <?php echo isset($ten_xe_err) ?  $ten_xe_err : ''; ?>
     </span>
                                          <span style="color: red;">
        <?php echo isset($error['ten_xe']) ?   $error['ten_xe'] : ''; ?>
     </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Đơn Giá</label>
                                        <div class="col-sm-9">
                                            <input type="number" min="1" class="form-control"  placeholder="Nhập Đơn Giá" name="price"  value = '<?= isset($price) ? $price : ''?>'>
                                            <span style="color: red;">
        <?php echo isset($price_err) ?  $price_err : ''; ?>
     </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Thông Tin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Nhập Thông Tin" name="detail"  value = '<?= isset($detail) ? $detail : ''?>'>
                                            <span style="color: red;">
        <?php echo isset($detail_err) ?  $detail_err : ''; ?>
     </span>
                                        </div>
                                    </div>
                                 
     </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số KM</label>
                                        <div class="col-sm-9">
                                            <input type="number" min="1" class="form-control"  placeholder="Nhập Số KM" name="so_km"  value = '<?= isset($so_km) ? $so_km : ''?>'>
                                            <span style="color: red;">
        <?php echo isset($so_km_err) ?  $so_km_err : ''; ?>
     </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Xuất Xứ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Nhập Xuất Xứ" name="xuat_xu"  value = '<?= isset($xuat_xu) ? $xuat_xu : ''?>'>
                                            <span style="color: red;">
        <?php echo isset($xuat_xu_err) ?  $xuat_xu_err : ''; ?>
     </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Slots</label>
                                        <div class="col-sm-9">
                                            <input type="number" min="0" class="form-control"  placeholder="Nhập Slots" name="slots"  value = '<?= isset($slots) ? $slots : ''?>'>
                                            <span style="color: red;">
        <?php echo isset($slots_err) ?  $slots_err : ''; ?>
     </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Động Cơ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Nhập Động Cơ" name="dong_co"  value = '<?= isset($dong_co) ? $dong_co : ''?>'>
                                            <span style="color: red;">
        <?php echo isset($dong_co_err) ?  $dong_co_err : ''; ?>
     </span>
                                        </div>
                                    </div>
                             
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình Chính</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control"  name="image">
                                            <span style="color: red;">
        <?php echo isset($_SESSION['error']) ?  $_SESSION['error'] : ''; ?>
     </span>
                                            <span style="color: red;">
        <?php echo isset($image_err) ?  $image_err : ''; ?>
     </span>
                                        </div>
                                    </div>
     </span>
     <span style="color: red;">
        <?php echo isset($_SESSION['error1']) ?  $_SESSION['error1'] : ''; ?>
     </span>
                                        </div>
  </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mã Loại</label>
                                        <div class="col-sm-9">
                                        <select id="" name="ma_loai" class="form-control" >
                    <option value="">Chọn</option>
                    <?php foreach ($ds_lx as $value) : ?>
                    <option value="<?php echo $value['ma_loai'] ?>"><?php echo $value['ten_loai']; ?></option>
                    <?php endforeach; ?>
                </select>
                                            <span style="color: red;">
        <?php echo isset($ma_loai_err) ?  $ma_loai_err : ''; ?>
     </span>
                                        </div>
                                    </div>
      
                         
                                </div>
                                <div class="border-top " >
                                    <div class="card-body" style="text-align: center;">
                                        <button  class="btn btn-primary" name="btn_them">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
  

                    </div>
                </div>
                <!-- editor -->
  

            </div>

    

    </div>

  </div>

  <script src="assets/libs/jquery/dist/jquery.min.js"></script>

  <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/extra-libs/sparkline/sparkline.js"></script>

  <script src="dist/js/waves.js"></script>

  <script src="dist/js/sidebarmenu.js"></script>

  <script src="dist/js/custom.min.js"></script>

  <script src="assets/libs/flot/excanvas.js"></script>
  <script src="assets/libs/flot/jquery.flot.js"></script>
  <script src="assets/libs/flot/jquery.flot.pie.js"></script>
  <script src="assets/libs/flot/jquery.flot.time.js"></script>
  <script src="assets/libs/flot/jquery.flot.stack.js"></script>
  <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
  <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>
