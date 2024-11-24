<?php

session_start();
ob_start();

include "./myfunc.php";
$cate_list = get_all_cates();
// var_dump($cate_list);
if (!isset($_SESSION['productlist'])) {
    $_SESSION['productlist'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
        display: flex;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }

    form {
        flex: 1;
    }

    table {
        /* justify-self: flex-start; */
        width: 100%;
        flex: 2;
    }

    tr,
    td,
    th {
        border: 1px solid #ccc;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form" id="form" method="post"
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
                <select name="cateselect[]" id="" class="form-control">
                    <option value="">Chọn loại</option>
                    <?php
foreach ($cate_list as $cateitem) {
    # code...
    // $tendanhmuc = get_cate_name($cateitem['id']);
    echo '
                            <option value="' . $cateitem['id'] . '">' . $cateitem['tendanhmuc'] . '</option>
                        ';

}
?>
                    <!-- <option value="Laptops">Laptops</option>
                    <option value="Phone">Phone</option>
                    <option value="TV">TV</option> -->
                </select>
            </div>

            <!-- Image filé-->
            <div class="form-group">
                <label for="" class="form-label">Room image:</label>
                <input type="file" name="roomimagefile" id="file" class="form-control">
            </div>

            <!-- button -->
            <!-- <button class="form-btn form-btn--accept" onclick="return kiem_tra()">Đăng ký</button> -->
            <input class="form-btn form-btn--accept" name="submitproduct" onclick="return kiem_tra()" type="submit"
                value="Save">
        </form>
        <!-- <h1>Danh sách sản phẩm</h1> -->
        <table>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Room Image</th>
            </tr>
            <?php
// unset($_SESSION['productlist']);
foreach ($_SESSION['productlist'] as $item) {
    # code...
    // echo var_dump($item);
    echo '
        <tr>
            <th>' . $item[0] . '</th>
            <th>' . $item[1] . '</th>
            <th>' . $item[2] . '</th>
            <th>' . $item[3] . '</th>
            <th><img width=200 src="' . $item[4] . '"/></th>
        </tr>
    ';
}
?>
        </table>
    </div>

    <?php

if (isset($_POST['submitproduct']) && $_POST['submitproduct']) {
    $productName = $_POST['productname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // $cates = $_POST['cateselect'];
    $category = $_POST['cateselect'][0];
    $imageFile = $_FILES['roomimagefile'];
    $cate_name = get_cate_name($category)[0]['tendanhmuc'];
    // Fix Phần này sau
    var_dump($cate_name);
    echo var_dump($category) . "\n";
    // echo var_dump($imageFile);

    $dest = 'upload/' . $_FILES['roomimagefile']['name'];
    $file = $_FILES['roomimagefile']['tmp_name'];
    $err = $_FILES['roomimagefile']['error'];

    if ($err == 0 && move_uploaded_file($file, $dest)) {
        echo 'File successfully uploaded';
    }

    $item = array($productName, $description, $price, $cate_name, $dest);
    $_SESSION['productlist'][] = $item;

    insert_data($productName, $description, $price, $category, $dest);

    // echo "HELLO: " . var_dump($_SESSION['productlist']);
    // header("location: index.php");
    header("Refresh:0");
}

?>
</body>

</html>