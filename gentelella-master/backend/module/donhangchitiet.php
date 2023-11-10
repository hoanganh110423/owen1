<div class="x_panel">
                  <div class="x_title">
                    <h2>Đơn hàng chi tiết</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php
                    if(isset($_GET["id"]) && isset($_GET["del"]) ){
                        mysqli_error($conn);
                        $sqlDelete = "DELETE FROM hoadonchitiet WHERE idhdct=".$_GET["id"];
                        mysqli_query($conn, $sqlDelete) or die(mysqli_error($conn)) ;
                        header("location:index.php?page=donhangchitiet");
                    }
                    ?>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Ảnh sản phẩm</th>
                          <th>Tên sản phẩm</th>
                          <th>Số lượng</th>
                          <th>Giá</th>
                          <th>Tổng tiền</th>
                        </tr>
                      </thead>
                      <?php
                    //lệnh truy vấn
                      $sqlSelect = "SELECT * FROM hoadonchitiet";
                      $resultdonhangchitiet = mysqli_query($conn, $sqlSelect)  or die("Lỗi truy vấn dữ liệu");
                      if (mysqli_num_rows($resultdonhangchitiet) > 0) {
                        $i = 0;
                        while ($rowdonhangchitiet = mysqli_fetch_assoc($resultdonhangchitiet)) {
                            $i++;
                            $idsp = $rowdonhangchitiet["idsp"];
                            //lệnh truy vấn
                            $sqlSelect = "SELECT * FROM sanpham WHERE idsp = $idsp ";
                            $resulthoadon = mysqli_query($conn, $sqlSelect)  or die("Lỗi truy vấn dữ liệu");
                            if (mysqli_num_rows($resulthoadon) > 0) {
                            while ($rowhoadon = mysqli_fetch_assoc($resulthoadon)) {
                            $tongtien = $rowdonhangchitiet["soluong"] * $rowdonhangchitiet["gia"];
                    ?>
                      <tbody>
                        <tr>
                          <th ><?php echo $i ?></th>
                          <td>
                                    <img src="../<?php echo $rowhoadon["anhsp"]; ?>" width="100px" height="100px">
                          </td>
                          <td><?php echo $rowhoadon["tensp"]; ?></td>
                          <td><?php echo $rowdonhangchitiet["soluong"]; ?></td>
                          <td><?php echo $rowdonhangchitiet["gia"]; ?></td>
                          <td><?php echo $tongtien; ?></td>
                          <td>
                          <a href="index.php?page=donhangchitiet&id=<?php echo $rowdonhangchitiet["idhdct"] ?>&del=1"onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?');"><i class="fa fa-trash-o">Xóa</i></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php }} }} ?>
                    </table>

                  </div>
                </div>