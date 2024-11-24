<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p span {
        font-weight: bold;
    }
    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="input_1" id="" placeholder="nhap "> <br>
        <input type="text" name="input_2" id="" placeholder="nhap "> <br>
        <input type="text" name="input_3" id="" placeholder="nhap "> <br>
        <input type="text" name="input_4" id="" placeholder="nhap "> <br>
        <input type="text" name="input_5" id="" placeholder="nhap "> <br>
        <input type="text" name="input_6" id="" placeholder="nhap "> <br>
        <input type="text" name="input_7" id="" placeholder="nhap "> <br>
        <input type="text" name="input_8" id="" placeholder="nhap "> <br>
        <input type="text" name="input_9" id="" placeholder="nhap "> <br>
        <input type="text" name="input_10" id="" placeholder="nhap "> <br>
        <input type="submit" value="Nhập" name="tinhtoan">
    </form>
    <!-- <div>
        <p>Danh sách 10 phần tử đã nhập: <span>1234</span> </p>
        <p>Danh sách mảng các phần tử lẻ: <span>1,2,3,4,5</span> đã nhập và tổng các phần tử lẻ: <span>134</span> </p>
        <p>Danh sách mảng các phần tử chẵn: <span>1,2,3,4,5,6</span> đã nhập và tổng các phần tử chẵn:
            <span>23432</span>
        </p>
    </div> -->
    <?php
include "lab04bai1.php";
if ((isset($_POST['tinhtoan'])) && ($_POST['tinhtoan'])) {
    // echo "oke";
    // 1. Lấy dữ liệu từ form sau khi submit

    $input_1 = $_POST['input_1'];
    $input_2 = $_POST['input_2'];
    $input_3 = $_POST['input_3'];
    $input_4 = $_POST['input_4'];
    $input_5 = $_POST['input_5'];
    $input_6 = $_POST['input_6'];
    $input_7 = $_POST['input_7'];
    $input_8 = $_POST['input_8'];
    $input_9 = $_POST['input_9'];
    $input_10 = $_POST['input_10'];
    // 2. Cho lưu vào mảng ???
    $input_array = array($input_1, $input_2, $input_3, $input_4, $input_5, $input_6, $input_7, $input_8, $input_9, $input_10);
    // 3. Xử lý dữ liệu nhận
    $numberList = implode(', ', $input_array);
    // $numberEvenList = implode(',',$input_array);
    $numberEvenList = array();
    $numberOddList = array();
    foreach ($input_array as $number) {
        if ($number % 2 == 0) {
            $numberEvenList[] = $number;
        } else {
            $numberOddList[] = $number;
        }
    }
    // Sum Odd
    $sum = sumArray($input_array);
    $sumOdds = sumOddArray($numberOddList);
    $sumEvens = sumEvenArray($numberEvenList);

    $numberEvensString = implode(', ', $numberEvenList);
    $numberOddsString = implode(', ', $numberOddList);
    $result = '
                <div>
                    <p>Danh sách 10 phần tử đã nhập: <span>' . $numberList . '</span> đã nhập và tổng là: <span>' . $sum . '</span> </p>
                    <p>Danh sách mảng các phần tử lẻ: <span>' . $numberOddsString . '</span> đã nhập và tổng các phần tử lẻ: <span>' . $sumOdds . '</span> </p>
                    <p>Danh sách mảng các phần tử chẵn: <span>' . $numberEvensString . '</span> đã nhập và tổng các phần tử chẵn:
                        <span>' . $sumEvens . '</span>
                    </p>
                </div>
            ';
    // 4. Hiển thị kết quả ra màn hình
    echo $result;
}
?>
</body>

</html>