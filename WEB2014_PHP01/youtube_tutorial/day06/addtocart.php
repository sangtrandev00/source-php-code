<?php
session_start();
ob_start(); // Phải có để sử dụng đối tượng header
// Nếu không tồn tại giỏ hàng --> tạo một giỏ hàng rỗng (oke - hiểu)

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ((isset($_POST['dathang'])) && ($_POST['dathang'])) {
    // echo 'oke';
    // Lấy giá trị
    $img = $_POST['img'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $id = $_POST['id'];
    $sl = 1;
    // $img = $_POST[''];
    $i = 0;
    $flag = 0; // Theo dõi sự thay đổi của số lượng
    // Tìm và so sánh sản phẩm trong giỏ hàng.
    if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
        foreach ($_SESSION['cart'] as $sp) {
            if ($sp[0] == $id) {
                // Cập nhật mới số lượng
                $sl += $sp[4];
                $flag = 1; // here
                // Cập nhật số lượng mới vào giỏ hàng
                $_SESSION['cart'][$i][4] = $sl;
                break;
            }
            $i++;
        }
    }

    // Khi số lượng ban đầu không thay đổi thì thêm mới sản phẩm vào giỏ hàng

    if ($flag == 0) {
        $sp = array($id, $img, $tensp, $gia, $sl);
        array_push($_SESSION['cart'], $sp);
    }

    // Add vào giỏ hàng !!!
    // $_SESSION['cart'][] = $sp;

    header('location: viewcart.php');
}