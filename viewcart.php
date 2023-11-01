<?php
    session_start();
    if(isset($_SESSION['cart'])){
        //echo var_dump($_SESSION['cart']);

    
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Giỏ hàng</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/trangchu.css'>
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
                            <li><img src="image/logoowen.webp" alt="logo" style="width: 150px;height: 50px;"></li>
                            <li><a href="hangmoive.html" style="color: #333;"> HÀNG MỚI VỀ</a></li>
                            <li><a href="ao.html" style="color: #333;"> ÁO</a>
                                <div class="submenu1">
                                    <ul>
                                        <li><a href="ao.html">Áo sơ mi</a></li>
                                        <li><a href="ao.html">Áo sơ mi trắng</a></li>
                                        <li><a href="ao.html">Áo polo</a></li>
                                        <li><a href="ao.html">Áo jetket</a></li>
                                        <li><a href="ao.html">Áo len</a></li>
                                        <li><a href="ao.html">Áo veston</a></li>
                                        <li><a href="ao.html">Áo blazer</a></li>
                                    </ul>
                                </div> 
                            </li>
                            <li><a href="quan.html" style="color: #333;"> QUẦN</a>
                                <div class="submenu2">
                                    <ul>
                                        <li><a href="quan.html">Quần tây</a></li>
                                        <li><a href="quan.html">Quần short</a></li>
                                        <li><a href="quan.html">Quần khaki</a></li>
                                        <li><a href="quan.html">Quần jeans</a></li>
                                        <li><a href="quan.html">Quần jogger</a></li>
                                    </ul>
                                </div> 
                            </li>
                            <li><a href="phukien.html" style="color: #333;">PHỤ KIỆN</a>
                                <div class="submenu3">
                                    <ul>
                                        <li><a href="phukien.html">Đồ lót</a></li>
                                        <li><a href="phukien.html">Tất</a></li>
                                        <li><a href="phukien.html">Dây lưng</a></li>
                                        <li><a href="phukien.html">Ví</a></li>
                                        <li><a href="phukien.html">Cà vạt</a></li>
                                    </ul>
                                </div> 
                            </li>
                            <li><a href="giatot.html" style="color: #333;"> GIÁ TỐT</a>
                                <div class="submenu4">
                                    <ul>
                                        <li><a href="giatot.html">Áo sơ mi</a></li>
                                        <li><a href="giatot.html">Polo giá tốt</a></li>
                                        <li><a href="giatot.html">quần giá tốt</a></li>
                                        <li><a href="giatot.html">Ưu đãi đặc biệt</a></li>
                                    </ul>
                                </div> 
                            </li>
                            <li><a href="trangchusn.html" style="color: #333;">CỬA HÀNG</a></li>
                            <li><input type="search" placeholder="search...."><i class="fas fa-search"></i></li>
                            <li><a href="dangnhap.html"><i class="fas fa-heart"></i></a></li>
                            <li><a href=""><i class="fas fa-user"></i></a>
                                <div class="submenu5">
                                    <ul>
                                        <li><a href="phukien.html">Tài Khoản của tôi</a></li>
                                        <li><a href="phukien.html">Danh sách yêu thích</a></li>
                                        <li><a href="phukien.html">Đăng nhập</a></li>
                                        <li><a href="phukien.html">Tạo tài khoản</a></li>
                                    </ul>
                                </div> 
                            </li>
                            <li><i class="fas fa-cart-plus"></i>
                                <div class="submenu">
                                    <table>
                                        <tr>
                                            <td><img src="image/ao1.webp" alt=""></td>
                                            <td><p>Trắng</p></td>
                                            <td><p>M</p></td>
                                            <td><input type="number" value="1" min="1"></td>
                                            <td><p>500.000 <sub>đ</sub></p></td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </section>
        </nav>
        <h2>GIAO MÙA MỚI -GHÉ QUA OWEN <a href="hangmoive.html" style="text-align: center;">Ở ĐÂY</a></h2>
        <!-------------thanh trượt slider-- không làm đc------------>
        <h3>Giỏ hàng</h3>
        <section class="showcart">
            <div class="container">
                <div class="product-gallrey-1-container">
            </div>
            <!--------------------slider bar--------------------->
            <div class="showcart">
                <div class="showcart-bar">
                     <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Màu</th>
                            <th>Size</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <?php
                            $tong=0;
                            $i=0;
                           foreach ($_SESSION['cart'] as $sp) {
                            $ttien=$sp[4]*$sp[5];
                            $tong+=$ttien;
                                echo '<tr>
                                    <td><img src="'.$sp[1].'" width="30px"></td>
                                    <td>'.$sp[2].'</td>
                                    <td>'.$sp[3].'</td>
                                    <td>'.$sp[4].'</td>
                                    <td>'.$sp[5].'</td>
                                    <td>'.$ttien.'</td>
                                    <td><a href="delcart.php?id='.$i.'">XÓA</a></td>
                                    </tr>';
                                $i++;
                            }
                        ?>
                       <tr>
                        <td colspan="5" style="border-right:2px solid #CFD3CB;">Tổng tiền</td>
                        <td colspan="2" style="border-right:2px solid #CFD3CB;"><?=$tong ?></td>
                        <!--<td style="border: 2px solid #CFD3CB;"></td>-->
                        <td ></td>
                   </tr>
                     </table>
                    <table>
                        <tr>
                            <th><p><a href="trangchusn.html" >Tiếp tục đặt hàng</a></p></th>
                            <th><p><a href="delcart.php" >Xóa giỏ hàng</a></p></th>
                            <th><p><a href="" >Đặt hàng</a></th>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <!---------------fage footer----------------->
        <div class="fage-footer-container">
            <div class="fage-footer-container-now">
                <div class="fage-footer-container-now-colum1">
                    <div class="fage-footer-container-now-colum1-item">
                        <h4 class="footer-logo">
                            <a title="Owen" href="trangchusn.html"><img src="image/logoowen.webp" alt="logo" style="width: 150px;height: 50px;"></a>
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
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Giới thiệu</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">BLOG</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Hệ thống của hàng</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Liên hệ OWEN</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="fage-footer-container-now-colum3">
                    <div class="fage-footer-container-now-colum3-item">
                        <h4 class="footer-title-active">
                            HỖ TRỢ KHÁCH HÀNG
                        </h4>
                        <ul class="footer-links ">
                            <li><a title="owen" href="gioithieu.html" style="color:#060709;">Hỏi đáp</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Chính sách vận chuyển</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Hướng dẫn chọn kích cỡ</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Hướng dẫn thanh toán</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Quy định đổi hàng</a></li>
                            <li><a title="owen" href="gioithieu.html"style="color:#060709;">Hướng dẫn mua hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="fage-footer-container-now-colum4">
                    <div class="fage-footer-container-now-colum4-item">
                        <h4 class="footer-title-active">
                        KẾT NỐI
                        </h4>
                        <ul class="footer-links ">
                            <li><a href="dangnhap.html"style="color:#060709;"><i class="fas fa-facebook"></i></a></li>
                            <li><a href="dangnhap.html"style="color:#060709;"><i class="fas fa-facebook-messenger"></i></a></li>
                            <li><a href="dangnhap.html"><i class="fas fa-youtube"></i></a></li>
                        </ul>
                        <h4 class="footer-title-active">
                            PHƯƠNG THỨC THANH TOÁN
                        </h4>
                        <ul class="footer-links ">
                            <li><a href="dangnhap.html"style="color:#060709;">Thanh toán khi nhận hàng</a></li>
                            <li><a href="dangnhap.html"style="color:#060709;">Thanh toán on hiện đang cập nhật</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin">
            <p>Hỗ trợ làm web liên hệ : Hoàng Anh</p>
        </div>
    </body>
    </html>
    <?php
    }else{
        echo '<br>Giỏ hàng rỗng<br><a href ="trangchusn.html">Tiếp tục đặt hàng</a>';
    }
    ?>