<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        include "../model/connectdb.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        //connectdb();
        include "view/header.php";

        if(isset($_GET['act'])){
            switch ($_GET['act']) {
                case 'addsp':
                    //nhận yêu cầu và xử lý
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tensp=$_POST['tensp'];
    //lưu đường dẫn hình ảnh vào database
    //upload hình ảnh lên host
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

                        //themsp($tendm);
                    }
                    //lấy ds danh mục
                    $kq=getall_dm();
                    include "view/danhmuc.php";
                    break;
                case 'danhmuc':
                    //nhận yêu cầu và xử lý
                    //lấy ds danh mục
                    $kq=getall_dm();
                    include "view/danhmuc.php";
                    break;
                case 'adddm':
                    //nhận yêu cầu và xử lý
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tendm=$_POST['tendm'];
                        themdm($tendm);
                    }
                    //lấy ds danh mục
                    $kq=getall_dm();
                    include "view/danhmuc.php";
                    break;
                case 'deldm':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        deldm($id);
                    }
                    $kq=getall_dm();
                    include "view/danhmuc.php";
                    break;
                case 'updatedmform':
                    //LẤY 1 RECORD đúng với id truyền vào
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $kqone=getonedm($id);
                        //cần dsdm
                        $kq=getall_dm();
                        include "view/updatedmform.php";
                    }
                    if(isset($_POST['id'])){
                        $id=$_POST['id'];
                        $tendm=$_POST['tendm'];
                        updatedm($id,$tendm);
                        //cần dsdm
                        $kq=getall_dm();
                        include "view/danhmuc.php";
                    }
                    
                    break;
                case 'sanpham':
                    //dsdm để load vào select box
                    $dsdm=getall_dm();
                    //dssp để load table
                    $kq=getall_sp();
                    include "view/sanpham.php";
                    break;
                case 'taikhoan':
                    include "view/taikhoan.php";
                    break;
                case 'donhang':
                    include "view/donhang.php";
                    break;
                case 'thoat':
                    if(isset($_SESSION['role'])) unset($_SESSION['role']);
                    header('location: login.php');
                
                default:
                    include "view/home.php";
                    break;
            }
        }else{
            include "view/home.php";
        }

        include "view/footer.php";
}else{
    header('location: login.php');
}

?>