<?php
function taogiohang($tensp,$hinhsp,$dongia,$soluong,$thanhtien,$idbill,$size){
    $conn=ketnoidb();
    $sql = "INSERT INTO tbl_cart(tensp,hinhsp,dongia,soluong,thanhtien,idbill,size) VALUES ('$tensp','$hinhsp','$dongia','$soluong','$thanhtien','$idbill','size')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
}
function taodonhang($name,$address,$tel,$email,$total,$pttt){
    $conn=ketnoidb();
    $sql = "INSERT INTO tbl_bill(name,address,tel,email,total,pttt) VALUES ('$name','$address','$tel','$email','$total','$pttt')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
}
function ketnoidb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "owen";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        
    } catch(PDOException $e) {
       return $e->getMessage();
    }
    
}
function tongdonhang(){
    $tong=0;
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
            
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
                
            }
            
        }  
    }
    return $tong;
}

?>