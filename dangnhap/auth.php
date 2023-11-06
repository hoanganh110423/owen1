<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location:/owen/dangnhap/login.php");
exit(); }
?>