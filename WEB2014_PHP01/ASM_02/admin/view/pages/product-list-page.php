<div class="p-2">

    <a href="./index.php?act=addproductpage" class="btn btn-primary">Thêm sản phẩm</a>
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-100 navbar-search ">
        <div class="input-group">
            <input type="text" class="form-control bg-light border border-primary small "
                placeholder="Tìm kiếm sản phẩm" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" name="searchproduct" type="submit" />
                <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <h3 class="title mt-5">Danh sách sản phẩm</h3>
    <table class="table table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình sản phẩm</th>
                <th scope="col">Giá cũ</th>
                <th scope="col">Giá mới</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
$servername = "localhost";
$username = "asm_myclass";
$password = "trannhatsang10";

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
$conn = new PDO("mysql:host=$servername;dbname=asm_myclass", $username, $password);
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
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

// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH SẢN PHẨM
// Có limit và start rồi thì truy vấn CSDL lấy danh sách SẢN PHẨM
$stmt2 = $conn->prepare("SELECT * FROM tbl_sanpham LIMIT $start, $limit");
$stmt2->execute();
$productlist = $stmt2->fetchAll();

foreach ($productlist as $product_item) {
    # code...

    echo '
    <tr>
        <th scope="col"> ' . $product_item['id'] . '</th>
        <th scope="row">' . $product_item['iddm'] . '</th>
        <td>' . $product_item['tensp'] . '</td>
        <td> <img class="" width=100 height=100 style="object-fit: cover"  src="' . $product_item['hinhanh1'] . '"/> </td>
        <td>' . $product_item['giacu'] . '</td>
        <td>' . $product_item['giasp'] . '</td>
        <td><a href="index.php?act=editproduct&id=' . $product_item['id'] . '" class="btn-primary p-2">Sửa</a></td>
        <td><a href="index.php?act=deleteproduct&id=' . $product_item['id'] . '" class="btn-danger p-2">Xóa</a></td>
    </tr>
    ';

}

?>

        </tbody>
    </table>

    <div class="pagination justify-content-lg-end pl-4">
        <?php
// PHẦN HIỂN THỊ PHÂN TRANG
// BƯỚC 7: HIỂN THỊ PHÂN TRANG

// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=quanlysanpham&page=' . ($current_page - 1) . '">Prev</a> | ';
}

// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++) {
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page) {
        echo '<span class="btn btn-primary">' . $i . '</span> | ';
    } else {
        echo '<a class="btn btn-light" href="index.php?act=quanlysanpham&page=' . $i . '">' . $i . '</a> | ';
    }
}

// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Next
if ($current_page < $total_page && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=quanlysanpham&page=' . ($current_page + 1) . '">Next</a> | ';
}

?>
    </div>
</div>