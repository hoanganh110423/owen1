<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
</head>
<link rel="stylesheet" href="/owen/css/trangdk.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<body>
    <div id="wrapper">
        <form  action="reg.php" id="form-login" method= "post" >
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
        <!---Cần thêm js khi bấm đăng kí sẽ thông báo đăng kí thành công -->
        </form>
       </div>
</body>
<script src="tranglogin.js"></script>
</html>