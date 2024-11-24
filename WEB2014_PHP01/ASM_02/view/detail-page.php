<?php
if (isset($_GET['id'])) {
    $proid = $_GET['id'];
    // var_dump(get_one_product($proid));
    $product_item = get_one_product($proid)[0];
    $cateid = $product_item['iddm'];
    $cate_name = get_cate_name($cateid)[0]['tendanhmuc'];
    $old_price = $product_item['giacu'] != 0 ? "$" . $product_item['giacu'] : "";
    // var_dump($cate_name);
    $hinhanh1 = substr($product_item['hinhanh1'], 1);
    $hinhanh2 = substr($product_item['hinhanh2'], 1);
    $hinhanh3 = substr($product_item['hinhanh3'], 1);
    $hinhanh4 = substr($product_item['hinhanh4'], 1);
    $hinhanh5 = substr($product_item['hinhanh5'], 1);
    // $alt_image = get_images($proid, 1)[0]['noidunghinhanh'];

}
?>


<iframe name="content" style="width: 100%; height: 40rem; display: none"></iframe>
<div class="detail-product">

    <form action="./index.php?act=addcart" method="post" target="content">
        <div class="grid wide">
            <?php
echo '

            <h2 class="detail-product__title section-heading">' . $cate_name . '</h2>
            <h3 class="detail-product__sub-title">Main / ' . $cate_name . ' / <span
                    class="detail-product__sub-title--current">' . $product_item['tensp'] . '</span></h3>
            <div class="detail-product__section">
                <div class="main-product">
                    <div class="main-product__images">
                        <div class="main-product__avatar">
                            <img src="' . $hinhanh1 . '" alt=""
                                class="main-product__avatar-img">
                        </div>
                        <!-- slide product list -->
                        <div class="main-product__slide">
                            <img src="' . $hinhanh1 . '" alt=""
                                class="main-product__slide-item main-product__slide-item--current">
                            <img src="' . $hinhanh2 . '" alt=""
                                class="main-product__slide-item">
                            <img src="' . $hinhanh3 . '" alt=""
                                class="main-product__slide-item">
                            <img src="' . $hinhanh4 . '" alt=""
                                class="main-product__slide-item">

                            <!-- control button -->
                            <div
                                class="control-btn control__next-btn product-item__next-btn main-product__slide-next-btn hide-on-tablet-mobile">
                                <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
                            </div>
                            <div
                                class="control-btn control__prev-btn product-item__prev-btn main-product__slide-prev-btn hide-on-tablet-mobile">
                                <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
                            </div>
                        </div>

                    </div>
                    <div class="main-product__desc">
                        <h3 class="main-product__name">' . $product_item['tensp'] . '</h3>
                        <div class="main-product__price">
                        <span class="main-product__price-old">' . $old_price . '</span>
                        <span class="main-product__price-new">$' . $product_item['giasp'] . '</span>
                        </div>

                        <div class="main-product__ratings product-item__rating-stars">
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                        </div>
                        <div class="main-product__info">
                        ' . $product_item['shortdesc'] . '
                        </div>

                        <div class="main-product__colors">
                            <div class="main-product__title">Available Color: </div>
                            <div class="main-product__color-list">
                                <div
                                    class="main-product__color-item main-product__color-item--dark-green main-product__color-item--acitve">
                                </div>
                                <div class="main-product__color-item main-product__color-item--dark-grey"></div>
                                <div class="main-product__color-item main-product__color-item--dark-blue"></div>
                                <div class="main-product__color-item main-product__color-item--dark-purple"></div>
                                <div class="main-product__color-item main-product__color-item--dark-red"></div>
                                <div class="main-product__color-item main-product__color-item--dark-yellow"></div>
                            </div>
                        </div>
                        <div class="main-product__size">
                            <div class="main-product__size-title">
                                <span>Size</span>
                                <a href="" class="main-product__size-chart">Help With Size</a>
                            </div>
                            <div class="main-product__size-selections">
                                <div class="main-product__size-select main-product__size-select--active">XS</div>
                                <div class="main-product__size-select">S</div>
                                <div class="main-product__size-select">M</div>
                                <div class="main-product__size-select">L</div>
                                <div class="main-product__size-select">XL</div>
                            </div>
                        </div>
                        <div class="main-product__quantity">
                            <p class="main-product__quantity-title">Qty: </p>
                            <div class="main-product__quantity-control">
                                <span class="main-product__quantity-control-item" onclick="plusQuantity(-1)"><i
                                        class="fa-solid fa-minus"></i></span>
                                <span class="main-product__quantity-control-item-number">1</span>
                                <span class="main-product__quantity-control-item main-product__quantity-control-item--minus"
                                    onclick="plusQuantity(1)"><i class="fa-solid fa-plus"></i></span>
                            </div>
                        </div>

                        <div class="main-product__buttons">
                            <input type="submit"  class="main-product__button main-product__button--wishlist" value="Add to Wishlist"/>

                            <input type="submit" name="addtocart" class="main-product__button main-product__button--addtocart" value="Add to cart" onclick="addToCart(event)"  />

                        </div>

                    </div>
                </div>
            </div>
            <div class="detail-product__full-desc ">
                <div class="full-desc hide-on-mobile">
                    <ul class="full-desc__nav">
                        <li class="full-desc__item full-desc__item--active">Desciption</li>
                        <li class="full-desc__item">Detail</li>
                        <li class="full-desc__item">Shipping</li>
                        <li class="full-desc__item">Review</li>
                    </ul>
                    <div class="full-desc__content-list">
                        <p class="full-desc__content-item full-desc__content-item--active ">
                        ' . $product_item['fulldesc'] . '
                        </p>
                    </div>
                </div>

                <ul class="full-desc__mobile hide-on-pc hide-on-tablet">
                    <li class="full-desc__mobile-item">
                        <h3 class="full-desc__mobile-item-title"><span
                                class="full-desc__mobile-item-title-text">Description</span> <i
                                class="full-desc__mobile-item-title-icon fa-solid fa-chevron-right fa-sm"></i> </h3>
                        <p class="full-desc__mobile-item-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero obcaecati nesciunt
                            accusamus eius, odit sit esse est. Quibusdam, animi necessitatibus enim vitae harum
                            ullam aut distinctio sunt dolore autem aliquam?
                            Debitis quia sequi sunt, minus numquam quisquam, mollitia tempora porro veniam excepturi
                            odit facere blanditiis nulla molestiae labore iure praesentium quos pariatur!
                            Repudiandae corporis aliquam quae nam sint delectus asperiores!
                        </p>
                    </li>
                    <li class="full-desc__mobile-item ">
                        <h3 class="full-desc__mobile-item-title"><span
                                class="full-desc__mobile-item-title-text">Detail</span> <i
                                class="full-desc__mobile-item-title-icon fa-solid fa-chevron-down fa-sm"></i>
                        </h3>
                        <p class="full-desc__mobile-item-desc display-none">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero obcaecati nesciunt
                            accusamus eius, odit sit esse est. Quibusdam, animi necessitatibus enim vitae harum
                            ullam aut distinctio sunt dolore autem aliquam?
                            Debitis quia sequi sunt, minus numquam quisquam, mollitia tempora porro veniam excepturi
                            odit facere blanditiis nulla molestiae labore iure praesentium quos pariatur!
                            Repudiandae corporis aliquam quae nam sint delectus asperiores!
                        </p>
                    </li>
                    <li class="full-desc__mobile-item ">
                        <h3 class="full-desc__mobile-item-title"><span
                                class="full-desc__mobile-item-title-text">Shipping</span> <i
                                class="full-desc__mobile-item-title-icon fa-solid fa-chevron-down fa-sm"></i>
                        </h3>
                        <p class="full-desc__mobile-item-desc display-none">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero obcaecati nesciunt
                            accusamus eius, odit sit esse est. Quibusdam, animi necessitatibus enim vitae harum
                            ullam aut distinctio sunt dolore autem aliquam?
                            Debitis quia sequi sunt, minus numquam quisquam, mollitia tempora porro veniam excepturi
                            odit facere blanditiis nulla molestiae labore iure praesentium quos pariatur!
                            Repudiandae corporis aliquam quae nam sint delectus asperiores!
                        </p>
                    </li>
                    <li class="full-desc__mobile-item ">
                        <h3 class="full-desc__mobile-item-title"><span
                                class="full-desc__mobile-item-title-text">Review</span> <i
                                class="full-desc__mobile-item-title-icon fa-solid fa-chevron-down fa-sm"></i> </h3>
                        <p class="full-desc__mobile-item-desc display-none">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero obcaecati nesciunt
                            accusamus eius, odit sit esse est. Quibusdam, animi necessitatibus enim vitae harum
                            ullam aut distinctio sunt dolore autem aliquam?
                            Debitis quia sequi sunt, minus numquam quisquam, mollitia tempora porro veniam excepturi
                            odit facere blanditiis nulla molestiae labore iure praesentium quos pariatur!
                            Repudiandae corporis aliquam quae nam sint delectus asperiores!
                        </p>
                    </li>
                </ul>
            </div>

            <input type="hidden" name="id" value = ' . $proid . '>
            <input type="hidden" name="tensanpham" value = ' . $product_item['tensp'] . '>
            <input type="hidden" name="iddm" value = ' . $product_item['iddm'] . '>
            <input type="hidden" name="giasp" value = ' . $product_item['giasp'] . '>
            <input type="hidden" name="img" value=' . $hinhanh1 . '>
            <input class="quantity-hidden" type="hidden" name="sl" >

            ';
