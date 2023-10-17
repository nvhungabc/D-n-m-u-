<?php
require_once "templates/head.php";
require_once "templates/header.php";
// date_default_timezone_set("Asia/Ho_Chi_Minh");
// $time = date('m/d/Y H:i');
// if (isset($_POST['dat_xem_xe'])) {
//   $ngay_xem = $_POST['ngay_xem'];
//   $ghi_chu = $_POST['ghi_chu'];
//   $error=[];

//   if (empty($ghi_chu)) {
//     $error['ghi_chu'] = 'Bạn chưa nhập ghi chú';
//   }

//   if (empty($ngay_xem)) {
//     $error['ngay_xem'] = 'Bạn chưa nhập ngày xem';
//   }
//   if(strtotime($ngay_xem)<= strtotime($time) && $ngay_xem!="" && strtotime($ngay_xem)>=0){
//     $error['ngay_xem1'] = 'Ngày xem đã qua';
  
//   }
//   if(!$error){
//     echo "<script>
//     alert('Đăng ký thành công, Vui lòng kiểm tra email');
//     </script>";
//   }
// }

?>
<script>

</script>
<!-- Listing-detail-header -->
<?php extract($sp) ?>
<section class="listing_detail_header">
  <div class="container">
    <div class="listing_detail_head white-text div_zindex row">
      <div class="col-md-9">
        <h3>Chi Tiết: </h3>
        <h2><?= $ten_xe ?></h2>
        <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $xuat_xu ?></span></div>
        <div class="add_compare">

          <div class="share_vehicle">
            <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"></a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p class=""> <?= currency_format($price) ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
<!-- /Listing-detail-header -->



<!-- Filter-Form -->
<section id="filter_form" class="inner-filter gray-bg">
  <div class="container">
    <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>


  </div>
</section>
<!-- /Filter-Form -->

