<?php
session_start();
ob_start();
include "./model/connectdb.php";
include "./view/header.php";
include "./view/form-upload.php";
include "./model/crudprouduct.php";
connectdb();
if (!isset($_POST['productlist'])) {
    $_POST['productlist'] = [];
}

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'submitproduct':
            # code...
            if (isset($_POST['submitbtn']) && $_POST['submitbtn']) {
                $productSubmit = $_POST['nameproduct'];
                // $sessionArray = ;
                if (isset($_GET['index']) && $_GET['index'] >= 0) {
                    $_SESSION['productlist'][$_GET['index']] = $productSubmit;
                    // header('location: index.php');
                    // header('location: ')
                } else {
                    $_SESSION['productlist'][] = $productSubmit;
                }
            } else {

            }
            include "./view/productlist.php";
            // header('location: view/index.php');
            break;
        case "delproduct":
            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                $index = $_GET['i'];
                delOneItem($index, $_SESSION['productlist']);
                array_splice($_SESSION['productlist'], $index, 1);
            }
            include "./view/productlist.php";
            break;
        case "editprouduct":
            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                $index = $_GET['i'];
                // $_POST['nameproduct'] = 100;
                // include "./view/form-upload.php";
            } else {
                echo "No thing here!";
            }
            include "./view/productlist.php";
            // header('location: index.php');
            break;
        default:
            # code...
            break;
    }
} else {
    if (isset($_POST['submitbtn']) && $_POST['submitbtn']) {
        $productSubmit = $_POST['nameproduct'];
        // $sessionArray = ;
        // if (isset($_GET['index']) && $_GET['index'] >= 0) {
        //     $_SESSION['productlist'][$_GET['index']] = $productSubmit;
        //     // header('location: index.php');
        //     // header('location: ')
        // } else {
        // }
        $_SESSION['productlist'][] = $productSubmit;
    } else {

    }
    include "./view/productlist.php";

}

include "./view/footer.php";