?>
    </form>

    <!-- Combo for sale section -->
    <div class="combo-product">
        <h2 class="combo-product__heading section-heading">COMBO FOR SALE</h2>
        <div class="combo-product__list">
            <div class="product-list">
                <div class="product-item">
                    <p class="product-item__bandage">New Arrival</p>
                    <p class="product-item__sold-quantity">12 sold</p>
                    <div class="product-item__img-container">
                        <img src="./assets/images/for-women/Printed Leggings 1.png" alt=""
                            class="product-item__img-img">
                        <p class="product-item__img-quick-view">
                            Quick View
                        </p>
                    </div>
                    <div class="product-item__body">
                        <h3 class="product-item__name">Running Shorts</h3>
                        <span class="product-item__divider"></span>
                        <div class="product-item__price">
                            <span class="product-item__price-old">$12.00</span>
                            <span class="product-item__price-new">$8.00</span>
                        </div>

                        <div class="product-item__rating-stars">
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="product-item">
                    <p class="product-item__bandage">New Arrival</p>
                    <p class="product-item__sold-quantity">12 sold</p>
                    <div class="product-item__img-container">
                        <img src="./assets/images/for-women/Running Shorts img.png" alt=""
                            class="product-item__img-img">
                        <p class="product-item__img-quick-view">
                            Quick View
                        </p>
                    </div>
                    <div class="product-item__body">
                        <h3 class="product-item__name">Running Shorts</h3>
                        <span class="product-item__divider"></span>
                        <div class="product-item__price">
                            <span class="product-item__price-old">$11.00</span>
                            <span class="product-item__price-new">$6.00</span>
                        </div>

                        <div class="product-item__rating-stars">
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="product-item">
                    <p class="product-item__bandage">New Arrival</p>
                    <p class="product-item__sold-quantity">12 sold</p>
                    <div class="product-item__img-container">
                        <img src="./assets/images/for-women/running  pants.png" alt="" class="product-item__img-img">
                        <p class="product-item__img-quick-view">
                            Quick View
                        </p>
                    </div>
                    <div class="product-item__body">
                        <h3 class="product-item__name">Running Shorts</h3>
                        <span class="product-item__divider"></span>
                        <div class="product-item__price">
                            <span class="product-item__price-old">$13.00</span>
                            <span class="product-item__price-new">$11.00</span>
                        </div>

                        <div class="product-item__rating-stars">
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="product-item">
                    <p class="product-item__bandage">New Arrival</p>
                    <p class="product-item__sold-quantity">12 sold</p>
                    <div class="product-item__img-container">
                        <img src="./assets/images/for-women/Running Top 1.png" alt="" class="product-item__img-img">
                        <p class="product-item__img-quick-view">
                            Quick View
                        </p>
                    </div>
                    <div class="product-item__body">
                        <h3 class="product-item__name">Running Shorts</h3>
                        <span class="product-item__divider"></span>
                        <div class="product-item__price">
                            <span class="product-item__price-old">$16.00</span>
                            <span class="product-item__price-new">$12.00</span>
                        </div>

                        <div class="product-item__rating-stars">
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                            <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="control-btn control__next-btn product-item__next-btn hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
                </div>
                <div class="control-btn control__prev-btn product-item__prev-btn hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Relate products section -->
    <div class="relate-products">
        <h2 class="relate-products__title section-heading">RELATE PRODUCTS</h2>
        <div class="product-list">
            <div class="product-item">
                <p class="product-item__bandage">New Arrival</p>
                <p class="product-item__sold-quantity">12 sold</p>
                <div class="product-item__img-container">
                    <img src="./assets/images/for-women/Running Shorts img.png" alt="" class="product-item__img-img">
                    <p class="product-item__img-quick-view">
                        Quick View
                    </p>
                </div>
                <div class="product-item__body">
                    <h3 class="product-item__name">Running Shorts</h3>
                    <span class="product-item__divider"></span>
                    <div class="product-item__price">
                        <span class="product-item__price-old">.00</span>
                        <span class="product-item__price-new">.00</span>
                    </div>

                    <div class="product-item__rating-stars">
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                    </div>

                </div>
            </div>
            <div class="product-item">
                <p class="product-item__bandage">New Arrival</p>
                <p class="product-item__sold-quantity">12 sold</p>
                <div class="product-item__img-container">
                    <img src="./assets/images/for-women/Seamless Bra (1) 1.png" alt="" class="product-item__img-img">
                    <p class="product-item__img-quick-view">
                        Quick View
                    </p>
                </div>
                <div class="product-item__body">
                    <h3 class="product-item__name">Running Shorts</h3>
                    <span class="product-item__divider"></span>
                    <div class="product-item__price">
                        <span class="product-item__price-old">$16.00</span>
                        <span class="product-item__price-new">$13.00</span>
                    </div>

                    <div class="product-item__rating-stars">
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                    </div>

                </div>
            </div>
            <div class="product-item">
                <p class="product-item__bandage">New Arrival</p>
                <p class="product-item__sold-quantity">12 sold</p>
                <div class="product-item__img-container">
                    <img src="./assets/images/for-women/Running Top 1.png" alt="" class="product-item__img-img">
                    <p class="product-item__img-quick-view">
                        Quick View
                    </p>
                </div>
                <div class="product-item__body">
                    <h3 class="product-item__name">Running Shorts</h3>
                    <span class="product-item__divider"></span>
                    <div class="product-item__price">
                        <span class="product-item__price-old">$20.00</span>
                        <span class="product-item__price-new">$11.00</span>
                    </div>

                    <div class="product-item__rating-stars">
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                    </div>

                </div>
            </div>
            <div class="product-item">
                <p class="product-item__bandage">New Arrival</p>
                <p class="product-item__sold-quantity">12 sold</p>
                <div class="product-item__img-container">
                    <img src="./assets/images/for-women/Seamless Bra 2 1.png" alt="" class="product-item__img-img">
                    <p class="product-item__img-quick-view">
                        Quick View
                    </p>
                </div>
                <div class="product-item__body">
                    <h3 class="product-item__name">Running Shorts</h3>
                    <span class="product-item__divider"></span>
                    <div class="product-item__price">
                        <span class="product-item__price-old">$17.00</span>
                        <span class="product-item__price-new">$12.00</span>
                    </div>

                    <div class="product-item__rating-stars">
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                        <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                    </div>

                </div>
            </div>
            <!-- Next button control -->
            <div class="control-btn control__next-btn product-item__next-btn hide-on-tablet-mobile">
                <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
            </div>
            <div class="control-btn control__prev-btn product-item__prev-btn hide-on-tablet-mobile">
                <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
            </div>

        </div>
    </div>

    <!-- Brands -->
    <div class="brands">
        <div class="grid wide">
            <div class="brands__heading">
                <h2 class="brands__title section-heading">Brands</h2>
                <div class="control-btns">
                    <div class="brands-control control-btn brands__prev-btn">
                        <i class="control-btn-icon brands-control-icon fa-solid fa-chevron-left fa-xl"></i>
                    </div>
                    <div class="brands-control control-btn brands__next-btn">
                        <i class="control-btn-icon brands-control-icon fa-solid fa-chevron-right fa-xl"></i>
                    </div>
                </div>

            </div>
            <div class="brands__items">
                <div class="brands__item">
                    <img src="./assets/images/brands/L-Wear.png" alt="" class="brands__item-img">
                </div>
                <div class="brands__item">
                    <img src="./assets/images/brands/Only.png" alt="" class="brands__item-img">
                </div>
                <div class="brands__item">
                    <img src="./assets/images/brands/The Code.png" alt="" class="brands__item-img">
                </div>
                <div class="brands__item">
                    <img src="./assets/images/brands/Ultimate.png" alt="" class="brands__item-img">
                </div>
                <div class="brands__item">
                    <img src="./assets/images/brands/Unknown.png" alt="" class="brands__item-img">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
const quantityHidden = document.querySelector('.quantity-hidden');
// console.log(quantityHidden);
const controlElements = document.querySelectorAll('.main-product__quantity-control-item');
// console.log(controlElements);
const quantityNumber = document.querySelector('.main-product__quantity-control-item-number');
for (const controlItem of controlElements) {
    controlItem.addEventListener('click', () => {

        quantityHidden.value = quantityNumber.innerText;
    })
}
</script>

<?php

?>