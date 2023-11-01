<?php
    session_start();
    ob_start();
    if(isset($_POST['giohang'])&&($_POST['giohang'])){
        //lay gia tri
        $img=$_POST['img'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $id=$_POST['id'];
        $sl=1;
        $size=$_POST['size'];
        $sp=array($id,$img,$tensp,$size,$sl,$gia);
        //add gio hang
        //$_SESSION['cart'][]=$sp; cach 1
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$sp);
        header('location: viewcart.php');
    }
?>