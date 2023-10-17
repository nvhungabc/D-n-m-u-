<?php
require_once "./models/User/TrangChu.php";
function TrangChuUser(){
    $three_sp=  layDS3SanPham();
    $six_sp=  layDS6SanPham();
    $total_don = soDonDaDat();
    $total_xe = soXeDangCo();
   login();
    include "./templates/layout.php";
}


?>