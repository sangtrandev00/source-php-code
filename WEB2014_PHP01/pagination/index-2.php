<!-- <!DOCTYPE html>
<html>

<head>
    <title>Ví dụ phân trang trong PHP và MySQL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php

// PHẦN XỬ LÝ PHP
$servername = "localhost";
$username = "root";
$password = "";

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
$conn = new PDO("mysql:host=$servername;dbname=pagin_example", $username, $password);

// BƯỚC 2: TÌM TỔNG SỐ RECORDS
// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$finalresult = $stmt->fetchAll();
$total_records = count($finalresult);

// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;

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

$result = mysqli_query($conn, "SELECT * FROM news LIMIT $start, $limit");

?>
    <div>
        <?php
// PHẦN HIỂN THỊ TIN TỨC
?>
    </div>
    <div class="pagination">
        <?php
// PHẦN HIỂN THỊ PHÂN TRANG

?>
    </div>
</body>

</html> -->