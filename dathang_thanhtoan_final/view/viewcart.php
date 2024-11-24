<?php
var_dump($_SESSION['giohang']);
?>

<div class="p-3">
    <h3 class="title">View Cart</h3>
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
$ds_sp = $_SESSION['giohang'];
$i = 0;
$sum = 0;
foreach ($ds_sp as $row) {
    # code...
    $sum += $row[3] * $row[4];
    echo '
                                <tr class="">
                                    <td scope="row">' . ($i + 1) . '</td>
                                    <td>' . $row[1] . '</td>
                                    <td>' . $row[2] . '</td>
                                    <td>' . $row[3] . '</td>
                                    <td>' . $row[4] . '</td>
                                    <td>' . $row[4] * $row[3] . '</td>
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
            <form action="./index.php?act=dathang" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Tên người nhận</label>
                    <input type="text" class="form-control" name="tennguoinhan" id="tennguoinhan"
                        aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Địa chỉ người nhận</label>
                    <input type="text" class="form-control" name="diachi" id="diachi" aria-describedby="helpId"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email người nhận</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Điện thoại</label>
                    <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phương thức thanh toán</label>
                    <input type="text" class="form-control" name="pttt" id="pttt" aria-describedby="helpId"
                        placeholder="">
                </div>
                <input type="hidden" name="tongdonhang" value="<?php echo $sum ?> " />
                <input type="submit" name="dathang" value="Đặt hàng">
            </form>
        </div>
    </div>
</div>