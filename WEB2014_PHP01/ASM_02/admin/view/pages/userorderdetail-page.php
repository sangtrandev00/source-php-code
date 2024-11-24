<div class="p-2">

    <a href="./index.php?act=quanlydonhang">Trở về danh sách đơn hàng</a>

    <h3 class="title mt-5">Danh sách đơn hàng theo id user la: <?php echo $iduser ?> </h3>
    <table class="table table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">id cart</th>
                <th scope="col">idsanpham</th>
                <th scope="col">iddh</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá / 1sp</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($cart_list as $cart_item) {
    # code...
    $img_url = "." . $cart_item['hinhanh'];
    echo '

                    <tr>
                    <th scope="row">' . $cart_item['id'] . '</th>
                    <td>' . $cart_item['idsanpham'] . '</td>
                    <td>' . $cart_item['iddonhang'] . '</td>
                    <td> <img width=100 height=100 style="object-fit: cover;" src="' . $img_url . '"/></td>
                    <td>' . $cart_item['tensp'] . '</td>
                    <td>' . $cart_item['soluong'] . '</td>
                    <td>$' . $cart_item['dongia'] . '</td>
                </tr>
                    ';
}
?>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><a href="index.php?act=editproduct" class="btn-primary p-2">Sửa</a></td>
                <td><a href="index.php?act=deleteproduct" class="btn-danger p-2">Xóa</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr> -->
        </tbody>
    </table>
</div>