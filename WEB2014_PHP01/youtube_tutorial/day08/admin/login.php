<?php
session_start();
ob_start();

include "../model/connectdb.php";
include "../model/user.php";

if ((isset($_POST['dangnhap'])) && (($_POST['dangnhap']))) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = checkuser($username, $password);
    $_SESSION['role'] = $role;
    if ($role == 1) {
        header('location: index.php');
    } else {

        $text_error = "username hoặc password không tồn tại";
        // header('location: login.php');

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="view/styles.css">
</head>

<body>
    <section class="main">
        <!-- CRUD here !!! -->
        <h2>LOGIN</h2>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="username" id="" placeholder="Username"> <br>
            <input type="text" name="password" id="" placeholder="Password"> <br>
            <input type="submit" name="dangnhap" value="Đăng nhập"> <br>
            <?php
if (isset($text_error) && ($text_error != "")) {
    echo "<font color='red'>" . $text_error . "</font>";
}
?>
        </form>
        <br>
        <!-- <table>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Ưu tiên</th>
                <th>Hiển thị</th>
                <th>Hành động</th>
            </tr> -->
</body>

</html>