<?php

session_start();
ob_start();
if (isset($_SESSION['cart'])) {
    // template này có thể phải nhớ !!!
    if (isset($_GET['id'])) {
        array_splice($_SESSION['cart'], $_GET['id'], 1);
    } else {
        unset($_SESSION['cart']);
    }

    if (count($_SESSION['cart']) > 0) {
        header('location: viewcart.php');
    } else {
        header('location: sanpham.php');
    }
} else {
    header('location: sanpham.php');
}