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

          <div class="row contact-main-info mt-5">
              <div class="col-md-6 contact-right-content">
                  <h3 class="tittle ">View Cart</h3>
                  <!-- left -->
                  <?php

?>
                  <br>
                  <a href="index.php">Tiếp tục mua hàng</a> | <a href="">Thanh Toán</a> | <a
                      href="index.php?act=delcart">Xóa giỏ
                      hàng</a>
              </div>
              <div class="col-md-6 contact-left-content">
                  <!-- right -->
                  <h3 class="tittle">THÔNG TIN ĐẶT HÀNG</h3>
                  <form action="index.php?act=thanhtoan" method="post">
                      <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                      <input type="text" name="hoten" id="" placeholder="Nhập họ tên ..."> <br>
                      <input type="text" name="diachi" id="" placeholder="Nhập địa chỉ ..."> <br>
                      <input type="text" name="email" id="" placeholder="Nhập email ..."> <br>
                      <input type="text" name="sodienthoai" id="" placeholder="Nhập số điện thoại ..."> <br>
                      <label for="">Phương thứcthanh toán</label>
                      <p>
                          <input type="radio" name="pttt" value="1" id="">Thanh toán khi nhận hàng
                      </p>
                      <p>
                          <input type="radio" name="pttt" value="2" id="">Thanh toán Chuyển khoản
                      </p>
                      <p>
                          <input type="radio" name="pttt" value="3" id="">Thanh toán ví MoMo
                      </p>
                      <p>
                          <input type="radio" name="pttt" value="4" id="">Thanh toán Online
                      </p>
                      <input type="submit" value="Thanh toán" name="thanhtoan">

                  </form>
              </div>

          </div>
      </div>
  </section>