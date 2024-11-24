<?php

session_start();
ob_start();

if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {

// Lồng các thư viện và kết nối vào đây !!!
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";

// Demo thu
    connectdb();

    include "view/header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'danhmuc':
                # nhận yêu cầu và xử lý
                // hàm - Lấy danh sach danh mục - lấy từ database
                $kq = getall_menu();
                include "view/danhmuc.php";
                break;
            case 'sanpham':
                // Load ds danh muc
                $dsdm = getall_menu();

                // load ds san pham
                $dssp = getall_sanpham();
                # code...
                include "view/sanpham.php";
                break;

            case 'addmenu':
                # nhận yêu cầu và xử lý

                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendanhmuc = $_POST['tendanhmuc'];
                    addmenu($tendanhmuc);
                }

                // hàm - Lấy danh sach danh mục - lấy từ database
                $kq = getall_menu();
                include "view/danhmuc.php";
                break;
            case 'addsanpham':
                # nhận yêu cầu và xử lý
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddanhmuc = $_POST['iddanhmuc'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];

                    $target_dir = "../uploaded/";
                    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                    $hinhanh = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif") {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // if($_FILES['hinhanh']['name'] != "") {
                    //     $hinhanh = $_FILES['hinhanh']['name'];
                    // } else {
                    //     $hinhanh = "";
                    // }
                    if ($uploadOk == 1) {
                        move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
                        insert_sanpham($iddanhmuc, $tensp, $gia, $hinhanh);
                    }
                }

                // Load ds danh muc --> Để load vào select box
                $dsdm = getall_menu();

                // load ds san pham  --> Để load vào phần table
                $dssp = getall_sanpham();
                # code...
                include "view/sanpham.php";
                break;

            case 'taikhoan':
                # code...
                include "view/taikhoan.php";
                break;
            case 'donhang':
                # code...
                include "view/donhang.php";
                break;
            case 'thoat':
                # code...

                if (isset($_SESSION['role'])) {
                    unset($_SESSION['role']);
                }
                header('location: login.php');
                // include "view/thoat.php";
                break;
            default:
                # code...
                break;
        }

    } else {
        include "view/home.php";

    }

    include "view/footer.php";
} else {
    header('location: login.php');
}