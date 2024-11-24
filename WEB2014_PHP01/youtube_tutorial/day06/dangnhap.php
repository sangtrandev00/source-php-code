<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logined </title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="user" id="" placeholder="username..."><br>
        <input type="password" name="pass" id="" placeholder="password..."><br>
        <input type="submit" name="dangnhap" value="Đăng nhập">
    </form>

    <?php

if ((isset($_POST['dangnhap']) && $_POST['dangnhap'])) {

    // echo "oke";
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Tạo mảng
    $objuser = array($user, $pass); // $user (0), $pass(1)
    echo var_dump($objuser);

    // So sánh với database
    // Lưu session
    $_SESSION['objuser'] = $objuser;
    // Chuyển trang
    header('location: logined.php');
    //
}
?>

</body>

</html>