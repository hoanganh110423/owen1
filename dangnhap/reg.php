<?php 
include("db.php");
if(isset($_POST["username"])){
    $username = $_POST["username"];
    //$email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO `username`( `username`, `password`) VALUES ('$username','$password')";
    $query = mysqli_query($conn, $sql);
    echo"Đăng kí thành công! Click here to <a href='login.php'>Đăng nhập</a>";
}
?>