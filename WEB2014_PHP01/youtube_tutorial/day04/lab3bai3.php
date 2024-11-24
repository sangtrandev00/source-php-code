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
        <input type="text" name="name" id="" placeholder="Please enter your name ..."> <br>
        <input type="date" name="date" id=""> <br>
        <input type="submit" name="submit" value="Nhập dữ liệu">
    </form>
    <div>
        <p>Số ký tự trong chuỗi tên: 10 ký tự</p>
        <p>Tên cung hoàng đạo</p>
    </div>

    <?php
        include "./myfunc.php";
        if ( isset($_POST['submit'])&&($_POST['submit']) ) {
            // echo 'ok';
            // // 1. Xác định input ( dữ liệu đầu vào )
            $name = $_POST['name'];
            $date = $_POST['date'];
            // 2. Xử lý dữ liệu nhận và hiển thị ra màn hình !!!
            // echo $name, $date;
            echo "Ban Thuoc cung: ".calcZodiac($date);
        }
    ?>

</body>

</html>