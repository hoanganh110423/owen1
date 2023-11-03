
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<?php 
require 'conn.php';
// file nhận dữ liệu từ form đăng kí qua action 
if(isset($_POST['btn-reg'])){
$username = $_POST['username'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
if (!empty($username) && !empty($password) && !empty($phonenumber)){
// thi moi insert du lieu 
//echo "<pre>";
//print_r($_POST);
$sql = "INSERT INTO `username` (`phonenumber`,`username`,`password`) VALUES('$phonenumber','$username','$password') ";  
if($conn->query($sql)===TRUE ){ ?>
Bạn đã đăng kí thành công 
   <button type="button" class="btn btn-success"><a href="tranglogin.php" color : black ; >đăng nhập</a></button>
<?php
}
else {
    echo " LOI {$sql}".$conn->error;
}

} else {
    echo " Bạn cần nhập đầy đủ thông tin để đăng kí ";
}
}
?>
