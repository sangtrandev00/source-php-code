<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- ?php luôn nằm trong thẻ body -->
    <?php

    $name = "Trần Nhật Sang";
    $mssv = "PS20227";
    $email = "nhatsang0101@gmail.com23";
    $clss = "WEB18101";
    echo '
        <h2 class="title">Kết quả tìm kiếm</h2>
        <p>
            Tên: <span class="">'.$name.'</span>
        </p>
        <p>
            MSSV: <span>'.$mssv.'</span>
        </p>
        <p>
            Email: <span>'.$email.'</span>
        </p>
        <p>
            Lớp: <span>'.$clss.'</span>
        </p>
    '

?>
</body>