<?php
// include "./connectdb.php";
include "./myfunc.php";
// connectdb();
$allproducts = get_all_product();
// print_r($allproducts);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab06 - Bai 2</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
$conn = new PDO("mysql:host=$servername;dbname=lab06_myclass", $username, $password);
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$stmt = $conn->prepare("SELECT * FROM tbl_product");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$finalresult = $stmt->fetchAll();
$total_records = count($finalresult);

// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 3;

// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page) {
    $current_page = $total_page;
} else if ($current_page < 1) {
    $current_page = 1;
}

// Tìm Start
$start = ($current_page - 1) * $limit;

// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
$stmt2 = $conn->prepare("SELECT * FROM tbl_product LIMIT $start, $limit");
$stmt2->execute();
$allproducts = $stmt2->fetchAll();

?>

    <div class="container">
        <h3 class="title">ALL PRODUCTS</h3>
        <div class="row product-list">
            <?php
foreach ($allproducts as $productitem) {
    # code...
    echo '
                    <div class="product-item col-4">
                        <div class="product-item__wrap">
                            <img src="' . $productitem['img'] . '"
                                alt="" class="product-item__img" >
                            <h3 class="product-item__title">' . $productitem['proname'] . '</h3>
                            <p class="product-item__pice">
                                <s class="product-item__price-old">$' . $productitem['oldprice'] . '</s>
                                <span class="product-item__price-new">$' . $productitem['price'] . '</span>
                            </p>
                            <p class="product-item__cate">Cateogory: ' . $productitem['cateid'] . '</p>
                            <p class="product-item__short-desc">' . $productitem['shortdesc'] . '</p>
                            <input class="product-item__btn" type="submit" value="View Detail">
                        </div>
                    </div>
                    ';
}
?>

            <div class="pagination">
                <?php
// PHẦN HIỂN THỊ PHÂN TRANG
// BƯỚC 7: HIỂN THỊ PHÂN TRANG

// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1) {
    echo '<a href="index.php?page=' . ($current_page - 1) . '">Prev</a> | ';
}

// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++) {
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page) {
        echo '<span>' . $i . '</span> | ';
    } else {
        echo '<a href="index.php?page=' . $i . '">' . $i . '</a> | ';
    }
}

// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
if ($current_page < $total_page && $total_page > 1) {
    echo '<a href="index.php?page=' . ($current_page + 1) . '">Next</a> | ';
}

?>
            </div>

        </div>
    </div>
</body>

</html>