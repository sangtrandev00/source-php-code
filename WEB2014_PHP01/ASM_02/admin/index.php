<?php
session_start();
ob_start();

include "./model/connectdb.php";
include "./model/category.php";
include "./model/product.php";
include "./model/user.php";
include "./model/order.php";

if (isset($_SESSION['username']))

// var_dump($_SESSION);
{
    include "./view/common/header.php";
    include "./view/common/sidebar.php";
    include "./view/common/topbar.php";
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'quanlydanhmuc':

                include "./view/pages/category-page.php";
                break;
            case 'quanlysanpham':

                $product_list = get_all_products(0, 2, 0, 0);
                // var_dump($product_list);

                include "./view/pages/product-list-page.php";
                break;
            case 'quanlyhinhanh':

                include "./view/pages/image-list-page.php";
                break;
            case 'quanlydonhang':
                $order_list = get_all_orders();
                // var_dump($order_list);
                include "./view/pages/order-list-page.php";
                break;
            case 'orderdetail':
                if (isset($_GET['iddh'])) {
                    $iddh = $_GET['iddh'];
                    $cart_list = getshowcart($iddh);
                    include "./view/pages/orderdetail-page.php";
                }

                break;
            case 'userorderdetail':
                if (isset($_GET['iduser'])) {
                    $iduser = $_GET['iduser'];
                    $cart_list = getshowcartbyiduser($iduser);
                    // var_dump($cart_list);
                    include "./view/pages/userorderdetail-page.php";
                }

                break;
            case 'quanlyadmin':
                $admin_list = get_all_user(1);
                // var_dump($admin_list);
                include "./view/pages/admin-list-page.php";

                break;

            case 'quanlyuser':
                $user_list = get_all_user(0);
                include "./view/pages/user-list-page.php";
                break;
            case 'addimage':

                include "./view/pages/addimage-page.php";
                break;
            case 'edituser':

                include "./view/pages/edituser-page.php";

                break;
            case 'editadmin':

                include "./view/pages/editadmin-page.php";

                break;
            case 'changepass':
                // $user = getuserinfobyid($iduser);

                include "./view/pages/change-pass-page.php";

                break;
            case 'changepassadmin':
                // $user = getuserinfobyid($iduser);

                include "./view/pages/change-pass-admin-page.php";

                break;
            case 'updatepass':

                if (isset($_POST['changepassbtn']) && $_POST['changepassbtn']) {

                    $iduser = $_POST['iduser'];
                    $currentpass = $_POST['currentpass'];
                    $newpassword = $_POST['newpassword'];
                    $reenterpass = $_POST['reenterpass'];
                    // $user = getuserinfobyid($iduser);
                    // var_dump($user);
                    $username = $_POST['username'];
                    $isRightPass = checkuser($username, $currentpass);

                    if ($isRightPass == -1) {
                        echo "YOU SHOULD ENTER RIGHT PASSWORD";
                    } else {
                        if ($newpassword == $reenterpass) {
                            updatepass($iduser, $reenterpass);
                        } else {

                            echo "YOUR RE ENTER PASSWORD IS NOT CORRECT";

                        }
                    }
                }
                // $user = getuserinfobyid($iduser);
                include "./view/pages/change-pass-page.php";

                break;
            case 'updateadmin':
                if (isset($_POST['edituserbtn']) && $_POST['edituserbtn']) {
                    $iduser = $_POST['iduser'];
                    $name = $_POST['fullname'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    // $imageurl = $_FILES['imageurl'];
                    $target_dir = "assets/images/";
                    $target_file = $target_dir . basename($_FILES["imageurl"]["name"]);
                    // echo $target_file;
                    move_uploaded_file($_FILES["imageurl"]["tmp_name"], "../" . $target_file);
                    // echo $iduser;
                    updateuser($iduser, $target_file, $name, $email, $phone, $address);
                    echo 'update successfully';
                }
                include "./view/pages/editadmin-page.php";

                break;
            case 'updateuser':

                if (isset($_POST['edituserbtn']) && $_POST['edituserbtn']) {
                    $iduser = $_POST['iduser'];
                    $name = $_POST['fullname'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    // $imageurl = $_FILES['imageurl'];
                    $target_dir = "assets/images/";
                    $target_file = $target_dir . basename($_FILES["imageurl"]["name"]);
                    // echo $target_file;
                    move_uploaded_file($_FILES["imageurl"]["tmp_name"], "../" . $target_file);
                    // echo $iduser;
                    updateuser($iduser, $target_file, $name, $email, $phone, $address);
                    echo 'update successfully';
                }
                include "./view/pages/edituser-page.php";
                break;
            case 'adduser':

                if (isset($_POST['adduserbtn']) && $_POST['adduserbtn']) {

                    $name = $_POST['fullname'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // $imageurl = $_FILES['imageurl'];

                    $target_dir = "assets/images/";
                    $target_file = $target_dir . basename($_FILES["imageurl"]["name"]);
                    // echo $target_file;
                    move_uploaded_file($_FILES["imageurl"]["tmp_name"], "../" . $target_file);
                    // echo $iduser;
                    insertnewuser($target_file, $name, $email, $phone, $address, $username, $password);
                    // echo 'insert user successfully';
                }
                include "./view/pages/adduser-page.php";
                break;
            case 'addadmin':

                if (isset($_POST['addadminbtn']) && $_POST['addadminbtn']) {

                    $name = $_POST['fullname'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // $imageurl = $_FILES['imageurl'];

                    $target_dir = "assets/images/";
                    $target_file = $target_dir . basename($_FILES["imageurl"]["name"]);
                    // echo $target_file;
                    move_uploaded_file($_FILES["imageurl"]["tmp_name"], "../" . $target_file);
                    // echo $iduser;
                    insertnewadmin($target_file, $name, $email, $phone, $address, $username, $password);
                    // echo 'insert admin successfully';
                }
                include "./view/pages/addadmin-page.php";
                break;
            case 'deleteuser':
                $user_list = get_all_user(0);

                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    delete_user($_GET['id']);
                    // header('refresh:0');
                    header('location: index.php?act=quanlyuser');
                }

                include "./view/pages/user-list-page.php";
                // header('location: index.php?act=edituser');

                break;
            case 'deleteadmin':
                $admin_list = get_all_user(1);

                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    delete_user($_GET['id']);
                    // header('refresh:0');
                    header('location: index.php?act=quanlyadmin');
                }

                include "./view/pages/admin-list-page.php";
                // header('location: index.php?act=edituser');

                break;
            case 'addproductpage':

                include "./view/pages/addproduct-page.php";
                // header('location: index.php?act=quanlyuser');
                break;
            // case 'addproduct':

            //     include "./view/pages/addproduct-page.php";

            //     break;
            case 'editproduct':

                include "./view/pages/updateproduct-page.php";

                break;
            case 'deleteproduct':

                if (isset($_GET['id'])) {
                    delete_product($_GET['id']);
                }

                include "./view/pages/product-list-page.php";

                break;
            case 'addcate':

                if (isset($_POST['addcatebtn']) && $_POST['addcatebtn']) {
                    if ($_POST['catename'] != "" && $_POST['catetitle'] != "")

                    // $catename = $_POST['']
                    {
                        $catename = $_POST['catename'];
                        $catetitle = $_POST['catetitle'];
                        add_cate($catename, $catetitle);
                    } else {
                        $error_message = "Làm ơn điền đầy đủ trường thông tin";
                    }

                } else {
                    $error_message = "";
                }
                include "./view/pages/category-page.php";

                break;
            case 'editcate':

                if (isset($_GET['id'])) {
                    $cateid = $_GET['id'];
                    include "./view/pages/editcate-page.php";
                }

                break;
            case 'updatedanhmuc':

                if (isset($_POST['updatebtn']) && $_POST['updatebtn']) {
                    $cateid = $_POST['cateid'];
                    $catename = $_POST['catename'];
                    $catetitle = $_POST['catetitle'];
                    update_cate($cateid, $catename, $catetitle);
                    include "./view/pages/category-page.php";
                }

                break;
            case 'deletecate':

                if (isset($_GET['id'])) {
                    $cateid = $_GET['id'];
                    delete_cate($cateid);
                }
                include "./view/pages/category-page.php";
                break;

            case 'logout':
                unset($_SESSION['role']);
                unset($_SESSION['username']);
                unset($_SESSION['iduser']);
                header('location: ./view/pages/login.php');
                break;
            default:
                include "./view/common/pagecontent.php";
                break;
        }
    } else {

        include "./view/common/pagecontent.php";

    }
    include "./view/common/footer.php";
} else {
    echo "YOU NEED TO LOGIN YOUR ADMIN ADMINISTRATOR";
}