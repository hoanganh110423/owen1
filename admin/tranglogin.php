<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="/owen/css/trangdk.css">
   
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body >
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
    <label for="Dangki"><a href="trangdk.php">Đăng kí ngay</a></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="Quenmk"><a href="">Quên mật khẩu?</a></label>
    </form>
   </div>
     











</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="TRANGCHU.js"></script>
</html>