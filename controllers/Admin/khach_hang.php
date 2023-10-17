<?php
require('models/Admin/khach_hang.php');

function hienThiKhachHang() {
    $ds_kh = layDSKhachHang(); 
    include('views/Admin/khach_hang/danh_sach.php');
}
function formThemMoiKH(){
  themMoiKH();
    include('views/Admin/khach_hang/them_moi.php');
}
function formSuaKH(){
    $kh = layMotKH($_GET['ma_kh']);
    suaKH();
    include('views/Admin/khach_hang/chinh_sua.php');
}
function xoaDSKH()
 { 
   xoaKhachHang();
   include('views/Admin/khach_hang/danh_sach.php');
 }

