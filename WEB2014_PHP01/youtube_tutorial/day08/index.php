<?php
session_start();
ob_start();
include "model/connectdb.php";
include "model/user.php";
// File: Controller --
include "view/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'chitiet':
            # code...
            include "view/chitiet.php";
            break;
        case 'dangnhap':
            # code...

            if (isset($_POST['btndangnhap']) && $_POST['btndangnhap']) {
                $username = $_POST['tendangnhap'];
                $password = $_POST['matkhau'];
                $kq = getuserinfo($username, $password);
                $role = $kq[0]['role'];
                if ($role == 1) {
                    $_SESSION['role'] = $role;
                    header('location: admin/index.php');
                } else {
                    $_SESSION['role'] = $role;
                    $_SESSION['username'] = $kq[0]['username'];
                    $_SESSION['iduser'] = $kq[0]['id'];
                    header('location: index.php');
                }
            }

            include "view/dangnhap.php";
            break;
        case 'dangky':
            # code...
            include "view/dangky.php";
            break;
        case 'thoat':
            # code...

            unset($_SESSION['role']);
            unset($_SESSION['username']);
            unset($_SESSION['iduser']);
            header('location: index.php');
            // include "view/thoat.php";
            break;
        default:
            # code...
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

// include "view/home.php";
include "view/footer.php";