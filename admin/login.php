<?php
require 'conn.php';
if(isset($_POST["submit"])&& $_POST["username"] != '' && $_POST["password"] != ''){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = " SELECT * FROM username where username='$username' AND password='$password' ";
    $user = mysqli_query($conn, $sql);
    if(mysqli_num_rows($user) > 0   ){
        header("location: /owen/html/trangchusn.html");
    }    else{
        echo" Tên đăng nhập hoặc mật khẩu không đúng ";
    }
}else {
    header("location:tranglogin.php");
}
?>