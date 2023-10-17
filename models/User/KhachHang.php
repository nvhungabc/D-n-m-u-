<?php  
function dangky()
{
    $name = $email = $password = $password2 = $hinh_anh = '';
    if (isset($_POST['dangky'])) {
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $error = [];
        if (empty($ten_khach_hang)) {
            $error['ten_khach_hang'] = 'Bạn chưa nhập tên';}
        if (empty($username)) {
            $error['username'] = 'Bạn chưa nhập tên';}
        if (empty($password)) {
            $error['password'] = 'Bạn chưa nhập mật khẩu';}
        if (empty($password2)) {
            $error['password2'] = 'Bạn chưa nhập lại mật khẩu';}
        if ($password != $password2 && $password2 != "") {
            $error['password_lost'] = 'Mật khẩu không khớp';}
        if (empty($email)) {
            $error['email'] = 'Bạn chưa nhập email';}
        if (empty($so_dien_thoai)) {
            $error['so_dien_thoai'] = 'Bạn chưa nhập số điện thoại';};
        if (!($error)) {
            $sql = "SELECT username FROM khach_hang where username = :username";
            $conn = getConnect();
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                $error['trungtk'] = 'Tài khoản này đã tồn tại';
            } else {
                $password = md5($password);
                $sql = $conn->prepare('
                    INSERT INTO khach_hang(ten_khach_hang,username, password, email,so_dien_thoai)
                    VALUES (:ten_khach_hang,:username, :password, :email,:so_dien_thoai)
                    ');
                $sql->bindParam(':ten_khach_hang', $ten_khach_hang);
                $sql->bindParam(':username', $username);
                $sql->bindParam(':password', $password);
                $sql->bindParam(':email', $email);
                $sql->bindParam(':so_dien_thoai', $so_dien_thoai);
                $sql->execute();
            }
        }
    }
}
// 
function login()
{

    if (isset($_POST['dang_nhap'])) {

        $sql = "SELECT * FROM khach_hang";
        $user = getData($sql, FETCH_ALL);
        foreach ($user as $value) {
            if (isset($_POST['dang_nhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $password_md5 = md5($password);
                if ($username == $value['username'] && $password_md5 == $value['password'] && $value['role'] == 1) {

                    $_SESSION['admin'] = $value['username'];
                    header('location:index2.php');
                } else if ($username == $value['username'] && $password_md5 == $value['password'] && $value['role'] == 0) {
                    $_SESSION['ma_kh'] = $value['ma_kh'];
                    $_SESSION['username'] = $value['username'];
                    $_SESSION['email'] = $value['email'];
                    $_SESSION['ten_khach_hang'] = $value['ten_khach_hang'];

                    header('location:index.php');
                } else {
                    $_SESSION['error'] = "Tài khoản hoặc mật khẩu không đúng";
                }
            } else {
                $_SESSION['error_tk'] = "Tài khoản không đúng";
            }
        }
    }
}
function logout()
{

    if (isset($_SESSION['username']) && isset($_SESSION['ma_kh'])) {
        unset($_SESSION['username']);
        unset($_SESSION['ma_kh']);
    }
    if (isset($_SESSION['admin'])) {
        unset($_SESSION['admin']);
    }
    header('location:index.php');
}
