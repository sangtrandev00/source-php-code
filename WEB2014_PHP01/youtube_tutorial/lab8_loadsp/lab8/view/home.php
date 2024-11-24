<div class="banner-info">
    <h3 class="mb-4">Thế giới giày nam</h3>
    <div class="ban-buttons">
        <a href="index.php?act=sanpham" class="btn">Sản phẩm</a>
    </div>
</div>
<!--/ab -->
<section class="about py-md-5 py-5">
    <div class="container-fluid">
        <div class="feature-grids row px-3">

            <!-- <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-truck" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">Miễn phí giao hàng</h3>
                            <p>Đối với tất cả các đơn đặt hàng trên $ 2000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row bottom-gd2-active">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">Hoàn trả</h3>
                            <p>30 ngày đổi trả</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-gift" aria-hidden="true"></span></div>

                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">Giả giá thành viên </h3>
                            <p>Đăng ký và tiết kiệm lên đến $ 29%</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-usd" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">Hỗ trộ</h3>
                            <p>Hỗ trợ 24/22</p>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</section>
<!-- //ab -->
<!--/ab -->
<section class="about py-5">
    <div class="container pb-lg-3">
        <h3 class="tittle text-center">Sản phẩm mới</h3>
        <div class="row">
            <?php

foreach ($sphome1 as $sp) {
    // $id = 1;
    echo '<div class="col-md-4 product-men">
                                <div class="product-shoe-info shoe text-center">
                                    <form action="index.php?act=addcart" method="post">
                                    <div class="men-thumb-item">
                                        <a href="index.php?act=sanphamct&id=' . $sp['id'] . '">
                                            <img src="./uploads/' . $sp['img'] . '" class="img-fluid" alt="">
                                        </a>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="index.php?act=sanphamct&id=' . $sp['id'] . '">' . $sp['tensp'] . ' </a>
                                        </h4>

                                        <div class="product_price">
                                            <div class="grid-price">
                                                <span class="money">$' . $sp['gia'] . '</span>
                                            </div>
                                        </div>
                                        <ul class="stars">
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                        </ul>
                                        <div>
                                            <input type="submit" value="Mua hàng" name="addtocart">
                                        </div>
                                    </div>

                                    <input type="hidden" value="' . $sp['id'] . '" name="id">
                                    <input type="hidden" value="' . $sp['tensp'] . '" name="tensp">
                                    <input type="hidden" value="' . $sp['img'] . '" name="img">
                                    <input type="hidden" value="' . $sp['gia'] . '" name="gia">
                                    </form>
                                </div>
                            </div>';
    // $id++;
}
?>

        </div>

    </div>
</section>
<!-- //ab -->
<!--/testimonials-->
<section class="testimonials py-5">
    <div class="container">
        <div class="test-info text-center">
            <h3 class="my-md-2 my-3">Jenifer Burns</h3>

            <ul class="list-unstyled w3layouts-icons clients">
                <li>
                    <a href="#">
                        <span class="fa fa-star"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-star"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-star"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-star-half-o"></span>
                    </a>
                </li>
            </ul>
            <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s.
                Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar
                lorem, at molestie arcu pulvinar ut. <span class="fa fa-quote-right"></span></p>

        </div>
    </div>
</section>
<!--//testimonials-->
<!--/ab -->
<section class="about py-5">
    <div class="container pb-lg-3">
        <h3 class="tittle text-center">Popular Products</h3>
        <div class="row">

            <div class="col-md-6 latest-left">
                <?php
echo '<div class="product-shoe-info shoe text-center">
                                <img src="./uploads/' . $sphome2[0]['img'] . '" class="img-fluid" alt="">
                                <div class="shop-now"><a href="#" class="btn">' . $sphome2[0]['tensp'] . '</a></div>
                            </div>';
?>
            </div>
            <div class="col-md-6 latest-right">
                <div class="row latest-grids">
                    <div class="latest-grid1 product-men col-12">
                        <?php
echo '<div class="product-shoe-info shoe text-center">
                                        <div class="men-thumb-item">
                                            <img src="./uploads/' . $sphome2[1]['img'] . '" class="img-fluid" alt="">
                                            <div class="shop-now"><a href="shop.html" class="btn">' . $sphome2[1]['tensp'] . '</a></div>
                                        </div>
                                    </div>';
?>
                    </div>
                    <div class="latest-grid2 product-men col-12 mt-lg-4">
                        <?php
echo '<div class="product-shoe-info shoe text-center">
                                        <div class="men-thumb-item">
                                            <img src="./uploads/' . $sphome2[2]['img'] . '" class="img-fluid" alt="">
                                            <div class="shop-now"><a href="shop.html" class="btn">' . $sphome2[2]['tensp'] . '</a></div>
                                        </div>
                                    </div>';
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>