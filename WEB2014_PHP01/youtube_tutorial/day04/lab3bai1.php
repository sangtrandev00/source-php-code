<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
        <input type="text" name="soa" id=""> <br>
        <select name="pheptinh" id="">
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="sob" id=""> <br>
        <input type="submit" name="tinhtoan" value="Tính toán">
    </form>
    <?php
        include "./myfunc.php";
        if ( isset($_POST['tinhtoan'])&&($_POST['tinhtoan']) ) {
            // echo 'ok';
            // 1. Xác định input ( dữ liệu đầu vào )
            $soa = $_POST['soa'];
            $sob = $_POST['sob'];
            $pheptinh = $_POST['pheptinh'];
            // 2. Xử lý dữ liệu nhận
            $kq = calcTwoNumber($soa, $sob, $pheptinh);
            // 3. Hiển thị
            echo ' <div class="kq">
                        <p>Bạn đã nhập phép toán: '.$soa.' '.$pheptinh.' '.$sob.' = '.$kq.'</p>
                    </div>';
        } 
    ?>


</body>

</html>