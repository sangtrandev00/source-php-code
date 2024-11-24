<!DOCTYPE html>
<html>

<head>
    <title>Ví dụ phân trang trong PHP và MySQL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
include "./connectdb.php";

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
connectdb();
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$stmt = $conn->prepare("SELECT * FROM news");
$stmt->execute();

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

$stmt2 = $conn->prepare("SELECT * FROM news LIMIT $start, $limit");
$stmt2->execute();
$result2 = $stmt2->fetchAll();

?>
    <div>
        <?php
// PHẦN HIỂN THỊ TIN TỨC
// BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
foreach ($result2 as $item) {
    echo '<li>' . $item['title'] . '</li>';
}

?>
    </div>
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
</body>

</html>