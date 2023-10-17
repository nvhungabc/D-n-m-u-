<?php
require('models/Admin/binh_luan.php');
function hienThiBL() {
    $ds_bl = layDSBL(); 
    include('views/Admin/binh_luan/danh_sach.php');
}
function xoaDSBL()
 { 
   xoaBL();
   include('views/Admin/binh_luan/danh_sach.php');
 }
 ?>