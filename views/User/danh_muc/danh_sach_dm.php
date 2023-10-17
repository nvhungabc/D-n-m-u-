<?php
require_once "templates/head.php";
require_once "templates/header.php";
?>
<section class="page-header profile_page">
     <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Danh Sách Hãng Xe</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Danh Mục</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Dealers-list-->
<section class="inner_pages">
  <div class="container">
    <div class="result-sorting-wrapper">
      <div class="sorting-count">
      <?php foreach($dm_loai_xe as $value):
        
          $total_dm = count($dm_loai_xe);
         ?>
   <?php endforeach ?>
        <p>Số Danh Mục : <?= isset($total_dm)? $total_dm:"0" ?></p>
      </div>
    </div>
    <div class="dealers_list_wrap">
     <?php foreach($dm_loai_xe as $value): 
     extract($value);
     $link_ds_xe = 'index.php?url=sanpham_danhmuc&ma_loai='.$ma_loai;
     ?>
      <div class="dealers_listing">
        <div class="row">
          <div class="col-sm-3 col-xs-4">
            <div class="dealer_logo"> <a href="<?= $link_ds_xe?>"><img src="<?= $logo ?>" alt="image"></a> </div>
          </div>
          <div class="col-sm-6 col-xs-8">
            <div class="dealer_info">
              <h5><a href="<?= $link_ds_xe?>"><?= $ten_loai ?> </a></h5>
             
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="view_profile"> <a href="<?= $link_ds_xe?>" class="btn btn-xs outline">Danh Sách Xe</a>
            
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<?php
require_once "templates/footer.php";

?>
