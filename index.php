<?php
require_once "models/db.php";
session_start();
require('./controllers/User/SanPham.php');
require('./controllers/User/KhachHang.php');
require('./controllers/User/TrangChu.php');
require('./controllers/User/DatLich.php');
require('./controllers/User/DanhMuc.php');

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
  case '/':
    TrangChuUser();
    break;
  case 'trang_chu':
    TrangChuUser();
    break;
    case 'danh_sach_dm':
      hienThiDanhMuc();
      break;
    case 'sanpham_chitiet':
      hienThi1SanPham();
      break;
    case 'sanpham_danhmuc':
      hienThiSanPhamTheoDM();
      break;
    case 'list_san_pham':
      hienThiSanPham();
      break;
    case 'login':
       logins();
        break;
    case 'logout':
      logouts();
       break;
    case 'dang_ky':
        dangkys();
      break;
    case 'ds_dat_lich';
      HienThiDSDatLich();
      break;  
    case 'thong_tin';
      include "views/User/menu/thong_tin.php";
      break;
  default:
    echo 'Đường dẫn không tồn tại';
    break;
}

?>