
<?php 
require './models/User/KhachHang.php';
function logins()
{
   login();
    include('views/User/tai_khoan/login.php');
}
function logouts(){
    logout();
   include('views/User/tai_khoan/logout.php');
}
function dangkys(){
    include('views/User/tai_khoan/dangky.php');
   dangky();
}

?>