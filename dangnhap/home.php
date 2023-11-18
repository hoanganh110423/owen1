<?php
//include auth.php file on all secure pages
include("auth.php");
$conn = mysqli_connect("localhost","root","","owen");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Trang chủ </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='/owen/css/trangchu.css'>
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
                                    <ul style="color: #333;">
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
                                    <ul style="color: #333;">
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
                            <li><i class="fas fa-user"></i>
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
        <h2 style="text-align: center; font-family: monospace">GIAO MÙA MỚI -GHÉ QUA OWEN <a href="/owen/php/hangmoive.php"style="text-align: center; font-family: monospace; color: #4E9997;">Ở ĐÂY</a></h2>
        <!-------------thanh trượt slider-- không làm đc------------>
        
        <section class="slider">
            <div class="container">
                <div class="slider-container">
                    <div class="slider-container-left">
                        <div class="slider-container-left-top">
                            <img src="/owen/image/slider4.webp" alt="background">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slider-container-left-under">
            <div class="slider-container-left-under-1">
                <img class="owen1" src="/owen/image/owen1.webp" alt="">
            </div>
        </section>  
        <section class="product-gallrey-1">
            <div class="container">
                <div class="product-gallrey-1-container">
                    <div class="product-gallrey-1-container-titler">
                        <h1>STAY FRESH ALL DAY</h1>
                    </div>
                    <div class="product-gallrey-1-container-product">
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet1.php">
                                    <img src="/owen/image/ct1.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a>
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>ÁO SƠ MI - AR230640DT</li>
                                    <!--<li><span>580.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct1.1.webp">
                                    <input type="hidden" name="tensp" value="ÁO SƠ MI - AR230640DT">
                                    <input type="hidden" name="gia" value="580000">
                                    <input type="hidden" name="id" value="1">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet2.php">
                                    <img src="/owen/image/ct2.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a>
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>AR21055DT-ÁO SƠ MI NAM</li>
                                    <!--<li><span>450.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct2.webp">
                                    <input type="hidden" name="tensp" value="AR21055DT-ÁO SƠ MI NAM">
                                    <input type="hidden" name="gia" value="450000">
                                    <input type="hidden" name="id" value="2">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet3.php">
                                    <img src="/owen/image/ct3.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a> 
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>AR90780D1_ÁO SƠ MI</li>
                                    <!--<li><span>500.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct3.1.webp">
                                    <input type="hidden" name="tensp" value="AR90780D1_ÁO SƠ MI">
                                    <input type="hidden" name="gia" value="500000">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="id" value="3">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet4.php">
                                    <img src="/owen/image/ct4.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a> 
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>AR90779D2-ÁO SƠ MI TRẮNG NAM </li>
                                    <!--<li><span>550.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct4.1.webp">
                                        <input type="hidden" name="tensp" value="AR90779D2-ÁO SƠ MI TRẮNG NAM">
                                        <input type="hidden" name="gia" value="550000">
                                        <input type="hidden" name="id" value="4">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet5.php">
                                    <img src="/owen/image/ct5.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a> 
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>ÁO JACKET - JK231620</li>
                                    <!--<li><span>450.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct5.1.webp">
                                        <input type="hidden" name="tensp" value="ÁO JACKET - JK231620">
                                        <input type="hidden" name="gia" value="450000">
                                        <input type="hidden" name="id" value="5">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet6.php">
                                    <img src="/owen/image/ct6.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a> 
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>ALD90160-ÁO LEN OWEN</li>
                                    <!--<li><span>500.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct6.1.webp">
                                        <input type="hidden" name="tensp" value="ALD90160-ÁO LEN OWEN">
                                        <input type="hidden" name="gia" value="500000">
                                        <input type="hidden" name="id" value="6">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet7.php">
                                    <img src="/owen/image/ct7.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a> 
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>ALD80470_AO LEN</li>
                                    <!--<li><span>600.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct7.1.webp">
                                        <input type="hidden" name="tensp" value="ALD80470_AO LEN">
                                        <input type="hidden" name="gia" value="600000">
                                        <input type="hidden" name="id" value="7">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet8.php">
                                    <img src="/owen/image/ct8.1.png" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a>
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>ÁO LEN - ALD220762</li>
                                    <!--<li><span>550.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct8.1.png">
                                        <input type="hidden" name="tensp" value="ÁO LEN - ALD220762">
                                        <input type="hidden" name="gia" value="550000">
                                        <input type="hidden" name="id" value="8">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet9.php">
                                    <img src="/owen/image/ct9.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a>
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>ÁO LEN - ALD231646</li>
                                    <!--<li><span>300.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct9.1.webp">
                                        <input type="hidden" name="tensp" value="ÁO LEN - ALD231646">
                                        <input type="hidden" name="gia" value="300000">
                                        <input type="hidden" name="id" value="9">
                                </div>
                            </form>
                        </div>
                        <div class="product-gallrey-1-container-product-1">
                            <form action="/owen/addtocart.php" method="post">
                                <a href="/owen/chitiet/chitiet10.php">
                                    <img src="/owen/image/ct10.1.webp" alt="">
                                    <div class="name">Mua Ngay</div>
                                </a> 
                                <div class="product-gallrey-1-container-product-1-text">
                                    <li>ALD220769-ÁO LEN NAM</li>
                                    <!--<li><span>500.000</span><sup>đ</sup></li>-->
                                    <input type="hidden" name="img" value="/owen/image/ct10.1.webp">
                                        <input type="hidden" name="tensp" value="ALD220769-ÁO LEN NAM">
                                        <input type="hidden" name="gia" value=">500000">
                                        <input type="hidden" name="id" value="10">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="salebackground">
                    <img src="/owen/image/owen giảm giá.webp" alt="">
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
            <p>Hỗ trợ làm web liên hệ : Hoàng Anh</p>
        </div>
    </body>
</html>
<script src="/owen/js/search.js"></script>