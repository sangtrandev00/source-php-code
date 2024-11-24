<?php
include "./model/connectdb.php";
include "./model/myfunc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 01</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css'
        integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <caption>Bảng sản phẩm</caption>
        <table class="table table-dark table-triped">

            <thead>
                <tr>
                    <th>product Id</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>product quantity</th>
                    <th>product image</th>
                    <th>product description</th>
                    <th>Action</th>
                </tr>
                <!-- <a href="practice01.php?act=editproduct&id=2" class="btn btn-success"
                    onclick="return confirm('Sửa sản phẩm?');">Sửa</a> <a href="
                    practice01.php?act=deleteproduct&id=1" class="btn btn-danger"
                    onclick="return confirm(' Xóa sản phẩm?');">Xóa</a> -->
            </thead>
            <tbody>
                <?php
$carList = selectAllData();
foreach ($carList as $car) {
    # code...
    ?>
                <tr>
                    <td> <?php echo $car['product_id'] ?> </td>
                    <td> <?php echo $car['product_name'] ?> </td>
                    <td> <?php echo $car['product_price'] ?> </td>
                    <td> <?php echo $car['product_quantity'] ?> </td>
                    <td><img style="width: 100px; height: 100px;" src="<?php echo $car['product_image'] ?>" /></td>
                    <td> <?php echo $car['description'] ?> </td>
                    <td width=200> <a href="view/editproduct.php?id=<?php echo $car['product_id'] ?>"
                            class="btn btn-success" onclick="return confirm('Sửa sản phẩm?');">Sửa</a> <a
                            href="view/deleteproduct.php?id=<?php echo $car['product_id'] ?> " class="btn btn-danger"
                            onclick="return confirm(' Xóa sản phẩm?');">Xóa</a></td>
                </tr>
                <?php
}

?>
            </tbody>

        </table>
        <a href="./view/addproduct.php" type="submit" onclick="return confirm(' hêm mới sản phẩm ?');"
            class="btn btn-primary">Thêm mới sản phẩm</a>

    </div>
</body>

</html>