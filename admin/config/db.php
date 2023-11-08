<?php
// Nhập Máy chủ, tên người dùng, mật khẩu, cơ sở dữ liệu bên dưới.
// Tôi để trống mật khẩu vì tôi không đặt mật khẩu trên localhost.
$connect = mysqli_connect("localhost","root","","php");
// Check connection
if ($connect){
    mysqli_query($connect, "SET NAMES 'UTF8'");
}else{
    echo "ket noi that bai";
}
?>