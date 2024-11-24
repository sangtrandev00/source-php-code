<?php

include "./view/header.php";
include "./model/connectdb.php";
include "./model/getuser.php";
include "./model/insertdb.php";

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'register':
            # code...
            if (isset($_POST['registerbtn']) && $_POST['registerbtn']) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];

                if ($password !== $repassword) {
                    $error_message = "Your re password is not the same with your password";
                    // include "./view/register.php";
                    include "./view/register.php";
                } else {
                    $is_registered = insertData($username, $email, $password);
                    $success_message = "You have registered successfully";
                    if ($is_registered) {
                        echo "You have registered successfully";
                        include "./view/home.php";
                    } else {
                        echo "You have registered unsuccessfully";
                    }

                }
            } else {
                include "./view/register.php";
            }
            break;
        case 'login':
            # code...

            if (isset($_POST['loginbtn']) && $_POST['loginbtn']) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $is_logined = is_logined($username, $password);
                if ($is_logined) {
                    include "./view/login_success.php";
                } else {
                    echo "you login unsuccessfully";
                    include "./view/login.php";
                }
            } else {
                include "./view/login.php";
            }

            break;

        default:
            # code...
            break;
    }
} else {
    include "./view/home.php";

}

include "./view/footer.php";