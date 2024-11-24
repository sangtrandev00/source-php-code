<?php

session_start();
ob_start();

// var_dump($_SESSION['giohang']);
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];

}

// include "./model/connectdb.php";
// include "./model/user.php";
// unset($_SESSION);

include "./model/connectdb.php";
include "./model/user.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/donhang.php";
include "./view/header.php";
include "./sendmail.php";

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
        case 'profilepage':
            include "./view/profile-page.php";
            if (isset($_GET['set'])) {

            }
            break;
        case 'contactpage':
            include "./view/contact-page.php";
            break;
        case 'detailpage':
            include "./view/detail-page.php";
            break;
        case 'detailorderpage':
            include "./view/detail-order-page.php";
            break;
        case 'shoppingcartpage':
            include "./view/shopping-cart-page.php";
            break;
        case 'checkoutpage':
            include "./view/checkout-page.php";
            break;
        case 'addcart':

            if (isset($_POST['addtocart']) && $_POST['addtocart']) {

                echo "HELLO WORLD";

                $id = $_POST['id'];
                $productitem = get_one_product($id)[0];

                $iddm = $_POST['iddm'];
                $tensp = $productitem['tensp'];
                // echo $tensp;

                $img = $_POST['img'];
                $gia = $_POST['giasp'];
                if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }
                $flag = 0;
                // Kiểm tra sản phẩm có tồn tại trong giỏ hàng hay không ?
                // Nếu có chỉ cập nhất lại số lượng

                // Ngược lại add mới sp vào giỏ hàng

                // Khởi tạo một mảng con trước khi đưa vào giỏ
                $i = 0;
                foreach ($_SESSION['giohang'] as $itemsp) {
                    # code...
                    // var_dump($itemsp);
                    if ($itemsp[0] === $id) {
                        $slnew = $sl + $itemsp[4];
                        // echo "So LUONG MOI: " . $slnew;
                        $_SESSION['giohang'][$i][4] = $slnew;
                        $flag = 1;
                        break;
                    }
                    $i++;
                }

                if ($flag == 0) {
                    $itemsp = array($id, $tensp, $img, $gia, $sl);
                    // array_push($_SESSION['giohang'], $itemsp);
                    // $_SESSION['giohang'][] = $itemsp;
                    $_SESSION['giohang'][] = $itemsp;
                }

                // header('location: index.php?act=viewcart'); // Tại sao lại có dòng này ?

            } else {
                echo "NOTTHING ELSE HERE";
            }

            // include 'view/viewcart.php';
            break;
        case 'viewcart':
            include 'view/viewcart.php';
            break;
        case 'updatecart':
            if (isset($_POST['updatecartbtn']) && $_POST['updatecartbtn']) {
                // echo "HELLO <br>";
                // var_dump($_POST['qtyhidden']);
                $qtylist = $_POST['qtyhidden'];
                $i = 0;
                foreach ($_SESSION["giohang"] as $rowitem) {
                    // if ($val["product_code"] == $_POST['code']) {
                    //     $val["product_qty"] += 1;
                    // }
                    // echo $qtylist[$i];
                    // $rowitem[4] = $qtylist[$i];
                    // $_SESSION["giohang"][$i] = $qtylist[$i];
                    $_SESSION['giohang'][$i][4] = $qtylist[$i];
                    // echo $_SESSION['giohang'][$i][4] . "<br>";
                    $i++;
                }
            } else {
                "HELLO world";
            }
            include "./view/shopping-cart-page.php";

            break;
        case 'deletecart':
            if (isset($_SESSION['giohang'])) {
                // template này có thể phải nhớ !!!
                if (isset($_GET['idcart'])) {
                    array_splice($_SESSION['giohang'], $_GET['idcart'], 1);
                } else {
                    unset($_SESSION['giohang']);
                }

                if (count($_SESSION['giohang']) > 0) {
                    header('location: ./index.php?act=shoppingcartpage');
                } else {
                    header('location: ./index.php');
                }
            }
            // include 'view/shoppingcartpage.php';
            break;
        case 'thanhtoan':
            // Khi nút thanh toán được tồn tại và nó được click !!!
            if (isset($_POST['checkoutbtn']) && $_POST['checkoutbtn']) {
                // 1. Lấy dữ liệu
                $iduser = $_SESSION['iduser'];
                $tongdonhang = $_POST['tongdonhang'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $hoten = $firstname . $lastname;
                $diachi = $_POST['address'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['phonenumber'];
                $ghichu = $_POST['ghichu'];
                $pttt = "Thanh toán khi nhận hàng"; // Array[0,1,2,3] (hiện tại đang mặc định)
                // Sinh ra mã đơn hàng
                $madonhang = "intelsport" . rand(2000, 9999999);

                // date_default_timezone_set('Indochina Time');

                $time_order = date('m/d/Y h:i:s a', time());
                // $time_order = date("Y-m-d h:i:s");
                // 2. tạo đơn hàng và trả về một id đơn hàng
                $iddh = taodonhang($madonhang, $tongdonhang, $pttt, $hoten, $diachi, $email, $sodienthoai, $ghichu, $iduser, $time_order);
                $_SESSION['iddh'] = $iddh;
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    foreach ($_SESSION['giohang'] as $item) {
                        # code...
                        addtocart($iddh, $item[0], $item[1], $item[2], $item[3], $item[4]);
                    }
                    // Xóa đơn hàng sau khi add to cart ( database )
                    unset($_SESSION['giohang']);
                    unset($_SESSION['iddh']);
                }
            }
            include "view/detail-order-page.php";
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
        case 'resetpassword':
            if (isset($_POST['resetbtn']) && $_POST['resetbtn']) {

                $username = $_POST['username'];
                $password = $_POST['password'];

                // Đối chiếu password

                $iduser = findIdbyUser($username)[0]['id'];
                updatepass($iduser, $password);
                header('location: index.php?act=loginpage');
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

                // Send email to success account

                sendmail($email);
            } else {
                // echo "<h1>Hello</h1>";
                include "./view/signup-page.php";
            }

            break;
        case 'forgotpasspage':
            include "./view/forgotpass-page.php";
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