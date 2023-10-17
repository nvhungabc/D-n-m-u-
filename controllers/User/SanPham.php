<?php 
require './models/User/SanPham.php';
require './maill/sendmail.php';
function hienThiSanPham()
{
    $ds_sp_xe = layDSSanPham();
    $dm_loai_xe = lay5DSDanhMuc();
    include('views/User/san_pham/list_san_pham.php');
}
function hienThi1SanPham()
{
    $sp = lay1SanPham();
    binhLuans();
    $thong_tin_kh = thongTinKhachHang();
    $bl = binhLuan();
    $cung_loai = SanPhamCungLoai4();
    include('views/User/san_pham/san_pham_ct.php');
}

function hienThiSanPhamTheoDM()
{
    $sp_dm = laySanPhamTheoDM($_GET['ma_loai']);
    include('views/User/danh_muc/sp_theo_dm.php');
}
?>