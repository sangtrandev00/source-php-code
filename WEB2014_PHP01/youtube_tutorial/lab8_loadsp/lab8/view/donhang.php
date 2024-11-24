  <?php
// session_start();
// ob_start();
?>

  <!---->
  <ol class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">View cart</li>
  </ol>
  <!---->
  <section class="ab-info-main py-5">
      <div class="container py-3">
          <h3>ID đơn hàng: <?=$iddh?></h3>
          <div class="row contact-main-info mt-5">
              <div class="col-md-6 contact-right-content">
                  <h3 class="tittle ">View Cart</h3>
                  <!-- left -->
                  <?php
$getshowcart = getshowcart($iddh);

if (isset($_SESSION['iddh']) && $_SESSION['iddh'] > 0) {
// echo var_dump($_SESSION['giohang']);
    if (isset($getshowcart) && count($getshowcart) > 0) {
        // table title
        echo '
        <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
    ';
        $i = 0;
        $tong = 0;
        // echo print_r($getshowcart);
        foreach ($getshowcart as $item) {
            # code...
            // echo print_r($item);
            $thanhtien = $item['dongia'] * $item['soluong'];
            $tong += $thanhtien;
            echo '
            <tr>
                <td>' . ($i + 1) . '</td>
                <td>' . $item['tensp'] . '</td>
                <td> <img width=200 src="uploads/' . $item['img'] . '" /></td>
                <td>' . $item['dongia'] . '</td>
                <td>' . $item['soluong'] . '</td>
                <td>' . $thanhtien . '</td>
            </tr>'
            ;
            $i++;
        }
        echo "<td colspan=5></td><td>$$tong</td>";
        echo " </table>";
        // Table data
    }
} else {
    echo "GIỎ HÀNG RỖNG. <a href='index.php'>Tiếp tục đặt hàng</a>";
}

?>
              </div>
              <div class="col-md-6 contact-left-content">
                  <!-- right -->
                  <?php
if (isset($_SESSION['iddh']) && $_SESSION['iddh'] > 0) {
    $orderinfo = getorderinfo($_SESSION['iddh']);
    if (count($orderinfo) > 0) {

        ?>

                  <h3 class="tittle">Mã đơn hàng: <?=$orderinfo[0]['madonhang']?></h3>
                  <table class="dathang">
                      <tr>
                          <td><strong> Tên người nhận: </strong><?=$orderinfo[0]['hoten']?></td>
                      </tr>
                      <tr>
                          <td><strong> Địa chỉ người nhận: </strong> <?=$orderinfo[0]['diachi']?></td>
                      </tr>
                      <tr>
                          <td><strong> Email người nhận: </strong><?=$orderinfo[0]['hoten']?></td>
                      </tr>
                      <tr>
                          <td><strong> Điện thoại người nhận: </strong><?=$orderinfo[0]['dienthoai']?></td>
                      </tr>
                      <tr>
                          <td><strong> Phương thức thanh toán: </td></strong>
                          <?php
switch ($orderinfo[0]['pttt']) {
            case '1':
                # code...
                $txtmess = "Thanh toán khi nhận hàng";
                break;
            case '2':
                # code...
                $txtmess = "Thanh Toán chuyển khoản";
                break;
            case '3':
                # code...
                $txtmess = "Thanh toán ví momo";
                break;
            case '4':
                # code...
                $txtmess = "Thanh toán online";
                break;
            default:
                # code...
                $txtmess = "Quý khách chưa chọn phương thức thanh toán";
                break;
        }
        ?>
                      </tr>
                  </table>

                  <?php

    }
}
?>
              </div>

          </div>
      </div>
  </section>