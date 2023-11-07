<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
    if(isset($_POST['giohang'])&&($_POST['giohang'])){
        //lay gia tri
        $img=$_POST['img'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $id=$_POST['id'];
        $size=$_POST['size'];
        $sl=1; $i=0; $fg=0;
        //timf sp
            if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
                foreach ($_SESSION['cart'] as $sp){
                    if($sp[0]== $id){
                        //cập nhật sl
                        $sl += $sp[4];
                        $fg=1;
                        // cập nhật vào giỏ hàng
                       $_SESSION['cart'][$i][4]=$sl;
                        break;
                    }
                    $i++;
                }
            }
        //tạo mảng
        if($fg==0){
            $sp=array($id,$img,$tensp,$size,$sl,$gia);
            array_push($_SESSION['cart'],$sp);
        }
        //add gio hang
        //$_SESSION['cart'][]=$sp; cach 1     
        header('location: viewcart.php');
    }
?>