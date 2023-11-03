<?php

        include "/owen/php/trangchusn.php";
        switch ($_GET['act']){
            case 'about';
                include "/owen/php/trangchusn.php";
                break;
            case 'login';
            if(isset($_POST['login'])&&($_POST['login'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $role=checkusername($username,$password);
            }
                include "/owen/adtsx/trangdk.php";
                break;
            case 'dangnhap';
                include "/owen/adtsx/login.php";
                break;
            case 'product';
                include "/owen/adtsx/product.php";
                break;
            default:
                include "/owen/adtsx/home.php";
                break;
        }
        include "/owen/adtsx/footer.php"
?>