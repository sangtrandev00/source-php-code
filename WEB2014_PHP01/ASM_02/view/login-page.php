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
                <h3 class="login-page__title">Account Login</h3>
                <p class="login-page__notify-info">If you are already a member you can login with your email
                    address
                    and password.</p>
                <form class="login-page__form" action="./index.php?act=loginpage" method="post">
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
                    <input class="login-page__btn" type="submit" name="loginbtn" value="Login Account">
                    <?php
if (isset($text_error) && ($text_error != "")) {
    echo '<p class="error-message"  style="font-size: 1.4rem; color: red">' . $text_error . '</p>';
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

<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng nhập thất bại</h5>
                <button type="button" class="close close-error-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Username hoặc password không chính xác, mời nhập lại!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js">

</script>

<script>
// console.log("Hello world");
const errorElement = document.querySelector(".error-message");

// document.querySelector("form").addEventListener("submit", (event) => {
//     console.log(event.target)
//     event.target.preventDefault();
// })
const modalElement = document.querySelector(".modal");

if (errorElement) {
    console.log("Hello world");
    modalElement.classList.add("show");
    modalElement.style.display = "block";

}

const closeModal = document.querySelector(".close-error-modal");
if (closeModal) {
    closeModal.addEventListener("click", (event) => {
        modalElement.style.display = "none";
    })
}
</script>