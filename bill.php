<?php
session_start();
include "thuvien.php";
if (isset($_POST['dathang']) && $_POST['dathang']) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pttt = 0;
    $total = tongdonhang();

    $idbill = taodonhang($name, $address, $tel, $email, $total, $pttt);
    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
        $tensp = $_SESSION['cart'][$i][0];
        $hinhsp = $_SESSION['cart'][$i][1];
        $dongia = $_SESSION['cart'][$i][2];
        $soluong = $_SESSION['cart'][$i][3];

        // Convert the $dongia and $soluong variables to integers before multiplying them
        $thanhtien = intval($dongia) * intval($soluong);

        taogiohang($tensp, $hinhsp, $dongia, $soluong, $thanhtien, $idbill);
    }

}
echo '<br>Bạn đã đặt hàng thành công<br><a href="/owen/dangnhap/trangchusn.php">Hãy chọn thêm nào</a>';
?>