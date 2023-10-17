<?php
require('models/Admin/xe.php');

function hienThiXe() {
    $ds_lx = layDSLoaiXe(); 
    $ds_xe = layDSXe(); 
    include('views/Admin/xe/danh_sach.php');
}
function formThemMoiXe(){
    $ds_lx = layDSLoaiXe(); 
    themMoiXe();
    include('views/Admin/xe/them_moi.php');
}
function formSuaXe(){
    $ds_lx = layDSLoaiXe(); 
    $sua=  layMotXe($_GET['ma_xe']);
    suaXe();
    include('views/Admin/xe/chinh_sua.php');
 }
 function xoaDSX(){
    xoaXe();
    include('views/Admin/xe/danh_sach.php');
 }
