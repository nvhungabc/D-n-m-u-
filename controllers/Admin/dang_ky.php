<?php

require('models/Admin/dang_ky.php');
function hienThiDangKy_0() { 
    $dk_0 = layDSDK_0();
    $ct1 = ctDangKy1();
    include('views/Admin/dang_ky/chua_duyet.php');
}
function hienThiDangKy_1() { 
    $dk_1 = layDSDK_1();
    $ct1 = ctDangKy1();
    include('views/Admin/dang_ky/da_duyet.php');
}
function hienThiDangKy_2() { 
    $dk_2 = layDSDK_2();
    $ct1 = ctDangKy1();
    
    include('views/Admin/dang_ky/huy.php');
}
function chiTietDangKy_0() { 
    $ct = ctDangKy($_GET['ma_dat']);
    suaDangKy();
    huyDon();
    include('views/Admin/dang_ky/chitiet_0.php');
}
function chiTietDangKy_1() { 
    $ct = ctDangKy($_GET['ma_dat']);
    xoaDangKy_1();
    
    include('views/Admin/dang_ky/chitiet_1.php');
}
function chiTietDangKy_2() { 
    $ct = ctDangKy($_GET['ma_dat']);
    xoaDangKy_2();
    
    include('views/Admin/dang_ky/chitiet_2.php');
}
function formSuaDangKy(){
   
    suaDangKy();
    include('views/Admin/dang_ky/chitiet_0.php');
 }
 function formHuyDon(){
    huyDon();
    include('views/Admin/dang_ky/chitiet_0.php');
 }
 function xoaDSDK_1(){
    xoaDangKy_1();
    include('views/Admin/dang_ky/da_duyet.php');
 }
 function xoaDSDK_2(){
    xoaDangKy_2();
    include('views/Admin/dang_ky/huy.php');
 }