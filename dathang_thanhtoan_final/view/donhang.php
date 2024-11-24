<?php
var_dump($_SESSION['giohang']);
?>

<div class="p-3">
    <h3 class="title">Đặt hàng thành công voi ma don hang la: <?php echo $iddh ?></h3>
    <div class="row">
        <div class="col-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Truy xuat du lieu tu SESSION -->
                        <?php

$ds_sp = getshoworderdetail($iddh);
var_dump($ds_sp);
$i = 0;
$sum = 0;
foreach ($ds_sp as $row) {
    # code...
    $sum += $row['dongia'] * $row['soluong'];
    echo '
                                <tr class="">
                                    <td scope="row">' . ($i + 1) . '</td>
                                    <td>' . $row['tensp'] . '</td>
                                    <td>' . $row['img'] . '</td>
                                    <td>' . $row['dongia'] . '</td>
                                    <td>' . $row['soluong'] . '</td>
                                    <td>' . $row['dongia'] * $row['soluong'] . '</td>
                                </tr>
                            ';
    $i++;
}
?>

                    </tbody>
                    <tr>
                        <td>Tổng đơn hàng: </td>
                        <td><?php echo $sum ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-6">

            <?php
$orderinfo = getorderinfo($iddh);
?>

            <ul>
                <li>Mã đơn hàng: <?php echo $orderinfo['madonhang'] ?></li>
                <li>Tên người nhận: <?php echo $orderinfo['hoten'] ?></li>
                <li>Địa chỉ người nhận: <?php echo $orderinfo['diachi'] ?></li>
                <li>Email: <?php echo $orderinfo['email'] ?></li>
                <li>Điện thoại: <?php echo $orderinfo['dienthoai'] ?></li>
                <li>Phương thức thanh toán: <?php echo $orderinfo['pttt'] ?></li>
            </ul>
        </div>
    </div>
</div>