<?php
require_once "models/db.php";
require('./controllers/Admin/home.php');
require('./controllers/Admin/xe.php');
require('./controllers/Admin/loai_xe.php');
require('./controllers/Admin/khach_hang.php');
require('./controllers/Admin/dang_ky.php');
require('./controllers/Admin/binh_luan.php');
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
   hienThiHome();
        break;
  //LOAI XE      
    case 'ds_loai_xe':
        hienThiLoaiXe();
        break;
    case 'them_loai_xe':
        formThemMoiLoaiXe();
        break;
    case 'xoa_loai_xe':
        xoaDSLX();
        break;
    case 'sua_loai_xe':
        formSuaLoaiXe();
        break;    
// XE
    case 'ds_xe':
       hienThiXe();
       break;
    case 'them_xe': 
        formThemMoiXe();
        break;   
    case 'sua_xe':
        formSuaXe();
        break;    
    case 'xoa_xe':
        xoaDSX();
      break;    
// KHÁCH HÀNG      
    case 'ds_khach_hang':
        hienThiKhachHang();
        break;
    case 'them_khach_hang':
        formThemMoiKH();
        break;    
    case 'sua_khach_hang':
        formSuaKH();
        break;    
        case 'xoa_khach_hang':
            xoaDSKH();
            break;   

//BINH LUAN
    case 'ds_bl':
        hienThiBL();
        break;    
        case 'xoa_bl':
            xoaDSBL();
          break; 
          case 'thong_ke':
            hienThiKhachHang();
          break; 
//DANG_KY            
    // case 'ds_dang_ky_0':     
    //     hienThiDangKy_0();       
    //     break;   
    //     case 'ct_0':     
    //         chiTietDangKy_0();       
    //         break;   
    //      case 'ct_1':     
    //         chiTietDangKy_1();        
    //         break; 
    //     case 'ct_2':     
    //         chiTietDangKy_2();        
    //         break; 
    // case 'ds_dang_ky_1':
    //     hienThiDangKy_1(); 
    //     break;   
    //     case 'ds_dang_ky_2':
    //         hienThiDangKy_2(); 
    //         break;  
    // case 'sua_dang_ky' :
    //     formSuaDangKy();
    //     break;       
    //     case 'huy_don' :
    //         formHuyDon();
    //         break; 
    // case 'xoa_dang_ky_1' :
    //     xoaDSDK_1();
    //     break;
    //     case 'xoa_dang_ky_2' :
    //         xoaDSDK_2();
    //         break;

    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
?>
