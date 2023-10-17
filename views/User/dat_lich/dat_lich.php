<!-- <?php
require_once "templates/head.php";
require_once "templates/header.php";
if(isset($_POST['trang_thai'])){
$trang_thai = $_POST['trang_thais'];
}
else{
  $trang_thai = "";
}
?>

<div class="row text-center" >

<div class="col-md-10 col-sm-8 mx-auto">

<?php if(isset($_SESSION['username'])){?>

 
        <div class="profile_wrap">
        <?php 
        
        foreach($ds_xe_dat as $value): 
      
          $tatol_xe = count($ds_xe_dat);
        
          ?>
          
        <?php endforeach 
       ?>
    
          <h5 class="uppercase underline">Xe đã Đặt <span>(<?= isset($tatol_xe)?$tatol_xe:"" ?>  XE)</span></h5>
          <div class="result-sorting-wrapper">
          
          <div class="result-sorting-by">
           
            <form action="" method="post">
              <div class="form-group select sorting-select">
               
                <select class="form-control " name="trang_thais">
                  <option selected  value="3" <?php if($trang_thai == 3){echo "selected";} ?>>Tất Cả</option>
                  <option  value="0" <?php if($trang_thai == 0){echo "selected";} ?>  >Chưa Duyệt</option>
                  <option   value="1" <?php if($trang_thai == 1){echo "selected";} ?>>Đã Duyệt</option>
                  <option   value="2" <?php if($trang_thai == 2){echo "selected";} ?>>Từ Chối</option>
             
                
                </select>
              
              </div>
       
              <div><input type="submit" name="trang_thai" id="price" value="Tìm"></div>
            </form>
          </div>
        </div>
          <div class="my_vehicles_list">
        
            <ul class="vehicle_listing">
            <?php
  
       
            foreach($ds_xe_dat as $value):
              extract($value);
            
              ?>
              <li>
                <div class="vehicle_img"> <a href="#"><img src="<?= $image?>" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href=""><?= $ten_xe ?></a></h6>
                </div>
                <div class="vehicle_status"> <a  class="btn outline btn-xs "><?php 
                if($trang_thai==0){
                echo 'Chưa duyệt';
                }
                elseif($trang_thai ==1){
                  echo "Đã Duyệt";
                }
                else{
                echo "Bị Từ Chối";}
                ?></a>
                  <div class="clearfix"></div>
              </li>
           
              <?php  endforeach ?>
            </ul>
      
            
          </div>
         
        </div>

        <?php } ?>
      </div>
      <?php if(!isset($_SESSION['username'])){ ?>
        <h1>Bạn cần đăng nhập</h1>
      <?php } ?>
</div>
      <?php
require_once "templates/footer.php";

?> -->