<?php
// Nhập Máy chủ, tên người dùng, mật khẩu, cơ sở dữ liệu bên dưới.
// Tôi để trống mật khẩu vì tôi không đặt mật khẩu trên localhost.
$conn = mysqli_connect("localhost","root","","owen");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- <div class="row" style="display: inline-block;"> -->
    <div class="tile_count">
        <?php
        $sqlSelect = "SELECT * FROM username";
        $result = mysqli_query($conn, $sqlSelect) or die("Lỗi truy vấn dữ liệu");
        $i = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $i += 1;
            }
        }            
        ?>           
        <div class="col-md-2 col-sm-  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i>Người dùng</span>
                    <div class="count"><?php echo $i ?></div>
        </div>
        <?php 
         $sqlSelect = "SELECT * FROM tbl_cart";
         $resultdonhang = mysqli_query($conn, $sqlSelect)  or die("Lỗi truy vấn dữ liệu");
         if (mysqli_num_rows($resultdonhang) > 0) {
           $soluong = 0;
           while ($rowtbl_cart = mysqli_fetch_assoc($resultdonhang)) {
               $soluong += $rowtbl_cart["soluong"];
           }
        }
        ?>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i>Số lượng đặt hàng</span>
            <div class="count green"><?php echo $soluong; ?></div>
            <span class="count_bottom">sản phẩm</span>
        </div>
        <?php 
          $sqlSelect = "SELECT * FROM tbl_cart";
          $resultdonhang = mysqli_query($conn, $sqlSelect)  or die("Lỗi truy vấn dữ liệu");
          if (mysqli_num_rows($resultdonhang) > 0) {
            $tongtien = 0;
            while ($rowtbl_cart = mysqli_fetch_assoc($resultdonhang)) {
                $tongtien = $rowtbl_cart["dongia"] * $rowtbl_cart["soluong"];
            }
        }
        ?>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Tổng thu nhập</span>
            <div class="count"><?php echo $tongtien ?></div>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
            <div class="count">7,325</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
    </div>
<!-- </div> -->