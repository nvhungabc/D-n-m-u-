<div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
<section id="banner" class="banner-section">

  <div class="container">

    <div class="div_zindex">

      <div class="row">

	  <div class="col-md-7"></div>

        <div class="col-md-5">

          <div class="banner_content">

            <h1>Tìm Chiếc Xe Phù Hợp Cho Bạn</h1>

            <p>Chúng tôi có hơn 100X Chiếc Xe Dành Cho Bạn. </p>

            <a href="index.php?url=list_san_pham" class="btn">Danh Sách Sản Phẩm <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>

        </div>

      </div>

    </div>

  </div>

</section>
<section class="about-us-section section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Chào Mừng Đến Với <span> CarForYou</span></h2>
      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng.</p>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-6">
      </div>
      <div class="col-lg-6 col-sm-6">
</div>
</div>
</div>
</section>


<section class="section-padding gray-bg">

  <div class="container">

    <div class="section-header text-center">

      <h2>TÌM CHIẾC XE PHÙ HỢP CHO BẠN </h2>

      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng.</p>

    </div>

    <div class="row"> 

      <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="height:400px">

          <?php foreach($six_sp as $value): 
            extract($value);
            $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.'';   ?>
          <div class="col-list-3">

            <div class="recent-car-list">

              <div class="car-info-box"> <a href="<?= $link_ct ?>"><img src="<?php echo $image ?>" class="img-fluid" alt=""></a>

                <div class="compare_item">


                </div>

                <ul>

                  <li><i class="fa fa-road" aria-hidden="true"></i><?= $so_km ?> km</li>

                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $dong_co?></li>

                  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?= $xuat_xu ?></li>

                </ul>

              </div>

              <div class="car-title-m">

                <h6><a href="<?= $link_ct ?>"><?=  $ten_xe?></a></h6>

                <span class="price"> <?= currency_format($price)?></span> 

              </div>

              <div class="inventory_info_m">

                 <p style="width:300px"><?= $detail ?></p>

              </div>

            </div>

          </div>
          <?php endforeach ?>
        </div>

        

        <!-- Recently Listed Used Cars -->



      </div>

    </div>

  </div>

</section>

<!-- /Resent Cat --> 



<!-- Fun Facts-->

<section class="fun-facts-section">

  <div class="container div_zindex">

    <div class="row">

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-calendar" aria-hidden="true"></i>10+</h2>

            <p>Kinh Doanh</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

          <!-- <?php
            foreach($total_xe as $value){
              $total_xes = count($total_xe);
            }
            ?> -->
            <h2><i class="fa fa-car" aria-hidden="true"></i><?=isset($total_xes)?$total_xes:"0"  ?>+</h2>

            <p>Chiếc xe</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">
            <!-- <?php
            foreach($total_don as $value){
              $total_dons = count($total_don);
            }
            ?> -->
            <h2><i class="fa fa-car" aria-hidden="true"></i><?= isset($total_dons)? $total_dons:"0"  ?></h2>

            <p>Đã ĐƯợc Đặt</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>

            <p>Lượt Thích</p>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Dark Overlay-->

  <div class="dark-overlay"></div>

</section>

<!-- /Fun Facts--> 



<!--Featured Car-->

<section class="section-padding">

  <div class="container">

    <div class="section-header text-center">

      <h2>Xe Nổi Bật <span>Ưu Đãi đặc Biệt</span></h2>

      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng. </p>

    </div>

    <div class="row">

     
    <?php foreach($three_sp as $value):
      extract($value);
      $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.'';
      ?> 
      <div class="col-list-3">

        <div class="featured-car-list">

          <div class="featured-car-img"> <a href="<?= $link_ct?>"><img src="<?= $image?>" class="img-fluid" alt="Image"></a>


            <div class="compare_item">
            </div>

          </div>

          <div class="featured-car-content">

            <h6><a href="#"><?= $ten_xe?></a></h6>

            <div class="price_info">

              <p class="featured-price"> <?=currency_format($price)?></p>

              <div class="car-location"><span><i class="fa  fa-credit-card" aria-hidden="true"></i></span></div>

            </div>

            <ul>

              <li><i class="fa fa-road" aria-hidden="true"></i><?=$so_km ?> km</li>

              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>

              <li><i class="fa fa-car" aria-hidden="true"></i><?=$xuat_xu ?></li>

              <li><i class="fa fa-user" aria-hidden="true"></i><?= $slots ?> Chỗ</li>

              <li><i class="fa fa-superpowers" aria-hidden="true"></i><?= $dong_co ?></li>

            </ul>

          </div>

        </div>

      </div>
      <?php endforeach ?>

    </div>

  </div>

</section>

<!-- /Featured Car--> 



<!--Trending Car-->

<section class="section-padding gray-bg">

  <div class="container">

    <div class="section-header text-center">

      <h2>Xu Hướng <span>Xe Của Năm Nay</span></h2>

      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng. </p>

    </div>

    <div class="row">

      <div class="col-lg-12">

        <div id="trending_slider">

         <?php  foreach($six_sp as $value):
          extract($value);
          $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.''; 
          ?> 
          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="<?= $image ?>" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="<?= $link_ct ?>"><?= $ten_xe ?></a></h4>

            </div>

          </div>

          <?php endforeach ?>
        </div>

      </div>

    </div>

  </div>

</section>



