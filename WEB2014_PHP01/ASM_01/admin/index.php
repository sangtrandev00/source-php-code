<?php
session_start();
ob_start();

include "./view/common/header.php";
include "./view/common/sidebar.php";
include "./view/common/topbar.php";

// var_dump($_SESSION);
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include 'view/about.php';
            break;
        case 'shoppage':
            include 'view/shop-page.php';
            break;
        // case 'signuppage':
        //     if (isset($_POST['signupbtn']) && $_POST['signupbtn']) {
        //         $fullname = $_POST['fullname'];
        //         $email = $_POST['emailaddress'];
        //         $username = $_POST['username'];
        //         $password = $_POST['password'];
        //         // connectdb();
        //         insertuser($fullname, $username, $email, $password);
        //         include "./view/signup-success.php";
        //     } else {
        //         // echo "<h1>Hello</h1>";
        //         include "./view/signup-page.php";
        //     }

        //     break;
        case 'logout':
            unset($_SESSION['role']);
            unset($_SESSION['username']);
            unset($_SESSION['iduser']);
            header('location: ../index.php');
            break;
        default:
            include "./view/common/pagecontent.php";
            break;
    }
} else {
    include "./view/common/pagecontent.php";

}

include "./view/common/footer.php";