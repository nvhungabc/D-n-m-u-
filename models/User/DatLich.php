<?php 
  
  function layDSDatXe(){
    if(isset($_GET['ma_kh']) && isset($_POST['trang_thai'])){
    $ma_kh = $_GET['ma_kh'];
    $trang_thai = $_POST['trang_thais'];
    if($trang_thai != 3){
      $sql = " SELECT *  from xe, dat_lich, khach_hang where xe.ma_xe = dat_lich.ma_xe and khach_hang.ma_kh dat_lich.ma_kh and khach_hang.ma_kh=$ma_kh and dat_lich.trang_thai = $trang_thai";
      $list_don = getData($sql, FETCH_ALL);
    }
  else{
   
    $sql = " SELECT *  from xe, dat_lich, khach_hang where xe.ma_xe = dat_lich.ma_xe and khach_hang.ma_kh = dat_lich.ma_kh and khach_hang.ma_kh=$ma_kh ";
    $list_don = getData($sql, FETCH_ALL);
  }
    }
    elseif(isset($_GET['ma_kh']) || isset($_POST['trang_thai'])){
      $ma_kh = $_GET['ma_kh'];
      $sql = " SELECT *  from xe, dat_lich, khach_hang where xe.ma_xe = dat_lich.ma_xe and khach_hang.ma_kh = dat_lich.ma_kh and khach_hang.ma_kh=$ma_kh ";
      $list_don = getData($sql, FETCH_ALL);
  }
    return $list_don;
}
