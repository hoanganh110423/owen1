<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="/owen/css/tranglogin.css" />
    </head>
<body>
<?php
        require('db.php');
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        //Checking is user existing in the database or not
        $query = "SELECT * FROM `username` WHERE username='$username'
        and password='".$password."'";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            // Redirect user to index.php
            header("Location:/owen/dangnhap/home.php");
        exit();
        }else{echo "<div class='form'>
            <h3>Tên đăng nhập hoặc tài khoản không chính xác</h3>
        <br/>Click here to <a href='login.php'>Đăng nhập</a></div>";
}
}else{
?>
<div id="wrapper">
    <form action="login.php" id="form-login" method="post">
        <h1 class="form-heading">  Form Đăng Nhập  </h1>
    <div class="form-group">
        <i class="far fa-user"></i>
        <input type="text" name = "username"class="form-input" placeholder="Tên Đăng nhập ">
    </div>
    <div class="form-group">
        <i class="far fa-key"></i>
        <input type="password" name ="password"class="form-input" placeholder="Mật Khẩu ">
        <div id="eye" >
            <i  class="far fa-eye"></i>
        </div>
    </div>
    <input type="submit" value="Đăng Nhập" class="form-submit" name ="submit"> &nbsp;&nbsp;&nbsp;&nbsp;
    <label for="Dangki"><a href="/owen/dangnhap/register.php">Đăng kí ngay</a></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="Quenmk"><a href="">Quên mật khẩu?</a></label>
    </form>
   </div>
<?php } ?>
</body>
</html>