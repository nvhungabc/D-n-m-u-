<?php
require_once('models/db.php');
function layDSKhachHang()
{
    $sql = "SELECT * FROM khach_hang ORDER BY ma_kh DESC";
    $kh = getData($sql, FETCH_ALL);
    return $kh;
}
function layMotKH($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh= $ma_kh";
    $kh = getData($sql, FETCH_ONE);
    return $kh;
}
function themMoiKH()
{
    if (isset($_POST['btn_them'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $sql = "SELECT * FROM khach_hang  ";
        $user = getData($sql, FETCH_ALL);
        foreach ($user as $value) {
            if ($username == $value['username']) {
                $error['username1'] = 'Tên đăng nhập đã tồn tại';
            }
        }
        if ($username != '' && $password != '' && $email != '' &&$role != '' && $ten_khach_hang != '' && $so_dien_thoai != '' && !$error['username1']  ) {
            $sql = "INSERT INTO  khach_hang(ten_khach_hang, username,password,email, so_dien_thoai, role) VALUES ( '$ten_khach_hang','$username' , '$password','$email','$so_dien_thoai', '$role')";
            $conn = getConnect();
            $statement = $conn->prepare($sql);
            $statement->execute();
            header('Location:index2.php?url=ds_khach_hang');
        }
    }
}
function suaKH()
{
    if (isset($_POST['btn_sua'])) {
        $ma_kh = $_GET['ma_kh'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $sql = "UPDATE  khach_hang SET ten_khach_hang='$ten_khach_hang', username='$username',password='$password',email='$email',so_dien_thoai='$so_dien_thoai',role='$role' WHERE  ma_kh  =$ma_kh ";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_khach_hang');
    }
}
function xoaKhachHang()
{
    $ma_kh = $_GET['ma_kh'];
    $sql1 = "DELETE FROM dat_lich WHERE ma_kh=$ma_kh";
    $conn = getConnect();
    $statement = $conn->prepare($sql1);
    $statement->execute();
    $sql = "DELETE FROM khach_hang WHERE ma_kh=$ma_kh";
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();
    header('Location:index2.php?url=ds_khach_hang');
}



