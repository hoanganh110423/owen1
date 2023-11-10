<?php
// Nhập Máy chủ, tên người dùng, mật khẩu, cơ sở dữ liệu bên dưới.
// Tôi để trống mật khẩu vì tôi không đặt mật khẩu trên localhost.
$conn = mysqli_connect("localhost","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php 
  if(isset($_GET["id"]) && isset($_GET["del"]) ){
    $sqlDelete = "DELETE FROM tbl_bill WHERE id=".$_GET["id"];
     mysqli_query($conn, $sqlDelete) or die("Lỗi xóa") ;
     header("location:/owen/gentelella-master/backend/index.php?page=donhang");
 }
?>
<div class="x_panel">
                  <div class="x_title">
                    <h2>Danh sách đơn hàng</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th >STT</th>
                          <td>Tên khách hàng</td>
                          <td>Số điện thoại</td>
                          <td>Địa chỉ</td>
                          <td>Email</td>
                          <td>#</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                    //lệnh truy vấn
                    $sqlSelect = "SELECT * FROM tbl_bill";
                    $resultdonhang = mysqli_query($conn, $sqlSelect)  or die("Lỗi truy vấn dữ liệu");
                    if (mysqli_num_rows($resultdonhang) > 0) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($resultdonhang)) {
                            $i++;
                    ?>
                        <tr>
                          <th ><?php echo $i ?></th>
                          <td><?php echo $row["name"] ?></td>
                          <td><?php echo $row["tel"] ?></td>
                          <td><?php echo $row["address"] ?></td>
                          <td><?php echo $row["email"] ?></td>
                          <td>
                            <a href="/owen/gentelella-master/backend/index.php?page=donhang&id=<?php echo $row["id"] ?>&del=1" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?');"><i class="fa fa-trash-o">Xóa</i></a>
                          </td>
                        </tr>                      
                      </tbody>
                    
                      <?php }} ?>
                    </table>

                  </div>
                </div>
                