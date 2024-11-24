<?php
session_start();
// Thao tác rất quan trọng để thêm sản phẩm vào giỏ hàng !!!

if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
// $_SESSION['giohang'] = [];

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

        case 'themsanpham':

            if (isset($_POST['addtocart']) && $_POST['addtocart']) {

                echo 'Hello add btn';

                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $sl = 1;
                $gia = $_POST['gia'];

                $item = array($id, $tensp, $img, $sl, $gia);
                // var_dump($item);

                $flag = 0;

                $i = 0;

                foreach ($_SESSION['giohang'] as $itemsp) {
                    # code...
                    var_dump($itemsp);
                    if ($itemsp[0] == $id) {

                        $_SESSION['giohang'][$i][3] += 1;
                        $flag = 1;

                        break;
                    }
                    $i++;
                }

                if ($flag == 0) {
                    $_SESSION['giohang'][] = $item;
                }

                // header('location: index.php?act=viewcart');
                // var_dump($_SESSION['giohang']);
                header('location: index.php?act=viewcart');

            }

            break;

        case 'viewcart':
            include "view/viewcart.php";
            break;
        case 'dathang':

            if (isset($_POST['dathang']) && $_POST['dathang']) {
                $tennguoinhan = $_POST['tennguoinhan'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $pttt = $_POST['pttt'];
                $tongdonhang = $_POST['tongdonhang'];

                $madonhang = "DONHANG" . rand(1999, 999999);

                $iddh = taodonhang($madonhang, $pttt, 0, $tennguoinhan, $phone, $email, $diachi, $tongdonhang);

                $giohang = $_SESSION['giohang'];
                foreach ($giohang as $row) {
                    # code...
                    $idsp = $row[0];
                    $soluong = $row[4];
                    $dongia = $row[3];
                    $tensp = $row[1];
                    $img = $row[2];
                    addtoorderdetail($idsp, $iddh, $soluong, $dongia, $tensp, $img);
                }
                include "view/donhang.php";
            }
            break;

        case 'sanphamct':

            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $kq = getonesp($id);
            }

            include 'view/sanphamct.php';
            break;

        default:
            include 'view/home.php';
            break;
    }
} else {

    include 'view/home.php';
}

include "view/fooder.php";