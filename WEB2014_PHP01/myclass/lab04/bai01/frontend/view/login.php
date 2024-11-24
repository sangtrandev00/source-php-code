<form method="post" action="./index.php?act=login" class="form" id="form2">
    <h1>Login Form</h1>
    <!-- lastName -->
    <div class="form-group">
        <label class="form-label" for="last-name">Tên đăng nhập: </label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
    </div>
    <!-- Password -->
    <div class="form-group">
        <label class="form-label" for="last-name">Mật khẩu: </label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
    </div>
    <!-- button -->
    <input class="form-btn form-btn--accept" name="loginbtn" type="submit" value="Login">
    <!-- <button class="form-btn form-btn--accept" onclick="return kiem_tra()">Đăng ký</button> -->
    <p>Click here to <a href="" class="form-link">Register</a></p>
</form>