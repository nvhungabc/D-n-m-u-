<?php 
require './models/User/DatLich.php';

function HienThiDSDatLich(){
$ds_xe_dat= layDSDatXe();

 include("views/User/dat_lich/dat_lich.php");
}

?>