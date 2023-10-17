<?php
require_once('models/db.php');
function layDSXe()
{
  if(isset($_POST['btn_chon'])){
    $btn_loc = $_POST['btn_loc'];
  if($btn_loc !=""){
    $sql = "SELECT * FROM xe where ma_loai = $btn_loc";
    $xe = getData($sql, FETCH_ALL);
    return $xe;
  }
  else{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc";
    $xe = getData($sql, FETCH_ALL);
    return $xe;
  }
   
  }
  else{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc";
    $xe = getData($sql, FETCH_ALL);
    return $xe;
  }
 
}
function layMotXe($ma_xe)
{
  $sql = "SELECT * FROM xe WHERE ma_xe= $ma_xe";
  $xe = getData($sql, FETCH_ONE);
  return $xe;
}
function themMoiXe()
{


    if (isset($_POST['btn_them'])) {
 
        $ten_xe = $_POST['ten_xe'];
        $price = $_POST['price'];
       $ma_loai = $_POST['ma_loai'];
        $image = 'assets/images/img_data/' . $_FILES['image']['name'];
        $detail = $_POST['detail'];
        $so_km = $_POST['so_km'];
        $xuat_xu = $_POST['xuat_xu'];
        $slots = $_POST['slots'];
        $dong_co = $_POST['dong_co'];
        $file_name = uniqid() . $_FILES['image']['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);       
        $sql = "SELECT * FROM xe ";
        $xe = getData($sql, FETCH_ALL);
        foreach ($xe as $value) {
            if ($ten_xe == $value['ten_xe']) {
                $error['ten_xe'] = 'Tên xe đã tồn tại';
            }
        }
      if($ten_xe != '' && $price != '' && $ma_loai != '' &&  $_FILES['image']['name'] != ''  && $detail !='' && $so_km != '' && $xuat_xu != '' && $slots != '' && $dong_co != '' && !$error['ten_xe']){

    

        if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext =='webp' || $ext =='jfif') {
   


        $sql = "INSERT INTO  xe(ten_xe,price,ma_loai,image,detail,so_km,xuat_xu,slots,dong_co) VALUES ('$ten_xe','$price','$ma_loai','$image','$detail','$so_km','$xuat_xu','$slots','$dong_co');
        ";
          $conn = getConnect();
          $statement = $conn->prepare($sql);
          $statement->execute();
          $last_id = $conn->lastInsertId();
        // foreach($file_names as $key => $value){ 
        //   $img = 'assets/images/img_data/' . $value ;
        //   $sql = " INSERT INTO  hinh(ma_xe,hinh1) VALUES ('$last_id','$img')";
        //   $conn = getConnect();
        //   $statement = $conn->prepare($sql);
        //   $statement->execute();     
        //   move_uploaded_file($files["tmp_name"][$key], 'assets/images/img_data/' . $value); 
        // }
      
        move_uploaded_file($_FILES["image"]["tmp_name"], 'assets/images/img_data/' . $_FILES["image"]["name"]);     
       ;

       header('Location:index2.php?url=ds_xe');    
            }           
           
       
       }
      }
    
    

    }
  





function suaXe()
{
  if (isset($_POST['btn_sua'])) {
    $ma_xe = $_GET['ma_xe'];
    $ten_xe = $_POST['ten_xe'];
    $price = $_POST['price'];
    $ma_loai = $_POST['ma_loai'];
    $image = 'assets/images/img_data/' . $_FILES['image']['name'];
    $detail = $_POST['detail'];
 
    $so_km = $_POST['so_km'];
    $xuat_xu = $_POST['xuat_xu'];
    $slots = $_POST['slots'];
    $dong_co = $_POST['dong_co'];
    $file_name = uniqid() . $_FILES['image']['name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    if (!$ma_loai) {
      $_SESSION['error1'] = 'CHƯA NHẬP';
    }
    if ($ma_loai != '') {
      if ($_FILES['hinh']['name'] == '') {
        $sql = "UPDATE xe SET ten_xe = '$ten_xe' , price='$price',ma_loai='$ma_loai',detail='$detail',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["image"]["tmp_name"], 'assets/images/img_data/' . $_FILES["image"]["name"]);
        header('Location:index2.php?url=ds_xe');
      } else {
        if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'webp' && $ext != 'JFIF') {
          $_SESSION['error'] = "File chỉ được có đuôi png,jpg,jpeg ";
        } else {
          $sql = "UPDATE xe SET ten_xe = '$ten_xe' , price='$price',ma_loai='$ma_loai',image='$image',detail='$detail',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";
          $conn = getConnect();
          $statement = $conn->prepare($sql);
          $statement->execute();
          move_uploaded_file($_FILES["image"]["tmp_name"], 'assets/images/img_data/' . $_FILES["image"]["name"]);
          header('Location:index2.php?url=ds_xe');
        }
      }
    } else {
      if ($_FILES['image']['name'] == '') {
        $sql = "UPDATE xe SET ten_xe = '$ten_xe' , price='$price',detail='$detail',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["image"]["tmp_name"], 'assets/images/img_data/' . $_FILES["image"]["name"]);
        header('Location:index2.php?url=ds_xe');
      } else {
        if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'webp' && $ext != 'JFIF') {
          $_SESSION['error'] = "File chỉ được có đuôi png,jpg,jpeg ";
        } else {
          $sql = "UPDATE xe SET ten_xe = '$ten_xe' , rice='$price',image='$image',detail='$detail',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";
          $conn = getConnect();
          $statement = $conn->prepare($sql);
          $statement->execute();
          move_uploaded_file($_FILES["image"]["tmp_name"], 'assets/images/img_data/' . $_FILES["image"]["name"]);
          header('Location:index2.php?url=ds_xe');
          
        }
      }
    }
  }
}
function xoaXe()
{
  $ma_xe = $_GET['ma_xe'];
  $sql = "DELETE FROM xe WHERE ma_xe=$ma_xe";
  $conn = getConnect();
  $statement = $conn->prepare($sql);
  $statement->execute();
  header('Location:index2.php?url=ds_xe');
}