<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="row">

      <div class="col-md-9">
        <div class="listing_images">
          <div class="listing_images_slider">
            <div><img src="<?php echo $image ?>" alt="image"></div>
          </div>
          <div class="listing_images_slider_nav">
          </div>
        </div>
        <div class="main_features">
          <ul>
            <li> <i class="fa fa-tachometer" aria-hidden="true"></i>
              <h5><?= $so_km ?></h5>
              <p>Tổng Số Km</p>
            </li>
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5><?= $xuat_xu ?></h5>
              <p>Năm sản xuất</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>Diesel</h5>
              <p>Loại Dầu</p>
            </li>
            <li> <i class="fa fa-power-off" aria-hidden="true"></i>
              <h5>Automatic</h5>
              <p>Bộ Chuyển Đổi</p>
            </li>
            <li> <i class="fa fa-superpowers" aria-hidden="true"></i>
              <h5><?= $dong_co ?></h5>
              <p>Mã Lực</p>
            </li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5><?= $slots ?></h5>
              <p>Chỗ Ngồi</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">


          <!--Vehicle-Video-->
          <div class="video_wrap">
            <h6>Thông Tin Chi Tiết </h6>
            <div class="video-box">
              <p><?= $detail ?></p>
            </div>
          </div>

          <!--Comment-Form-->

          <div class="comment_form">
            <h6>Bình Luận</h6>

            <form method="post">
              <div class="form-group">
                <input type="text" name="user" class="form-control" placeholder="Full Name">
              </div>

              <div class="form-group">
                <textarea rows="5" name="noidung" class="form-control" placeholder="Comments"></textarea>
              </div>
              <?php if (isset($_SESSION['username'])) { ?>
                <div class="form-group">
                  <input type="submit" name="btn_bl" class="btn" value="Submit Comment">
                </div>
              <?php } ?>
            </form>

          </div>
          <!--/Comment-Form-->
          <div>
            <h5>List Bình Luận</h5>
            <div class="form-group">
              <?php foreach ($bl as $value) : ?>
                <div style="margin-top:10px;  background-color: #eee;padding:10px">
                  <strong class=""> Tên Bình Luận: <?= $value['user']  ?> </strong> <br>
                  <span> <b>Nội Dung: </b> <?= $value['noidung'] ?></span>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>

      <!--Side-Bar-->
      <aside class="col-md-3">
        <div class="sidebar_widget" style="width:300px">
          <div class="widget_heading" >
            <h5><i class="fa fa-calculator" aria-hidden="true"></i> Đăng Ký Đặt Lịch </h5>
          </div>
          <div class="financing_calculatoe">
            <form name="them_khach_hang" action="" method="POST">
              <table cellpadding="10px" cellspacing="0">
                <h2><b><?php echo isset($suc) ? $suc : "" ?></b> </h2>
                <input type="hidden" name="ma_kh" id="">
                <tr>
                  <td>Ngày Xem<br /><input type="datetime-local" name="ngay_xem" value="<?php echo isset($ngay_xem) != "" ? $ngay_xem : "" ?>" id="ngay_xem">
                    <br>
                    <b class="mt-4 underline" style="color: red;"><?php echo isset($error['ngay_xem']) ? $error['ngay_xem'] : "" ?></b>
                    <b class="mt-4 underline" style="color: red;"><?php echo isset($error['ngay_xem1']) ? $error['ngay_xem1'] : "" ?></b>
                  </td>

                </tr>
                <tr>
                  <td>Ghi Chú<br /><input type="textarea" value="<?php echo isset($ghi_chu) != "" ? $ghi_chu : "" ?>" name="ghi_chu" id="ghi_chu" placeholder="">
                    <br>
                    <b class="mt-4 underline" style="color: red;"><?php echo isset($error['ghi_chu']) ? $error['ghi_chu'] : "" ?></b>
                  </td>

                </tr>
                <?php if (isset($_SESSION['username'])) {
                  echo ' <tr>
                    <td ><input type="submit"  class="btn-danger" value="Đặt Ngay" name="dat_xem_xe" id="submit"/>
                    <a href="index.php">Về Trang Chủ</a>
                    </td>
                </tr>';
                } else {
                  echo ' <tr>
                    <td >
                    <p style="color:gray;">Bạn Cần Đăng Nhập Để Thực Hiện Đặt Xe</p>
                    <a href="index.php">Về Trang Chủ</a></a>
                    </td>
                </tr>';
                }
                ?>
              </table>
            </form>
          </div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Thông tin đặt xe </h5>
          </div>

          <div class="dealer_detail">
            <p><span>Tên khách hàng:</span> <?= isset($thong_tin_kh['ten_khach_hang']) ? $thong_tin_kh['ten_khach_hang'] : "" ?></p>
            <p><span>Email:</span><?= isset($thong_tin_kh['email']) ? $thong_tin_kh['email'] : "" ?></p>
            <p><span>Số Điện Thoại:</span> <?= isset($thong_tin_kh['so_dien_thoai']) ? $thong_tin_kh['so_dien_thoai'] : "" ?></p>
            <a href="index.php?url=ds_dat_lich&ma_kh= <?= $ma_kh ?> " class="btn btn-xs">View Profile</a>
          </div>
        </div>
      </aside>
      <!--/Side-Bar-->

    </div>
    <div class="space-20"></div>
    <div class="divider"></div>

    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Sản phẩm cùng loại</h3>

      <div class="row">
        <?php foreach ($cung_loai as $value) :
          extract($value);
          $link_ct = 'index.php?url=sanpham_chitiet&ma_xe=' . $ma_xe . '&ma_loai=' . $ma_loai . '';
        ?>
          <div class="col-md-3 grid_listing">
            <div class="product-listing-m gray-bg">
              <div class="product-listing-img"> <a href="<?= $link_ct ?>"><img src="<?= $image ?>" class="img-fluid" alt="image" /> </a>
              </div>
              <div class="product-listing-content">
                <h5><a href="<?= $link_ct ?>"><?= $ten_xe ?> </a></h5>
                <p class="list-price"><?=currency_format($price)  ?></p>
                <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
                <ul class="features_list">
                  <li><i class="fa fa-road" aria-hidden="true"></i><?= $so_km ?> km</li>
                  <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>$dong_co</li>
                  <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>

    </div>
    <!--/Similar-Cars-->

  </div>
</section>

<!--Footer -->
<?php require_once "templates/footer.php"; ?>
<!-- /Footer-->

<script src="assets/js2/jquery.min.js"></script>
<script src="assets/js2/bootstrap.min.js"></script>
<script src="assets/js2/interface.js"></script>
<script src="assets/js2/31f5977fdc.js"></script>
<script src="assets/switcher/js2/switcher.js"></script>
<script src="assets/js2/bootstrap-slider.min.js"></script>
<script src="assets/js2/slick.min.js"></script>
<script src="assets/js2/owl.carousel.min.js"></script>

</body>

</html>