    <!---->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Single Page</li>
    </ol>
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <!-- product left -->
                <div class="side-bar col-lg-4">

                    <div class="search-bar w3layouts-newsletter">
                        <h3 class="sear-head">Search Here..</h3>
                        <form action="#" method="post" class="d-flex">
                            <input type="search" placeholder="Product name..." name="search" class="form-control" required="">
                            <button class="btn1"><span class="fa fa-search" aria-hidden="true"></span></button>
                        </form>
                    </div>
                    <!--preference -->
                    <div class="left-side my-4">
                        <h3 class="sear-head">Danh mục</h3>
                        <ul class="w3layouts-box-list">
                            <?php
                                foreach ($dsdm as $dm) {
                                    echo '<li>
                                    <input type="checkbox" class="checked">
                                    <span class="span"><a href="index.php?act=sanpham&id='.$dm['id'].'">'.$dm['tendm'].'</a></span>
                                </li>';
                                }
                            ?>
                            
                        </ul>
                    </div>
                    <!-- // preference -->
                    <!-- discounts -->
                    <div class="left-side">
                        <h3 class="sear-head">Discount</h3>
                        <ul class="w3layouts-box-list">
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">5% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">10% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">20% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">30% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">50% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">60% or More</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- reviews -->
                    <div class="customer-rev left-side my-4">
                        <h3 class="sear-head">Customer Review</h3>
                        <ul class="w3layouts-box-list">
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span>5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>3.5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>3.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>2.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- deals -->
                    <div class="deal-leftmk left-side">
                        <h3 class="sear-head">Special Deals</h3>
                        <div class="special-sec1 row mb-3">
                            <div class="img-deals col-md-4">
                                <img src="./web/images/s4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-4">
                                <h3>Shuberry Heels</h3>
                                <a href="shop-single.html">$180.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row">
                            <div class="img-deals col-md-4">
                                <img src="./web/images/s2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>Chikku Loafers</h3>
                                <a href="shop-single.html">$99.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row my-3">
                            <div class="img-deals col-md-4">
                                <img src="./web/images/s1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>Bella Toes</h3>
                                <a href="shop-single.html">$165.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row">
                            <div class="img-deals col-md-4">
                                <img src="./web/images/s5.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>Red Bellies</h3>
                                <a href="shop-single.html">$225.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row mt-3">
                            <div class="img-deals col-md-4">
                                <img src="./web/images/s3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>(SRV) Sneakers</h3>
                                <a href="shop-single.html">$169.00</a>
                            </div>

                        </div>
                    </div>
                    <!-- //deals -->

                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="left-ads-display col-lg-8">
                    <div class="row">
                        <?php
                            foreach ($dssp as $sp) {
                                echo '<div class="col-md-4 product-men">
                                <div class="product-shoe-info shoe text-center">
                                    <div class="men-thumb-item">
                                        <img src="./uploads/'.$sp['img'].'" class="img-fluid" alt="">
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="shop-single.html">'.$sp['tensp'].'</a>
                                        </h4>
    
                                        <div class="product_price">
                                            <div class="grid-price">
                                                <span class="money">'.$sp['gia'].'</span>
                                            </div>
                                        </div>
                                        <ul class="stars">
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                            }
                        ?>
                        
                    </div>
                    <div class="grid-img-right mt-4 text-right">
                        <span class="money">Flat 50% Off</span>
                        <a href="shop-single.html" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>