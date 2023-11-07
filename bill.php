<?php
    include "thuvien.php";
    if(isset($_POST['dathang']) && $_POST['dathang']) {
        
        $name=$_POST['name'];
        $address=$_POST['address'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $pttt=0;
        $total=tongdonhang();

        taodonhang($name, $address,$tel,$email,$total,$pttt);

    }
        echo"bạn đã đặt hàng thành công";
    

?>