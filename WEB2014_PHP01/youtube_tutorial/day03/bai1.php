<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td,
    th {
        padding: 0.5rem;
    }
    </style>
</head>

<body>
    <h2>Nhập thông tin sinh viên - xuất bảng điểm - câu lệnh điều kiện if else</h2>
    <!-- Form -->
    <form action="day03bai1.php" method="POST">
        <input type="text" name="mssv" id="" placeholder="MSSV..."> <br>
        <input type="text" name="ten" id="" placeholder="Name..."> <br>
        <input type="text" name="mon1" id="" placeholder="Mon 1..."> <br>
        <input type="text" name="mon2" id="" placeholder="Mon 2 ..."> <br>
        <input type="submit" name="showinfo" onclick="return validateForm()" id="" value="Submit">
        <input type="reset" name="resetinfo" id="" value="Reset">
    </form>
    <!-- <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>MSSV</th>
            <th>Tên SV</th>
            <th>Môn 1</th>
            <th>Môn 2</th>
            <th>ĐTB</th>
            <th>Xếp loại</th>
            <th>Thưởng</th>
        </tr>
        <tr>
            <td>123434</td>
            <td>Tran Nhat Sang</td>
            <td>10</td>
            <td>9.5</td>
            <td>9.75</td>
            <td>Xuất sắc</td>
            <td>Cúp</td>
        </tr>
    </table> -->
</body>

</html>