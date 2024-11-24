<?php
include "./func.php";

// var_dump(getallcates());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
    .form {
        width: 40rem;
        margin: 0 auto;
    }

    .form-control {
        width: 100%;
    }

    .form-label {
        display: block;
    }
    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" id="form"
        enctype="multipart/form-data">
        <h1>Thêm sản phẩm</h1>
        <!-- product name -->
        <div class="form-group">
            <label class="form-label" for="">Product Name</label>
            <input type="text" name="productname" id="productname" class="form-control">
        </div>
        <!-- description -->
        <div class="form-group">
            <label class="form-label" for="">Description</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <!-- price -->
        <div class="form-group">
            <label class="form-label" for="">Price </label>
            <input type="number" name="price" id="re-password" class="form-control">
        </div>

        <!-- category-->
        <div class="form-group">
            <label for="" class="form-label">Category:</label>
            <!-- <input type="file" name="roomimagefile" id="file" class="form-control"> -->
            <select name="cateselect" id="" class="form-control">
                <option value="">Chọn loại</option>
                <!-- <option value="Laptops">Laptops</option>
                <option value="Laptops">Phone</option>
                <option value="Laptops">TV</option> -->
                <?php
$categories = getallcates();
// var_dump($categories);
foreach ($categories as $cateitem) {
    echo '
                    <option value="' . $cateitem['catename'] . '">' . $cateitem['catename'] . '</option>                                                ';
}
?>
            </select>
        </div>

        <!-- Image files-->
        <div class="form-group">
            <label for="" class="form-label">Room image:</label>
            <input type="file" name="roomimagefile" id="file" class="form-control">
        </div>

        <!-- button -->
        <!-- <button class="form-btn form-btn--accept" onclick="return kiem_tra()">Đăng ký</button> -->
        <input class="form-btn form-btn--accept" name="addproductbtn" onclick="return kiem_tra()" type="submit"
            value="Save">
    </form>

    <?php
if (isset($_POST['addproductbtn']) && $_POST['addproductbtn']) {
    $proname = $_POST['productname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $cate = $_POST['cateselect'];
    // $myfile = $_FILES['roomimagefile'];
    var_export($_FILES['roomimagefile']);
    $dest = 'upload/' . basename($_FILES['roomimagefile']['name']);
    $file = $_FILES['roomimagefile']['tmp_name'];
    $err = $_FILES['roomimagefile']['error'];

    if ($err == 0 && move_uploaded_file($file, $dest)) {
        echo 'File successfully uploaded';
    } else {
        echo 'File failed to be uploaded';
    }

    insert_product($proname, $description, $price, $cate, $dest);

}
?>



</body>

</html>