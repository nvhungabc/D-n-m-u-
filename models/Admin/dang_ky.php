<?php
require_once('models/db.php');
require_once "maill/sendmail.php";
function layDSDK_0() {
    $sql = "SELECT * FROM dat_lich WHERE trang_thai= 0";
    $dk = getData($sql, FETCH_ALL);
    return $dk;
    
}

function layDSDK_1() {
  $sql = "SELECT * FROM dat_lich WHERE trang_thai= 1";
  $dk = getData($sql, FETCH_ALL);
  return $dk;
  
}

function layDSDK_2() {
  $sql = "SELECT * FROM dat_lich WHERE trang_thai= 2";
  $dk = getData($sql, FETCH_ALL);
  return $dk;
  
}
function ctDangKy1(){
  $sql = "SELECT * FROM xe,dat_lich,khach_hang WHERE xe.ma_xe = dat_lich.ma_xe AND khach_hang.ma_kh = dat_lich.ma_kh ";
  $ct = getData($sql, FETCH_ALL);
  return $ct;
}
function ctDangKy($ma_dat){
  $sql = "SELECT * FROM xe,dat_lich,khach_hang WHERE xe.ma_xe =dat_lich.ma_xe AND khach_hang.ma_kh =dat_lich.ma_kh AND ma_dat = $ma_dat";
  $ct = getData($sql, FETCH_ONE);
  return $ct;
}
function suaDangKy()
{  

   
  $trang_thai = '1';
        $ma_dat = $_GET['ma_dat'];
        if(isset($_POST['btn_duyet'])){
          $sql = "UPDATE dat_lich SET trang_thai='$trang_thai' WHERE  ma_dat  =$ma_dat";
          $conn = getConnect();
          $statement = $conn->prepare($sql);
          $statement->execute();
         header('Location:index2.php?url=ds_dang_ky_1');
          $tieude="Thong Bao Lich Dat Cua Ban Da Duoc Duyet";
        $noidung="<p>Đơn Đặt Xem Xe Của Bạn Đã Được Duyệt Thành Công'</p><br>
        <i>Địa Điểm Xem Xe:Số 1 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội </i>
        ";
                  session_start();
                  $img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ5JCUzFAXE1HGBTp7pvcw4WrK-wcLAjDYgA&usqp=CAU";
        $maildatxe=$_SESSION['email'];
        $mail= new Mailer();
        $mail->datXe($tieude,$noidung,$img,$maildatxe); 
          header('Location:index2.php?url=ds_dang_ky_1');
        }

  
}
function huyDon()
{  
  $trang_thai = '2';
        $ma_dat = $_GET['ma_dat'];
        if(isset($_POST['btn_duyet1'])){
          $sql = "UPDATE dat_lich SET trang_thai='$trang_thai' WHERE  ma_dat  =$ma_dat";
          $conn = getConnect();
          $statement = $conn->prepare($sql);
          $statement->execute();
          $tieude="Thong Bao Lich Dat Cua Ban Da Bi Huy";
          $noidung="<p>Đơn Đặt Xem Xe Của Bạn Đã Bị Hủy do một số vấn đề liên quan</p><br>";
                    session_start();
                    $img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ5JCUzFAXE1HGBTp7pvcw4WrK-wcLAjDYgA&usqp=CAU";
          $maildatxe=$_SESSION['email'];
          $mail= new Mailer();
          $mail->datXe($tieude,$noidung,$img,$maildatxe); 
          header('Location:index2.php?url=ds_dang_ky_2');
        }

  
}
function xoaDangKy_1()
{  
    $ma_dat = $_GET['ma_dat'];   
    if(isset($_POST['btn_delete'])){
        $sql = "DELETE FROM dat_lich WHERE ma_dat=$ma_dat ";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_dang_ky_1');
    }
      }
function xoaDangKy_2()
      {  
          $ma_dat = $_GET['ma_dat'];   
          if(isset($_POST['btn_delete'])){
              $sql = "DELETE FROM dat_lich WHERE ma_dat=$ma_dat ";
              $conn = getConnect();
              $statement = $conn->prepare($sql);
              $statement->execute();
              header('Location:index2.php?url=ds_dang_ky_2');
          }
            }
        
      

  
 



