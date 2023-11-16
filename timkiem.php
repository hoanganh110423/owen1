<?php
// Kết nối với cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "owen");
session_start();
if (isset($_POST['search'])) {
    // Get the search query from the form
    $noidung = $_POST['noidung'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tìm kiếm sản phẩm </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/owen/css/hangmoive.css'>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <header id="header">
        <p><i class="" >Hỗ trợ khách hàng : 0969367689</p>
    </header>
    <nav>
        <section class="menu-bar">
            <div class="container">
                <div class="menu-ba-container">
                    <ul>
                        <li><img src="/owen/image/logoowen.webp" alt="logo" style="width: 150px;height: 50px;"></li>
                        <li><a href="/owen/php/hangmoive.php" style="color: #333;"> HÀNG MỚI VỀ</a></li>
                        <li><a href="/owen/php/ao.php" style="color: #333;"> ÁO</a>
                            <div class="submenu1">
                                <ul>
                                    <li><a href="/owen/php/ao.php">Áo sơ mi</a></li>
                                    <li><a href="/owen/php/ao.php">Áo sơ mi trắng</a></li>
                                    <li><a href="/owen/php/ao.php">Áo polo</a></li>
                                    <li><a href="/owen/php/ao.php">Áo jetket</a></li>
                                    <li><a href="/owen/php/ao.php">Áo len</a></li>
                                </ul>
                            </div> 
                        </li>
                        <li><a href="/owen/php/quan.php" style="color: #333;"> QUẦN</a>
                            <div class="submenu2">
                                <ul>
                                    <li><a href="/owen/php/quan.php">Quần tây</a></li>
                                    <li><a href="/owen/php/quan.php">Quần short</a></li>
                                    <li><a href="/owen/php/quan.php">Quần khaki</a></li>
                                    <li><a href="/owen/php/quan.php">Quần jeans</a></li>
                                    <li><a href="/owen/php/quan.php">Quần jogger</a></li>
                                </ul>
                            </div> 
                        </li>
                        <li><a href="/owen/php/phukien.php" style="color: #333;">PHỤ KIỆN</a>
                            <div class="submenu3">
                                <ul>
                                    <li><a href="/owen/php/phukien.php">Đồ lót</a></li>
                                    <li><a href="/owen/php/phukien.php">Tất</a></li>
                                    <li><a href="/owen/php/phukien.php">Dây lưng</a></li>
                                    <li><a href="/owen/php/phukien.php">Ví</a></li>
                                    <li><a href="/owen/php/phukien.php">Cà vạt</a></li>
                                </ul>
                            </div> 
                        </li>
                        <li><a href="/owen/php/giatot.php" style="color: #333;"> GIÁ TỐT</a>
                            <div class="submenu4">
                                <ul>
                                    <li><a href="/owen/php/giatot.php">Áo sơ mi</a></li>
                                    <li><a href="/owen/php/giatot.php">Polo giá tốt</a></li>
                                    <li><a href="/owen/php/giatot.php">quần giá tốt</a></li>
                                    <li><a href="/owen/php/giatot.php">Ưu đãi đặc biệt</a></li>
                                </ul>
                            </div> 
                        </li>
                        <li><?php 
                                        $sqlSelect = "SELECT * FROM danhmuc ";
                                        $resultSelect = mysqli_query($conn, $sqlSelect) or die(mysqli_error($conn));
                                        if(mysqli_num_rows($resultSelect) > 0){
                                            $count = 0;
                                            while($row = mysqli_fetch_assoc($resultSelect)){
                                                $count++;
                            ?>
                        <li class="drink1"><a href="trangchusn.php?page=1&id=<?php echo $row["iddm"] ?>"><?php echo $row["tendm"] ?></a></li>
                        <?php }} ?>
                            </li>
                        <li><a href="/owen/dangnhap/trangchusn.php" style="color: #333;">CỬA HÀNG</a></li>
                        <li>
                            <form action="/owen/timkiem.php" method="POST" class="search-form">
                                <input type="text" name="noidung" class="search" placeholder="Tìm kiếm sản phẩm">
                                <button type="submit" name="search" onclick="showProduct()" class="search" value="Tìm kiếm"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </li>
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href="/owen/admin/tranglogin.php"><i class="fas fa-user"></i></a>
                            <div class="submenu5">
                                <ul>
                                    <li><?php echo $_SESSION['username']; ?></li>
                                    <li><a href="/owen/dangnhap/logout.php">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/owen/viewcart.php"><i class="fas fa-cart-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </nav>
    <h2>GIAO MÙA MỚI -GHÉ QUA OWEN <a href="/owen/php/hangmoive.php" style="text-align: center;">Ở ĐÂY</a></h2>
    <section class="product-gallrey-1">
        <div class="container">
            <div class="product-gallrey-1-container">
        </div>
        <!--------------------slider bar--------------------->
        <div class="slider-bar">
            <div class="slider-bar-now">
                <div class="slider-bar-now-colum1">
                    <div class="slider-bar-now-colum1-item">
                        <h1><a href="/owen/php/giatot.php">Giá tốt</a></h1>
                            <ul>
                                <li><a href="/owen/php/ao.php">Polo-tshirt</a></li>
                                <li><a href="/owen/php/quan.php">Quần giá tốt</a></li>
                                <li><a href="/owen/php/ao.php">Áo sơ mi</a></li>
                            </ul>
                        <h1><a href="/owen/php/ao.php">Áo</a></h1>
                            <ul>
                                <li><a href="/owen/php/ao.php">Áo Polo</a></li>
                                <li><a href="/owen/php/ao.php">Áo Sơ Mi</a></li>
                                <li><a href="/owen/php/ao.php">Áo Thun</a></li>
                                <li><a href="/owen/php/ao.php">Áo Len</a></li>
                            </ul>
                        <h1><a href="/owen/php/quan.php">Quần</a></h1>
                            <ul>
                                <li><a href="/owen/php/quan.php">Quần Tây</a></li>
                                <li><a href="/owen/php/quan.php">Quần Khaki</a></li>
                                <li><a href="/owen/php/quan.php">Quần Jeansjeans</a></li>
                                <li><a href="/owen/php/quan.php">Quần Jogger</a></li>
                            </ul>
                        <h1><a href="/owen/php/phukien.php">Phụ Kiện</a></h1>
                            <ul>
                                <li><a href="/owen/php/phukien.php">Tất</a></li>
                                <li><a href="/owen/php/phukien.php">Thắt Lưng</a></li>
                                <li><a href="/owen/php/phukien.php">Ví</a></li>
                                <li><a href="/owen/php/phukien.php">Cà vạt</a></li>
                            </ul>
                    </div>
            </div>
                <div class="slider-bar-now-colum2-item">
                    <div class="container">
                        <div class="product-gallrey-1-container">
                            <div class="product-gallrey-1-container-product">
                                <?php
                                $sql = "SELECT * FROM products WHERE prd_name LIKE '%$noidung%' OR price LIKE '%$noidung%'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                ?>
                                        <?php
                                        while ($row = $result->fetch_assoc()) {
                                            $productURL = "/owen/php/chitiet.php?idsp=" . $row['prd_id'];
                                        ?>
                                <div class="product-gallrey-1-container-product-1">
                                    <?php  
                                        echo "<div class=\"product-item\">
                                            <a href=\"/owen/php/chitiet.php?id=$row[prd_id]\">
                                                <img src=\"image/$row[image]\" alt=\"$row[prd_name]\">
                                                <p>$row[prd_name]</p>
                                                <p>Giá: $row[price]đ</p>
                                            </a>
                                        </div>"; 
                                    ?>
                                </div>
                                <?php
                                        }
                                    } else {
                                        echo '<div class="not-item">
                                            <p>Không sản phẩm nào được tìm thấy!</p>
                                        </div>';
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!---------------fage footer----------------->
        <div class="fage-footer-container">
            <div class="fage-footer-container-now">
                <div class="fage-footer-container-now-colum1">
                    <div class="fage-footer-container-now-colum1-item">
                        <h4 class="footer-logo">
                            <a title="Owen" href="/owen/dangnhap/trangchusn.php"><img src="/owen/image/logoowen.webp" alt="logo" style="width: 150px;height: 50px;"></a>
                        </h4>
                        <ul class="footer-link ">
                            <li>
                                "CÔNG TY CỔ PHẦN THỜI TRANG KOWIL VIỆT NAM" <br>
                                "HOTLINE : 1900 8079" <br>
                                "8:30-20:00 tất cả các ngày trong tuần"
                            </li>
                            <li><strong>VP Phía Bắc</strong>
                            "Tầng 17 tòa nhà Viwaseen, 48 Phố Tố Hữu, Trung Văn, Nam Từ Liêm, Hà Nội."
                            </li>
                            <li><strong>VP Phía Nam</strong>
                                "186A Nam Kỳ Khởi Nghĩa, Phường Võ Thị Sáu, Quận 3, TP.HCM."
                                </li>
                        </ul>
                    </div>
                </div>
                <div class="fage-footer-container-now-colum2">
                    <div class="fage-footer-container-now-colum2-item">
                        <h4 class="footer-title-active">
                            GIỚI THIỆU OWEN
                        </h4>
                        <ul class="footer-links ">
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Giới thiệu</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">BLOG</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Hệ thống của hàng</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Liên hệ OWEN</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="fage-footer-container-now-colum3">
                    <div class="fage-footer-container-now-colum3-item">
                        <h4 class="footer-title-active">
                            HỖ TRỢ KHÁCH HÀNG
                        </h4>
                        <ul class="footer-links ">
                            <li><a title="owen" href="/owen/php/gioithieu.php" style="color:#060709;">Hỏi đáp</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Chính sách vận chuyển</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Hướng dẫn chọn kích cỡ</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Hướng dẫn thanh toán</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Quy định đổi hàng</a></li>
                            <li><a title="owen" href="/owen/php/gioithieu.php"style="color:#060709;">Hướng dẫn mua hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="fage-footer-container-now-colum4">
                    <div class="fage-footer-container-now-colum4-item">
                        <h4 class="footer-title-active" style="font-size: 12px;
                        font-weight: 400;
                        line-height: 25px;
                        letter-spacing: 0;
                        padding: 0;
                        margin-bottom: 10px;
                        font-family: 'SVN-GothamBook',sans-serif;
                        color: #000;">
                        KẾT NỐI
                        <p>Nguyễn Tuấn Anh</p>
                        <p>Phan Duy Đông</p>
                        <p>Nguyễn Hoàng Anh</p>
                        <p>Nguyễn Mạnh Cường</p>
                        <p>Trần Tuấn Anh</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin">
            <p>Hỗ trợ làm web liên hệ : Hoàng Anh </p>
        </div>
</body>
</html>