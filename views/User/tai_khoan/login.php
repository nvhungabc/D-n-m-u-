<?php
if (isset($_POST['dang_nhap'])) {
    $sql = "SELECT * FROM khach_hang";
    $user = getData($sql, FETCH_ALL);
    $username = $_POST['username'];
    $password = $_POST['password'];
         foreach($user as $key => $value){
        if($username != $value['username'] && $password != $value['password']) {
            if (empty($username)) {
                $error['username'] = "Bạn chưa nhập tài khoản";
            }
            if (empty($password)) {
                $error['password'] = "Bạn chưa nhập mật khẩu";
            }
            else{
                $error['fales'] = "Tài khoản hoặc Mật khẩu không đúng";
            }
        }
        }
}
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Online Login Form Responsive Widget Template :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <link rel="stylesheet" href="assets/css2/login.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="assets/css2/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <style>
      .wthree-pro{
            display: flex;
            justify-content: space-around;
        }
        .wthree-pro h2 a{
            color: #FFF;
        }
    </style>
   
</head>

<body>
    
    <!-- main -->
    <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
 
    <div class="center-container">
        <!--header-->
        <div class="header-w3l">
            <h1>Đăng Nhập</h1>
        </div>
        <!--//header-->
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <div class="wthree-pro">
                    <h2>Đăng Nhập</h2>
                    <h2>  <a href="index.php?url=dang_ky">Đăng Ký</a></h2>
                </div>
                <form action="#" method="post">
                    <div class="pom-agile">
                        <input placeholder="User name" name="username" class="user" type="text">
                        <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <div class="pom-agile">
                        <input placeholder="Password" name="password" id="password" class="pass" type="password">
                        <span id="show" class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                        <label style="color:#fff" for="">
                            <h2>
                                <?= isset($error['username']) ? $error['username'] : "" ?> <br>
                                <?= isset($error['password']) ? $error['password'] : "" ?> <br>
                                <?= isset($error['fales']) ? $error['fales'] : "" ?> <br>

                            </h2>
                        </label>
                    </div>
                    <div class="sub-w3l">

                        <div class="right-w3l">
                            <input type="submit" value="Login" name="dang_nhap">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>
<script >
    const passField = document.querySelector("#password");
    const showBtn = document.querySelector("#show");
    showBtn.onclick = (() => {
        if (passField.type === "password") {
            passField.type = "text";
            showBtn.classList.add("hide-btn");
        } else {
            passField.type = "password";
            showBtn.classList.remove("hide-btn");
        }
    });
</script>

</html>