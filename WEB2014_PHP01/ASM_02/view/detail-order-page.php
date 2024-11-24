<?php
if (isset($iddh)) {

    $cart_list = getshowcart($iddh);
    ?>

<div class="grid wide">
    <div class="detail-order">
        <div class="detail-order__table-wrap">
            <h2 class="detail-order__table-title">Chi tiết đơn hàng</h2>
            <table class="table detail-order__table">
                <thead>
                    <tr>
                        <th class="table-data-left" scope="col">Sản phẩm</th>
                        <th class="table-data-right" scope="col">Tổng</th>
                        <!-- <th scope="col">Last</th>
                                <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
$sum_all = 0;
    foreach ($cart_list as $cart_item) {
        # code...
        $sum_item = $cart_item['soluong'] * $cart_item['dongia'];
        $sum_all += $sum_item;
        echo '  <tr>
    <td class="table-data-left">' . $cart_item['tensp'] . ' × ' . $cart_item['soluong'] . '</td>
    <td class="table-data-right"> <strong>$' . $sum_item . ' </strong></td>
</tr>';
    }
    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th class="table-data-left" scope="row">Tổng số phụ:</th>
                        <td class="table-data-right" colspan="2">$<?php echo $sum_all ?></td>
                    </tr>
                    <tr>
                        <th class="table-data-left" scope="row">Giao nhận hàng:</th>
                        <td class="table-data-right" colspan="2">Phí giao hàng: $5</td>
                    </tr>
                    <tr>
                        <th class="table-data-left" scope="row">Phương thức thanh toán:</th>
                        <td class="table-data-right" colspan="2">Chuyển khoản ngân hàng</td>
                    </tr>
                    <tr>
                        <th class="table-data-left" scope="row">Lưu ý:</th>
                        <td class="table-data-right" colspan="2"><?php echo $ghichu ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="detail-order__summary">
            <h3 class="summary__thankyou">Cảm ơn bạn. Đơn hàng đã được nhận</h3>
            <ul class="summary__list">
                <li class="summary__item">Mã đơn hàng: <strong><?php echo $madonhang ?></strong> </li>
                <li class="summary__item">Thời gian đặt: <strong><?php echo $time_order ?></strong> </li>
                <li class="summary__item">Tổng cộng: <strong>$<?php echo $tongdonhang ?></strong> </li>
                <li class="summary__item">Phương thức thanh toán: <strong>Chuyển khoản ngân hàng</strong></li>
            </ul>
        </div>

    </div>
</div>
<?php
} else {
    echo '<div class="text-center mt-4" style="font-size: 2rem;">KHÔNG CÓ ĐƠN HÀNG NÀO TRONG GIỎ HÀNG ĐỂ THANH TOÁN</div>';
}
?>