
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
        echo'<br>Bạn đã đặt hàng thành công<br><a href ="/owen/dangnhap/trangchusn.php">Hãy chọn thêm nào</a>';
    

?>