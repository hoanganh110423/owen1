<?php 
include("db.php");
if(isset($_POST["username"])){
    $userkh = $_POST["username"];
    $email = $_POST["email"];
    $passkh = $_POST["password"];
    $sql = "INSERT INTO `khachhang`( `username`, `password`, `email`) VALUES ('$username','$password','$email')";
    $query = mysqli_query($conn, $sql);
    echo"Đăng kí thành công!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng Ký</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/owen/css/trangdk.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <form  action="/owen/dangnhap/reg.php" id="form-login" method= "post"class="username">
            <h1 class="form-heading"> Đăng Kí Tài Khoản </h1>
            <div class="form-group">
                <i class="far fa-phone"></i>
                <input type="text" name = "phonenumber" id = "phonenumber"class="form-input" placeholder="Số Điện Thoại ">
            </div>
        <div class="form-group">
            <i class="far fa-user"></i>
            <input type="text" name = "username" id = "username" class="form-input" placeholder="Tên Đăng nhập ">
        </div>
        <div class="form-group">
            <i class="far fa-key"></i>
            <input type="password" name="password" id = "password" class="form-input" placeholder="Mật Khẩu ">
            <div id="eye" >
                <i  class="far fa-eye"></i>
            </div>
        </div>
        
        <input type="submit" value="Đăng Kí" class="form-submit" name ="btn-reg"><br> &nbsp;&nbsp;&nbsp;
        </form>
       </div>
                            
                            <div class="text-center">
                                <a class="small" href="login.php">Bạn có sẵn sàng để tạo một tài khoản? Đăng nhập!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>