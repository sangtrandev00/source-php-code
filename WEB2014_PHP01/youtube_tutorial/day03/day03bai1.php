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

<?php

    if ( (isset($_POST['showinfo']))&&($_POST['showinfo']) ) {
        # code...
        // echo "Hello";
        // Lấy dữ liệu về
        $mssv = $_POST['mssv'];
        $ten = $_POST['ten'];
        $mon1 = $_POST['mon1'];
        $mon2 = $_POST['mon2'];


        // Xử lý dữ liệu
        $xl = "";
        $dtb = ($mon1 + $mon2) / 2;
        if(($dtb > 9) & ($dtb <=10)) {
            $xl = "Xuất sắc";
        } elseif(($dtb >=8 )) {
            $xl = "Giỏi";
        } elseif(($dtb > 6.5)) {
            $xl = "Khá";
        } elseif(($dtb >5)) {
            $xl = "Trung bình";
        } elseif($dtb <5 && $dtb >= 0) {
            $xl = "Yếu";
        }

        // thưởng
        $prize = "";
        if(($dtb > 9) & ($dtb <=10)) {
            $prize = "Cúp + 500k";
        } elseif(($dtb >=8 )) {
            $prize = "Cúp";
        } elseif(($dtb > 6.5)) {
            $prize = "Giấy khen";
        } else {
            $prize = "Không";
        }
        
        $kq = '
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>MSSV</th>
                    <th>Tên SV</th>
                    <th>Môn 1</th>
                    <th>Môn 2</th>
                    <th>ĐTB</th>
                    <th>Xếp loại</th>
                    <th>Thưởng</th>
                </tr>';
            for ($i=0; $i < 10 ; $i++) { 
                # code...
                $kq.='
                <tr>
                    <td>'.$mssv.'</td>
                    <td>'.$ten.'</td>
                    <td>'.$mon1.'</td>
                    <td>'.$mon2.'</td>
                    <td>'.$dtb.'</td>
                    <td>'.$xl.'</td>
                    <td>'.$prize.'</td>
                </tr>';
            }
            // Thêm vào đuôi
                $kq.='
            </table>
        ';
        echo $kq;
    }

?>

</body>

</html>