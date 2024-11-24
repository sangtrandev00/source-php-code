<?php

session_start();
ob_start();

// include "./model/connectdb.php";
// include "./model/user.php";
// unset($_SESSION);

include "./model/connectdb.php";
include "./model/user.php";
include "./view/header.php";

// var_dump($_SESSION);
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include 'view/about.php';
            break;
        case 'shoppage':
            include 'view/shop-page.php';
            break;
        case 'aboutpage':
            include "./view/about-page.php";
            break;
        case 'contactpage':
            include "./view/contact-page.php";
            break;

        case 'viewcart':
            include 'view/viewcart.php';
            break;

        case 'loginpage':
            if (isset($_POST['loginbtn']) && $_POST['loginbtn']) {

                $username = $_POST['username'];
                $password = $_POST['password'];
                // Đối chiếu password

                $islogined = checkuser($username, $password);
                if ($islogined === -1) {
                    $text_error = "username hoặc password không tồn tại";
                    include "./view/login-page.php";
                } else {
                    $kq = getuserinfo($username, $password);
                    var_dump($kq);
                    $role = $kq[0]['role'];
                    echo $role;
                    if ($role == 1) {
                        $_SESSION['role'] = $role;
                        $_SESSION['username'] = $kq[0]['user'];
                        $_SESSION['iduser'] = $kq[0]['id'];
                        header('location: admin/index.php');
                    } else {
                        $_SESSION['role'] = $role;
                        $_SESSION['username'] = $kq[0]['user'];
                        $_SESSION['iduser'] = $kq[0]['id'];
                        header('location: index.php');
                    }
                }

            } else {
                include "./view/login-page.php";
            }

            break;
        case 'signuppage':
            if (isset($_POST['signupbtn']) && $_POST['signupbtn']) {
                $fullname = $_POST['fullname'];
                $email = $_POST['emailaddress'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                // connectdb();
                insertuser($fullname, $username, $email, $password);
                include "./view/signup-success.php";
            } else {
                // echo "<h1>Hello</h1>";
                include "./view/signup-page.php";
            }

            break;
        case 'logout':
            unset($_SESSION['role']);
            unset($_SESSION['username']);
            unset($_SESSION['iduser']);
            header('location: index.php');
            break;
        default:
            include "./view/slider.php";
            include 'view/home.php';
            break;
    }
} else {
    include "./view/slider.php";
    include './view/home.php';
}

include "./view/footer.php";