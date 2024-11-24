<form action="./index.php?act=register" class="form" id="form1" method="post">
    <h1>Register form</h1>
    <!-- lastName -->
    <div class="form-group">
        <label class="form-label" for="last-name">Tên đăng nhập: </label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
    </div>
    <!-- Password -->
    <div class="form-group">
        <label class="form-label" for="last-name">Mật khẩu: </label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
    </div>
    <!-- reenter password -->
    <div class="form-group">
        <label class="form-label" for="last-name">Nhập lại mật khẩu: </label>
        <input type="password" name="repassword" id="re-password" class="form-control" placeholder="ReEnter Password">
    </div>
    <!-- Email -->
    <div class="form-group">
        <label for="" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
    </div>
    <!-- button -->
    <input class="form-btn form-btn--accept" name="registerbtn" type="submit" value="Register">
    <!-- <button class="form-btn form-btn--accept" onclick="return kiem_tra()">Đăng ký</button> -->
    <!-- <p class="form-notify"><?php if (isset($error_message)) {echo $error_message;} else {echo $success_message;}?></p> -->
</form>