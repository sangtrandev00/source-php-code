<?php
session_start();
ob_start();
include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";

// //load du lieu trang chu
// $sphome1 = getall_sp(0, 0);
// $sphome2 = getall_sp(0, 1);
// $banner_clss = "inner-banner";
// if (!isset($_GET['act'])) {
//     $banner_clss = "main-banner";
// } elseif (isset($_GET['act']) && (($_GET['act'] == "") || ($_GET['act'] == "home"))) {
//     $banner_clss = "main-banner";
// }

$dsdm = getall_dm();
$sphome1 = getall_sp(0);
$special = getspecial_products();
// // Header section
include 'view/header.php';
// include 'view/home.php';

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include 'view/about.php';
            break;
        case 'product':
            // Nếu id tồn tại và id lớn hơn 0.
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
            }
            $dssp = getall_sp($id);
            include 'view/product.php';
            break;
        case 'ourcake':
            include 'view/ourcake.php';
            break;
        case 'blog':
            include 'view/blog.php';
            break;
        case 'contact':
            include 'view/contact.php';
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
        case 'sanphamct':
            include 'view/sanphamct.php';
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

// Header section

include "view/footer.php";