<?php
// Nhập Máy chủ, tên người dùng, mật khẩu, cơ sở dữ liệu bên dưới.
// Tôi để trống mật khẩu vì tôi không đặt mật khẩu trên localhost.
$conn = mysqli_connect("localhost","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>