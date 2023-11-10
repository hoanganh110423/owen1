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
    $sqlDelete = "DELETE FROM username WHERE id=".$_GET["id"];
     mysqli_query($conn, $sqlDelete) or die("Lỗi xóa") ;
     header("location:/owen/gentelella-master/backend/index.php?page=quanlytk");
 }
?>
<div class="x_panel">
                  <div class="x_title">
                    <h2>Danh sách tài khoản</h2>
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
                          <td>Mật Khẩu</td>
                          <td>Quyền tài khoản </td>
                          <td>#</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                    //lệnh truy vấn
                    $sqlSelect = "SELECT * FROM username";
                    $resultdonhang = mysqli_query($conn, $sqlSelect)  or die("Lỗi truy vấn dữ liệu");
                    if (mysqli_num_rows($resultdonhang) > 0) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($resultdonhang)) {
                            $i++;
                    ?>
                        <tr>
                          <th ><?php echo $i ?></th>
                          <td><?php echo $row["username"] ?></td>
                          <td><?php echo $row["password"] ?></td>
                          <td><?php echo $row["role"] ?></td>
                          <td>
                          <a href="/owen/gentelella-master/backend/index.php?page=quanlytk&id=<?php echo $row["id"] ?>&del=1" onclick="return confirm('Bạn có chắc chắn xóa tài khoản này không?');"><i class="fa fa-trash-o">Xóa</i></a>
                          </td>
                        </tr>                      
                      </tbody>
                    
                      <?php }} ?>
                    </table>

                  </div>
                </div>