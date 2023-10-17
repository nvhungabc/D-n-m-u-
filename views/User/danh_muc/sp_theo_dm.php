<?php
require_once "templates/head.php";
require_once "templates/header.php";
?>
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Car Listing</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="index.php?url=trang_chu">Home</a></li>
        <li>Car Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
	  <div class="mobile_search">
		 <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Car </h5>
          </div>

        </div>
	   </div>
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
         <?php foreach($sp_dm as $value):
              $tatols = count($sp_dm); ?>
               <?php endforeach ?>
            <p>Tổng Xe <?= isset($tatols)?$tatols:""  ?> </p> 
            
          </div>
    
        </div>
       <?php foreach($sp_dm as $value):
       $tatol = count($sp_dm);
       
        extract($value);
        $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.''; 
        ?>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="<?= $link_ct?>"><img src="<?= $image ?>" class="img-fluid" alt="Image" /> </a>
          </div>
          <div class="product-listing-content">
            <h5><a href="<?= $link_ct?>"><?= $ten_xe ?></a></h5>
            <p class="list-price">$<?= $price ?></p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i><?= $so_km ?> km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i><?= $slots ?> chỗ</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Loại dầu Diesel</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i><?= $dong_co ?> kW</li>
            </ul>
            <a href="<?= $link_ct?>" class="btn">Chi tiết <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Xuất Xứ: <?= $xuat_xu ?></span></div>
          </div>
        </div>
        <?php endforeach ?>
   
      </div>
<?php

require_once "templates/footer.php";
?>
