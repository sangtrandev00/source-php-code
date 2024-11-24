<?php

session_start();
ob_start();
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
        case 'deletemenu':
            # code...
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deletemenu($id);
                // header("location: ")
                $kq = getall_menu();
                include "view/danhmuc.php";
            }

            // include "view/sanpham.php";
            break;
        case 'delete_sanpham':
            # code...
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_sanpham($id);
                // Load ds danh muc
                $dsdm = getall_menu();

                // load ds san pham
                $dssp = getall_sanpham();
                # code...
                include "view/sanpham.php";
            }

            // include "view/sanpham.php";
            break;
        case 'updatemenuform':
            # Lấy 1 record đúng với id truyền vào ( 1 row phải không nhỉ ?)

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $kqone = get_one_menu($id);
                $kq = getall_menu();
                include "view/updatemenuform.php";
            }

            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $tendanhmuc = $_POST['tendanhmuc'];
                updatemenu($id, $tendanhmuc);
                // Cần 1 danh sách danh mục
                $kq = getall_menu();
                include "view/danhmuc.php";
            }

            break;
        // case 'sanpham_update':

        //     # Lấy 1 record đúng với id truyền vào ( 1 row phải không nhỉ ?)

        //     if (isset($_GET['id'])) {
        //         $id = $_GET['id'];
        //         $kqone = get_one_menu($id);
        //         $kq = getall_menu();
        //         include "view/updatemenuform.php";
        //     }

        //     if (isset($_POST['id'])) {
        //         $id = $_POST['id'];
        //         $tendanhmuc = $_POST['tendanhmuc'];
        //         updatemenu($id, $tendanhmuc);
        //         // Cần 1 danh sách danh mục
        //         $kq = getall_menu();
        //         include "view/danhmuc.php";
        //     }

        //     break;
        case 'sanpham':
            // Load ds danh muc
            $dsdm = getall_menu();

            // load ds san pham
            $dssp = getall_sanpham();
            # code...
            include "view/sanpham.php";
            break;
        case 'update_sanphamform':

            // Load ds danh muc
            $dsdm = getall_menu();

            // san pham chi tiet theo getid
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $spct = get_one_sp($_GET['id']);
            }

            // load ds san pham
            $dssp = getall_sanpham();
            # code...
            include "view/updatesanphamform.php";
            break;
        case 'sanpham_update':

            // Load ds danh muc
            $dsdm = getall_menu();
            // Cập nhật sản phẩm
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $iddanhmuc = $_POST['iddanhmuc'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $id = $_POST['id'];
                if ($_FILES["hinhanh"]["name"] != "") {
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
                        // insert_sanpham($iddanhmuc, $tensp, $gia, $hinhanh);
                        // Tại sao không bỏ  update_sanpham($iddanhmuc, $tensp, $gia, $hinhanh,$iddanhmuc); ở đây ??

                    }
                } else {
                    $hinhanh = "";
                }
                update_sanpham($id, $tensp, $gia, $hinhanh, $iddanhmuc);
                echo "update successfully!";
                // update_sanpham($iddanhmuc, $tensp, $gia, $hinhanh, $iddanhmuc);
            } else {
                echo "no submit capnhat";
            }

            // load ds san pham
            $dssp = getall_sanpham();
            # code...
            include "view/sanpham.php";
            break;
        case 'sanpham_add':

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

            // Load ds danh muc
            $dsdm = getall_menu();

            // load ds san pham
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
        default:
            # code...
            break;
    }

} else {
    include "view/home.php";
}

include "view/footer.php";