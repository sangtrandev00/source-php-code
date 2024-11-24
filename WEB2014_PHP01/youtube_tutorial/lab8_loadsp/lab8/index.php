<?php
session_start();
// Thao tác rất quan trọng để thêm sản phẩm vào giỏ hàng !!!
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}

include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/donhang.php";

//load du lieu trang chu
$sphome1 = getall_sp(0, 0);
$sphome2 = getall_sp(0, 1);
$banner_clss = "inner-banner";

if (!isset($_GET['act'])) {
    $banner_clss = "main-banner";
} elseif (isset($_GET['act']) && (($_GET['act'] == "") || ($_GET['act'] == "home"))) {
    $banner_clss = "main-banner";
}

include 'view/header.php';

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include 'view/about.php';
            break;
        case 'sanpham':
            $dsdm = getall_dm();
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $iddm = $_GET['id'];
                $dssp = getall_sp($iddm, 0);
            } else {
                $dssp = getall_sp(0, 0);
            }
            include 'view/sanpham.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'addcart':
            // Lấy dữ liệu từ form để lưu vào giỏ hàng

            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }
                $flag = 0;

                // Kiểm tra sản phẩm có tồn tại trong giỏ hàng hay không ?

                // Nếu có chỉ cập nhất lại số lượng

                // Ngược lại add mới sp vào giỏ hàng

                // Khởi tạo một mảng con trước khi đưa vào giỏ

                $i = 0;
                foreach ($_SESSION['giohang'] as $itemsp) {
                    # code...
                    if ($itemsp[1] === $tensp) {
                        $slnew = $sl + $item[1];
                        $_SESSION['giohang'][$i][4] += $slnew;
                        $flag = 1;
                        break;
                    }
                    $i++;
                }

                if ($flag == 0) {
                    $itemsp = array($id, $tensp, $img, $gia, $sl);
                    // array_push($_SESSION['giohang'], $itemsp);
                    // $_SESSION['giohang'][] = $itemsp;
                    $_SESSION['giohang'][] = $itemsp;
                }

                header('location: index.php?act=viewcart'); // Tại sao lại có dòng này ?

            }

            // Hiển thị giỏ hàng lên
            include 'view/viewcart.php';
            break;
        case 'sanphamct':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $kq = getonesp($id);
            }
            include 'view/sanphamct.php';

            break;
        case 'delcart':
            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                array_splice($_SESSION['giohang'], $i, 1);
                // $_SESSION['giohang']
            } else {
                // include 'view/sanphamct.php';
                if (isset($_SESSION['giohang'])) {
                    unset($_SESSION['giohang']);
                }
            }

            // Logic chuyển trang
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang'])) > 0) {
                header('location: index.php?act=viewcart');
            } else {
                header('location: index.php');
            }

            break;
        case 'thanhtoan':
            // Khi nút thanh toán được tồn tại và nó được click !!!
            if (isset($_POST['thanhtoan']) && $_POST['thanhtoan']) {
                // 1. Lấy dữ liệu
                $tongdonhang = $_POST['tongdonhang'];
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['sodienthoai'];
                $pttt = $_POST['pttt']; // Array[0,1,2,3]
                // Sinh ra mã đơn hàng
                $madonhang = "intelsport" . rand(0, 999);

                // 2. tạo đơn hàng và trả về một id đơn hàng
                $iddh = taodonhang($madonhang, $tongdonhang, $pttt, $hoten, $diachi, $email, $sodienthoai);
                $_SESSION['iddh'] = $iddh;
                // vào ở đây đợi thầy Hộ giải thích !!!
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    foreach ($_SESSION['giohang'] as $item) {
                        # code...
                        addtocart($iddh, $item[0], $item[1], $item[2], $item[3], $item[4]);
                    }
                    // Xóa đơn hàng sau khi add to cart ( database )
                    unset($_SESSION['giohang']);
                }
            }
            include "view/donhang.php";

            // include 'view/viewcart.php';
            break;
        case 'viewcart':
            include 'view/viewcart.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {

    include 'view/home.php';
}

include "view/fooder.php";