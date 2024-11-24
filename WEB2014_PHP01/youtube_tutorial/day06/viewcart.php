<?php
    session_start();

    if(isset($_SESSION['cart'])) {
        // echo var_dump($_SESSION['cart']);

    // echo '<br>Đặt hàng tiếp tục. <a href="sanpham.php">Click vào đây</a>'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart UI HTML</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
    table tr:nth-child(1) {
        background-color: #ccc;
    }

    table {
        width: 100%;
    }

    tr {
        width: 100%;
    }

    td,
    th {
        padding: 1rem;
        border: 1px solid #ccc;
    }

    .boxcenter {
        width: 60rem;
        margin: 0 auto;
    }

    .product-img {
        width: 4rem;
        height: 4rem;
    }

    .product-img img {
        width: 100%;
        object-fit: contain;
    }
    </style>
</head>

<body>

    <div class="boxcenter">
        <h2>Đơn hàng của bạn</h2>
        <table style="border-collapse: collapse;">
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
            <?php
            $finalMoney = 0;
                echo $_SESSION['cart'];
            $i = 1;
                foreach ($_SESSION['cart'] as $sp) {
                    // echo "san pham: ".var_dump($sp)."\n";
                    $index = $i - 1;
                    $totalMoney = $sp[3] * $sp[4];
                    $finalMoney +=$totalMoney;
                    echo '<tr>
                            <td>'.$i.'</td>
                            <td class="product-img"> <img src='.$sp[1].'/></td>
                            <td>'.$sp[2].'</td>
                            <td>'.$sp[3].'</td>
                            <td>'.$sp[4].'</td>
                            <td>'.$totalMoney.'</td>
                            <td style="text-align: center"><a href="deletecart.php?id='.$index.'">Xóa</a></td>
                        </tr>
                    ';
                    $i++;
                }
            ?>
            <!-- <tr>
                <td>1</td>
                <td class="product-img">hinh</td>
                <td>tensp</td>
                <td>don gia</td>
                <td>sl</td>
                <td>thanh tien</td>
                <td style="text-align: center"><a href="deletecart.php">Xóa</a></td>
            </tr> -->
            <tr>
                <td colspan="5">Tổng đơn hàng</td>
                <td style="background-color: #ccc;"><?php echo $finalMoney; ?></td>
                <td></td>
            </tr>
        </table>
        <p>
            <a href="sanpham.php">Tiếp tục đặt hàng ?</a>
        </p>
        <p>
            <a href="deletecart.php">Xóa giỏ hàng ?</a>
        </p>
    </div>

</body>

</html>

<?php
 } else {
    echo '<br> - Bạn chưa đặt hàng. Bạn muốn <a href="sanpham.php">đặt hàng</a> không ?';
 }
?>