<?php
include "./model/connectdb02.php";
include "./model/myfunc02.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css'
        integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q=='
        crossorigin='anonymous' />
</head>

<body>

    <div class="container">
        <h3 class="bg-warning py-3">
            Hiển thị sản phẩm
        </h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Cate</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$productList = selectAllData();

foreach ($productList as $product) {
    # code...
    $cate = selectCateById($product['cate_id']);
    var_dump($cate);
    ?>
                <tr>
                    <td> <?php echo $product['product_id'] ?> </td>
                    <td> <?php echo $product['product_name'] ?> </td>
                    <td> <?php echo $product['price'] ?> </td>
                    <td> <?php echo $product['quantity'] ?> </td>
                    <td><img style="width: 100px; height: 100px;" src="<?php echo $product['image'] ?>" /></td>
                    <td> <?php echo $product['description'] ?> </td>
                    <td> <?php echo $cate['cate_name'] ?> </td>
                    <td width=200> <a href="view/editproduct02.php?id=<?php echo $product['product_id'] ?>"
                            class="btn btn-success" onclick="return confirm('Sửa sản phẩm?');">Sửa</a> <a
                            href="view/deleteproduct02.php?id=<?php echo $product['product_id'] ?> "
                            class="btn btn-danger" onclick="return confirm(' Xóa sản phẩm?');">Xóa</a></td>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">

    </script>

</body>

</html>