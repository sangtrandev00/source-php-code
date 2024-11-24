<?php
include "../model/connectdb.php";
include "../model/myfunc.php";
?>
<?php

if (isset($_POST['addproductbtn']) && $_POST['addproductbtn']) {
    $error = array();
    // Get data
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $target_dir = "assets/img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $file_size = $_FILES["image"]["size"];
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // echo 'file size: ' . $file_size;
    // echo 'file type: ' . $_FILES['image']['type'];
    // echo 'file type2: ' . strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $description = $_POST['description'];

    // Validate data
    if (empty($productName)) {
        $error['productName'] = "Không để trống tên sản phẩm";
    }
    if (empty($price)) {
        $error['price'] = "Không để trống giá sản phẩm";
    } else if ($price <= 0) {
        $error['price'] = "Giá sản phẩm phải lớn hơn 0";
    }

    if (empty($quantity)) {
        $error['quantity'] = "Không để trống số lượng sản phẩm";
    } else if ($quantity <= 0) {
        $error['quantity'] = "Số lương sản phẩm phải lớn hơn 0";
    }
    // Validate check image
    if (empty($_FILES['image']['name'])) {
        $error['image'] = "Không để trống hình ảnh";
    } else if ($file_size >= 50000) {
        $error['image'] = "Hình ảnh của bạn lớn hơn 50kb";
    } else if ($file_type != 'png' && $file_type != 'jpg') {
        $error['image'] = "Hình ảnh của bạn không đúng định dạng";
    }

    if (empty($description)) {
        $error['description'] = "Không để trống mô tả";
    }

    if (!$error) {
        move_uploaded_file($_FILES["image"]["tmp_name"], "../" . $target_file);
        insertData($productName, $price, $quantity, $target_file, $description);
    }

}
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

    <style>
    .error-message {
        color: red;
    }
    </style>

</head>


<body>

    <div class="container ">
        <form class="shadow-lg p-3 mt-5" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post"
            enctype="multipart/form-data">
            <a href="../practice01.php" class="btn btn-warning my-3">
                << Xem bảng sản phẩm</a>
                    <h3 class="my-3">Thêm sản phẩm</h3>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="productName" class="form-control" id="productName"
                            aria-describedby="emailHelp">
                        <p class="error-message"><?php if (isset($error['productName'])) {echo $error['productName'];}?>
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="priceProduct" class="form-label">Giá sản phẩm</label>
                        <input type="number" name="price" class="form-control" id="priceProduct">
                        <p class="error-message"><?php if (isset($error['price'])) {echo $error['price'];}?>

                    </div>
                    <div class="mb-3 ">
                        <label class="form-label" for="quantity">Số lượng sản phẩm</label>
                        <input type="number" name="quantity" class="form-control" id="quantity">
                        <p class="error-message"><?php if (isset($error['quantity'])) {echo $error['quantity'];}?>

                    </div>
                    <div class="mb-3 ">
                        <label class="form-label" for="image">Hình ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control" id="image">
                        <p class="error-message"><?php if (isset($error['image'])) {echo $error['image'];}?>

                    </div>
                    <div class="mb-3 ">
                        <label class="form-label" for="description">Mô tả sản phẩm</label>
                        <textarea name="description" type="text" style="height: 10rem;" class="form-control"
                            id="description">
                        </textarea>
                        <p class="error-message"><?php if (isset($error['description'])) {echo $error['description'];}?>
                    </div>
                    <input type="submit" class="btn btn-primary" name="addproductbtn" value="Thêm mới">
        </form>


    </div>
</body>