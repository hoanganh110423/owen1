<?php
// Nhập Máy chủ, tên người dùng, mật khẩu, cơ sở dữ liệu bên dưới.
// Tôi để trống mật khẩu vì tôi không đặt mật khẩu trên localhost.
$connect = mysqli_connect("localhost","root","","owen");
// Check connection
if ($connect){
    mysqli_query($connect, "SET NAMES 'UTF8'");
}else{
    echo "ket noi that bai";
}
?>
<?php
    $sql_brand = "SELECT * FROM brands";
    $query_brand = mysqli_query($connect, $sql_brand);

    if(isset($_POST['sbm'])){
        $prd_name = $_POST['prd_name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $brand_id = $_POST['brand_id'];


        $sql = "INSERT INTO products (prd_name, image, price, quantity, description, brand_id,prd_id)
        VALUES('$prd_name', '$image',  $price,  $quantity, '$description', $brand_id,'$prd_id')";
        $query - mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp, 'img/'.$image);
        header('location: /owen/gentelella-master/backend/index.php?page=danhsachsanpham');

    }


?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" name="prd_name" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label><br>
                  <input type="file" name="image">
                </div>

                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="number" name="price" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Số lượng sản phẩm</label>
                  <input type="number" name="quantity" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Mô tả</label>
                  <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Thiết kế</label>
                  <select name="brand_id" class="form-control">
                    <?php
                    while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                        <option value="<?php echo $row_brand['brand_id']; ?>"><?php echo $row_brand['brand_name']; ?></option>
                    <?php }?>
                    
                  </select>
                </div>

                <button name="sbm" class="btn btn-success" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>
</div>