<?php
    session_start();
    // echo '
    //     <h2>Bạn đã đăng nhập thành công với: </h2>
    //     <h3>Username: user</h3>
    //     <h3>Password: pass</h3>
    // ';
    if(isset($_SESSION['objuser'])) {
        
        echo 'Bạn đã đăng nhập với: ';
        echo '<br> - Tên đăng nhập: '.$_SESSION['objuser'][0];
        echo '<br> - Mật khẩu: : '.$_SESSION['objuser'][1];
        echo '<br> - Bạn muốn thoát khỏi đây không ? <a href="del_session.php">Click vào đây đi</a>';
    } else {
        echo '<br> - Bạn đã thoát khỏi hệ thống! Vui lòng <a href="dangnhap.php">đăng nhập</a> lại!!!';
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logined</title>

</head>

<body>

</body>

</html>