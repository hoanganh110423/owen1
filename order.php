<?php
//include auth.php file on all secure pages
include("./dangnhap/auth.php");
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Thanh Toán</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='/owen/css/viewcart.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
                                <!--<div class="submenu1">
                                    <ul>
                                        <li><a href="/owen/php/ao.php">Áo sơ mi</a></li>
                                        <li><a href="/owen/php/ao.php">Áo sơ mi trắng</a></li>
                                        <li><a href="/owen/php/ao.php">Áo polo</a></li>
                                        <li><a href="/owen/php/ao.php">Áo jetket</a></li>
                                        <li><a href="/owen/php/ao.php">Áo len</a></li>
                                    </ul>
                                </div>-->
                            </li>
                            <li><a href="/owen/php/quan.php" style="color: #333;"> QUẦN</a>
                                <!--<div class="submenu2">
                                    <ul>
                                        <li><a href="/owen/php/quan.php">Quần tây</a></li>
                                        <li><a href="/owen/php/quan.php">Quần short</a></li>
                                        <li><a href="/owen/php/quan.php">Quần khaki</a></li>
                                        <li><a href="/owen/php/quan.php">Quần jeans</a></li>
                                        <li><a href="/owen/php/quan.php">Quần jogger</a></li>
                                    </ul>
                                </div> -->
                            </li>
                            <li><a href="/owen/php/phukien.php" style="color: #333;">PHỤ KIỆN</a>
                                <!--<div class="submenu3">
                                    <ul>
                                        <li><a href="/owen/php/phukien.php">Đồ lót</a></li>
                                        <li><a href="/owen/php/phukien.php">Tất</a></li>
                                        <li><a href="/owen/php/phukien.php">Dây lưng</a></li>
                                        <li><a href="/owen/php/phukien.php">Ví</a></li>
                                        <li><a href="/owen/php/phukien.php">Cà vạt</a></li>
                                    </ul>
                                </div> -->
                            </li>
                            <li><a href="/owen/php/giatot.php" style="color: #333;"> GIÁ TỐT</a>
                                <!--<div class="submenu4">
                                    <ul>
                                        <li><a href="/owen/php/giatot.php">Áo sơ mi</a></li>
                                        <li><a href="/owen/php/giatot.php">Polo giá tốt</a></li>
                                        <li><a href="/owen/php/giatot.php">quần giá tốt</a></li>
                                        <li><a href="/owen/php/giatot.php">Ưu đãi đặc biệt</a></li>
                                    </ul>
                                </div> -->
                            </li>
                            <li><a href="/owen/dangnhap/trangchusn.php" style="color: #333;">CỬA HÀNG</a></li>
                            <li><a href="dangnhap.php"><i class="fas fa-heart"></i></a></li>
                            <li><i class="fas fa-user"><?php echo $_SESSION['username']; ?></i>
                                <!--<div class="submenu5">
                                    <ul>
                                        <li><?php echo $_SESSION['username']; ?></li>
                                        <li><a href="/owen/dangnhap/logout.php">Đăng xuất</a></li>
                                    </ul>
                                </div> -->   
                            </li>
                            <li><a href="/owen/viewcart.php"><i class="fas fa-cart-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
            </section>
        </nav>
            <!--------------------slider bar--------------------->
    <section>
            <div class="showcart">
                <div class="showcart-bar">
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="bill.php" method="post">
                                <div class="container">
                                    <h2>Thông tin Khách hàng</h2>
                                    <table class="table table-bordered table-sm">
                                        <tbody>
                                        <tr>
                                            <td style="width: 25%;">Tên</td>
                                            <td><input type="ten" style="width: 100%;height: 100%;text-align: left;" name="name" ></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 25%;">Địa chỉ</td>
                                            <td><input type="sdt"style="width: 100%;height: 100%;text-align: left;"name="address" ></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 25%;">Số điện thoại</td>
                                            <td><input type="gmail"style="width: 100%;height: 100%;text-align: left;"name="tel" ></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 25%;">Email</td>
                                            <td><input type="diachi"style="width: 100%;height: 100%;text-align: left;"name="email"></td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    </div></div>
                                <div class="col-sm-6"><div class="container">
                                    <h2>Giỏ Hàng</h2>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Tên Sản Phẩm</th>
                                                <th>Size</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Thành tiền</th>
                                            </tr>
                                            </thead>
                                        <tbody>
                                                <tr>
                                            <?php
                                                $tong=0;
                                                $i=0;
                                            foreach ($_SESSION['cart'] as $sp) {
                                                $ttien=$sp[4]*$sp[5];
                                                $tong+=$ttien;
                                                    echo '<tr style="text-transform: uppercase;">
                                                        <td><img src="'.$sp[1].'" width="30px"></td>
                                                        <td>'.$sp[2].'</td>
                                                        <td>'.$sp[3].'</td>
                                                        <td>'.$sp[4].'</td>  
                                                        <td>'.$sp[5].'</td>
                                                        <td>'.$ttien.'</td>
                                                        </tr>';
                                                    $i++;
                                                }
                                            ?>
                                            </tr>
                                        <tr>
                                            <td colspan="5" style="border-right:2px solid #CFD3CB;">Tổng tiền</td>
                                            <td style="border-right:2px solid #CFD3CB;"><?=$tong ?></td>
                                            <td></td>
                                            
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        </div>
                        <script src="/owen/js/input.js"></script>
                        <table >
                            <tr>
                                <th><input type="submit" value="Đặt Hàng" class="form-submit" name ="dathang" 
                                    style=" width: 200px;
                                    height: 50px;
                                    background-color: #773a596e;
                                    border-radius: 5px;
                                    color: #000;
                                    font-weight: bold;
                                    font-size: 1.2vw;"></th>
                            </tr>
                        </table>
                    </form>
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
    