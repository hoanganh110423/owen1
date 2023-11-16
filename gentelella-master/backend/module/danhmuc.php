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
<?php

function addNew($table, $data) {
    global $conn;
    if (is_array($data)) {
        $field = "";
        $val = "";
        $i = 0;
        foreach ($data as $key => $value) {
            if ($key != "addNew") {
                $i++;
                if ($i == 1) {
                    $field .= $key;
                    $val .= "'" . $value . "'";
                } else {
                    $field .= "," . $key;
                    $val .= ",'" . $value . "'";
                }
            }
        }
        $sqlInsert = "INSERT INTO $table ($field)";
        $sqlInsert .= "VALUES($val)";
        mysqli_query($conn, $sqlInsert) or die("sai lệnh thêm".$sqlInsert) ;
    }
}

?>
<div class="col-md-5">
<div class="x_panel">
    <div class="x_title">
        <h2>Thêm mới danh mục và Sửa danh mục</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <?php
        if (isset($_POST["addNew"])) {
            $tendm = $_POST["tendm"];
            $trangthai = $_POST["trangthai"];
            if(isset($_GET["id"]) && isset($_GET["edit"])){
                $sqlUpdate = "UPDATE danhmuc SET tendm = '$tendm',trangthai = '$trangthai' WHERE iddm=".$_GET["id"];
                mysqli_query($conn, $sqlUpdate) or die("Lỗi câu lệnh cập nhật") ;
                header("location:/owen/gentelella-master/backend/index.php?page=danhmuc");
                //echo $sqlUpdate;
            }
            else{
                //lệnh in bảng 
                //$sqlInsert = "INSERT INTO danhmuc(madm,tendm)";
                //$sqlInsert .= "VALUES('$madm','$tendm')";
                //mysqli_query($conn, $sqlInsert);
                $table = "danhmuc";
                $_POST["tendm"] = $tendm;
                $_POST["trangthai"] = $trangthai;
                $data = $_POST;
                addNew($table,$data);

            }
        }
        //Kiểm tra tham số id trên URL trường hợp edit
        $trangthai = "";
        $tendm = "";
        if(isset($_GET["id"]) && isset($_GET["edit"]) ){
            $id = $_GET["id"];
            $sqlEdit = "SELECT * FROM danhmuc WHERE iddm='$id'";
            $resultEdit = mysqli_query($conn, $sqlEdit) ;
            $rowEdit = mysqli_fetch_row($resultEdit) ;
            //echo "<pre>";
            //print_r($rowEdit);
            $tendm = $rowEdit[1];
            $trangthai = $rowEdit[2];
        }
         //Kiểm tra tham số id trên URL trường hợp delete
         if(isset($_GET["id"]) && isset($_GET["del"]) ){
            $sqlDelete = "DELETE FROM danhmuc WHERE iddm=".$_GET["id"];
             mysqli_query($conn, $sqlDelete) or die("Lỗi xóa") ;
             header("location:/owen/gentelella-master/backend/index.php?page=danhmuc");
         }
        ?>
        <br>
        <form class="form-label-left input_mask" method="post">
            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Tên danh mục</label>
                <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" name="tendm" value="<?php echo $tendm; ?>" id="tendm" placeholder="Tên danh mục">
                   
                </div>
                <label class="col-form-label col-md-3 col-sm-3 ">Trạng thái</label>
                <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" name="trangthai" value="<?php echo $trangthai; ?>" id="trangthai" placeholder="Trạng thái danh mục">
                   
                </div>                
            </div>
            <div class="ln_solid"></div>
            <div class="form-group row">
                <div class="col-md-9 col-sm-9  offset-md-3">
                    <button type="button" class="btn btn-primary">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success" name="addNew" id="addNew">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<div class="col-md-7">
<div class="x_panel">
    <div class="x_title">
    <h2>Danh sách danh mục</h2>
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
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Trạng thái</th>
            <th>Xóa</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $sqlSelect = "SELECT * FROM danhmuc";
            $result = mysqli_query($conn, $sqlSelect)  or die("Lỗi truy vấn dữ liệu");
            if(mysqli_num_rows($result) > 0){
                $i=0;
                while($row = mysqli_fetch_assoc($result)){
                    $i++;
            ?>
        <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $row["tendm"]; ?></td>
            <td><?php echo $row["trangthai"]; ?></td>
            <td>
            
            <a href="/owen/gentelella-master/backend/index.php?page=danhmuc&id=<?php echo $row["iddm"] ?>&del=1" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?');"><i class="fa fa-trash-o">Xóa</i></a>
            </td>
        </tr>
        <?php } }?>
        </tbody>
    </table>

    </div>
</div>
</div>