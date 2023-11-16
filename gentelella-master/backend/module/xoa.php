<?php
$connect = mysqli_connect("localhost","root","","owen");
    $id = $_GET['id'];
    $sql = "DELETE FROM products where prd_id = $id ";
    $query = mysqli_query($connect, $sql);
    header ('location: /owen/gentelella-master/backend/index.php?page=danhsachsanpham');
?>