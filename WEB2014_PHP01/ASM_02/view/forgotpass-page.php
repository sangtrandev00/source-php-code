<?php
ob_start();

// if ((isset($_POST['loginbtn'])) && (($_POST['loginbtn']))) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $role = checkuser($username, $password);
//     // echo "result: " . var_dump($role);
//     $_SESSION['role'] = $role;
//     if ($role == 0) {
//         header('location: index.php');
//     } else if ($role == 1) {
//         header('location: admin/index.php');
//     } else {
//         $text_error = "username hoặc password không tồn tại";
//         // header('location: login.php');
//     }
// }

?>

<div class="login-page">
    <div class="login-page__wrap">
        <div class="login-page__left-section">
            <div class="login-page__left-img">
                <img src="./assets/images/login/output-onlinegiftools.gif" alt="" class="login-page__left-img-img">
            </div>
        </div>
        <div class="login-page__right-section">
            <div class="login-page__right-wrap">
                <div class="login-page__back-to-last-page"><i
                        class="previous-page-icon fa-solid fa-arrow-left-long"></i></div>
                <h3 class="login-page__title">RESET PASSWORD</h3>
                <p class="login-page__notify-info">Let's reset your password</p>
                <form class="login-page__form" action="./index.php?act=resetpassword" method="post">
                    <div class="form-group">
                        <label for="" class="form-label">Email Address/Username</label>
                        <input type="Text" name="username" id="" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <p class="login-page__form-remember"> <input class="login-page__remember-checkbox"
                                name="rememberinput" type="checkbox" name="" id="">
                            Remember Me</p>
                    </div>
                    <input class="login-page__btn" type="submit" name="resetbtn" value="Reset Password">
                    <?php
if (isset($text_error) && ($text_error != "")) {
    echo "<font color='red'style='font-size: 14px' >" . $text_error . "</font>";
}
?>
                </form>
                <div class="login-page__signup">
                    Don't you have an account ? <a href="./index.php?act=signuppage"
                        class="login-page__signup-link">Signup here</a>
                </div>
                <div class="login-page__forgot-pass">
                    <a href="./index.php?act=forgotpasspage" class="login-page__forgot-pass-link">Forgot Password ?</a>
                </div>
            </div>
        </div>
    </div>
</div>