<div class="catalog">
    <div class="catalog__item">
        <div class="catalog__item-overlay">
        </div>
        <img src="./assets/images/catalog/story-woman_model.png" alt="" class="catalog__item-img">
        <p class="catalog__item-text">SS apparel Story</p>
    </div>
    <div class="catalog__item">
        <div class="catalog__item-overlay">
        </div>
        <img src="./assets/images/catalog/view-our-collection.png" alt="" class="catalog__item-img">
        <p class="catalog__item-text">View Our Collections</p>
    </div>
    <div class="catalog__item">
        <div class="catalog__item-overlay">
        </div>
        <img src="./assets/images/catalog/join-our-community.png" alt="" class="catalog__item-img">
        <p class="catalog__item-text">Join Our Community</p>
    </div>
</div>

<div class="flash-sale">
    <div class="grid wide">
        <div class="flash-sale__banner">
            <div class="flash-sale__banner-text">
                <h2 class="flash-sale__banner-title">FLASH SALES</h2>
                <h3 class="flash-sale__banner-content">Up to 50% off</>
            </div>
        </div>
        <h2 class="flash-sale__heading section-heading">DEAL OFF TODAY</h2>
        <h3 class="countdown" id="countdown" c>
            <svg class="countdown__fire-icon" width="50" height="50">
                <image href="./assets/images/flash-sale/emojione_fire.svg" height="50" width="50" />
            </svg>

            <p class="countdown__time-left">
                <span class="days" id="days">0</span>DAYS
                <span class="hours" id="hours">11</span>HRS
                <span class="minutes" id="minutes">15</span> MIN
                <span class="seconds" id="seconds">04</span>SEC
            </p>

        </h3>
        <div class="" id="flash-sale__content">
            <div class="flash-sale__product-list product-list">
                <?php
$product_list_saleoff = get_all_products(0, 1, 1, 0);

foreach ($product_list_saleoff as $productitem) {
    $proid = $productitem['id'];
    // echo $proid;
    $img_url = substr($productitem['hinhanh1'], 1);
    // var_dump($img_url[0]);

    echo '
                        <div class="product-item" data-id="' . $proid . '">
                        <form method="post" action="">
                        <p class="product-item__bandage">Sale off</p>
                        <p class="product-item__sold-quantity">12 sold</p>
                        <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__img-container">
                            <img src="' . $img_url . '" alt=""
                                class="product-item__img-img">
                            <p class="product-item__img-quick-view">
                                Quick View
                            </p>
                        </a>
                        <div class="product-item__body">
                            <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__name">' . $productitem['tensp'] . '</a>
                            <span class="product-item__divider"></span>
                            <div class="product-item__price">
                                <span class="product-item__price-old">$' . $productitem['giacu'] . '</span>
                                <span class="product-item__price-new">$' . $productitem['giasp'] . '</span>
                            </div>

                            <div class="product-item__rating-stars">
                                <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                                <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                                <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                                <i class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                                <i class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                            </div>
                            <p class="product-item__hot-sale">Upto 40% OFF</p>
                        </div>

                        </form>
                    </div>
                        ';
}

?>


                <div
                    class="control-btn control__next-btn product-item__next-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
                </div>
                <div
                    class="control-btn control__prev-btn product-item__prev-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- latest arrivals start -->
<div class="latest-arrivals">
    <div class="grid wide">
        <h2 class="latest-arrivals__title section-heading">Latest Arrivals</h2>
        <!-- For women section -->
        <div class="for-women">
            <h3 class="latest-arrivals__category category-heading">
                For women
            </h3>
            <div class="product-list">
                <?php

$product_list_forwomen = get_all_products(0, 0, 1, 2);
// var_dump($product_list_forwomen);
foreach ($product_list_forwomen as $product_item) {
    # code...
    $proid = $product_item['id'];
    // echo $proid;
    $img_url = substr($product_item['hinhanh1'], 1);
    $old_price = $product_item['giacu'] == 0 ? "" : "$" . $product_item['giacu'];

    // var_dump($img_url);
    echo '
                <div class="product-item " data-id="' . $proid . '">
                <p class="product-item__bandage">New Arrival</p>
                <p class="product-item__sold-quantity">12 sold</p>
                <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__img-container">
                    <img src="' . $img_url . '" alt=""
                        class="product-item__img-img">
                    <p class="product-item__img-quick-view">
                        Quick View
                    </p>
                </a>
                <div class="product-item__body">
                    <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__name">' . $product_item['tensp'] . '</a>
                    <span class="product-item__divider"></span>
                    <div class="product-item__price">
                     <span class="product-item__price-old">' . $old_price . '</span>
                        <span class="product-item__price-new">$' . $product_item['giasp'] . '</span>
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
                ';

}

?>

                <div
                    class="control-btn control__next-btn product-item__next-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
                </div>
                <div
                    class="control-btn control__prev-btn product-item__prev-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
                </div>
            </div>
        </div>

        <!-- For men section -->
        <div class="for-men">
            <h3 class="latest-arrivals__category category-heading">
                For men
            </h3>
            <div class=" product-list">
                <?php

$product_list_formen = get_all_products(0, 0, 1, 1);
// var_dump($product_list_formen);
foreach ($product_list_formen as $product_item) {
    # code...
    $proid = $product_item['id'];
    // echo $proid;
    $img_url = substr($product_item['hinhanh1'], 1);
    // var_dump($img_url);
    $old_price = $product_item['giacu'] == 0 ? "" : "$" . $product_item['giacu'];
    echo '
                <div class="product-item " data-id="' . $proid . '">
                <p class="product-item__bandage">New Arrival</p>
                <p class="product-item__sold-quantity">12 sold</p>
                <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__img-container">
                    <img src="' . $img_url . '" alt=""
                        class="product-item__img-img">
                    <p class="product-item__img-quick-view">
                        Quick View
                    </p>
                </a>
                <div class="product-item__body">
                    <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__name">' . $product_item['tensp'] . '</a>
                    <span class="product-item__divider"></span>
                    <div class="product-item__price">
                     <span class="product-item__price-old">' . $old_price . '</span>
                        <span class="product-item__price-new">$' . $product_item['giasp'] . '</span>
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
                ';

}
?>
                <div
                    class="control-btn control__next-btn product-item__next-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
                </div>
                <div
                    class="control-btn control__prev-btn product-item__prev-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
                </div>
            </div>
        </div>

        <!-- For shoes section -->
        <div class="for-shoes">
            <h3 class="latest-arrivals__category category-heading">
                For Shoes
            </h3>
            <div class=" product-list">

                <?php

$product_list_forshoes = get_all_products(0, 0, 1, 3);
// var_dump($product_list_forshoes);
foreach ($product_list_forshoes as $product_item) {
    # code...
    $proid = $product_item['id'];
    // echo $proid;
    $img_url = substr($product_item['hinhanh1'], 1);
    $old_price = $product_item['giacu'] == 0 ? "" : "$" . $product_item['giacu'];
    echo '
                <div class="product-item " data-id="' . $proid . '">
                <p class="product-item__bandage">New Arrival</p>
                <p class="product-item__sold-quantity">12 sold</p>
                <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__img-container product-item__img-container--for-shoes-moible fit-shoes-color">
                    <img src="' . $img_url . '" alt=""
                        class="product-item__img-img">
                    <p class="product-item__img-quick-view">
                        Quick View
                    </p>
                </a>
                <div class="product-item__body">
                    <a href="./index.php?act=detailpage&id=' . $proid . '" class="product-item__name">' . $product_item['tensp'] . '</a>
                    <span class="product-item__divider"></span>
                    <div class="product-item__price">
                     <span class="product-item__price-old">' . $old_price . '</span>
                        <span class="product-item__price-new">$' . $product_item['giasp'] . '</span>
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
                ';

}
?>


                <div
                    class="control-btn control__next-btn product-item__next-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
                </div>
                <div
                    class="control-btn control__prev-btn product-item__prev-btn control-btn--fixed-position hide-on-tablet-mobile">
                    <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest arrivals end -->

<!-- New Collections -->
<div class="new-collections">
    <div class="grid wide ">
        <div class=" new-collections__items">
            <div class="col-5 new-collections__item">
                <img src="./assets/images/collections/for-men-collection.png" alt=""
                    class="new-collections__img new-collections__img--formen">
                <p class="new-collections__item-cate new-collections__item-cate--formen">FOR MEN</p>
            </div>
            <div class="col-2 new-collections__text">
                <h2 class="new-collections__title">

                </h2>
            </div>
            <div class="col-5 new-collections__item">
                <img src="./assets/images/collections/for-women-collection.png" alt=""
                    class="new-collections__img new-collections__img--forwomen">
                <p class="new-collections__item-cate new-collections__item-cate--forwomen">FOR WOMEN</p>
            </div>
        </div>
    </div>
</div>

<!-- New Footwear Collections -->

<div class="footwear-banner">
    <div class="grid wide footwear-banner__container hide-on-pc">
        <img src="./assets/images/footwear-banner/footwear_banner.png" alt=""
            class="footwear-banner__img hide-on-mobile">
        <img src="./assets/images/footwear-banner/footwear_banner_mobile.png" alt=""
            class="footwear-banner__img-mobile hide-on-tablet">
        <a href="./shop-page-for-women.html" class="footwear-banner__shop-btn shop-btn">SHOP NOW</a>
    </div>
</div>

<!-- Brands -->

<div class="brands">
    <div class="grid wide">
        <div class="brands__heading">
            <h2 class="brands__title section-heading">Brands</h2>
            <div class="control-btns hide-on-mobile">
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
            <div class="brands__item ">
                <img src="./assets/images/brands/The Code.png" alt="" class="brands__item-img">
            </div>
            <div class="brands__item ">
                <img src="./assets/images/brands/Ultimate.png" alt="" class=" hide-on-mobile-img">
            </div>
            <div class="brands__item ">
                <img src="./assets/images/brands/Unknown.png" alt="" class="brands__item-img">
            </div>
        </div>
    </div>
</div>

<!-- From the Blog -->

<div class="blog-section">
    <div class="grid wide">
        <div class="blog-section__heading">
            <h2 class="blog-section__title section-heading">From the Blog/</h2>
            <div class="control-btns hide-on-mobile">
                <div class="blog-section-control control-btn brands__prev-btn">
                    <i class="control-btn-icon blog-section-control-icon fa-solid fa-chevron-left fa-xl"></i>
                </div>
                <div class="blog-section-control control-btn brands__next-btn">
                    <i class="control-btn-icon blog-section-control-icon fa-solid fa-chevron-right fa-xl"></i>
                </div>
            </div>
        </div>
        <div class="blog-section__content">
            <div class="blog-section__content-col blog-section__content-left">
                <img src="./assets/images/blog/blog-slide-01.png" alt="" class="blog-section__content-img">
            </div>
            <div class="blog-section__content-col blog-section__content-right">
                <h3 class="blog-section__content-heading">DANCE WORKOUT WITH JAMIE W.</h3>
                <p class="blog-section__content-author">BY JAMIE / APPRIL 24, 2022</p>
                <p class="blog-section__content-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tenetur porro iure
                    fugit
                    explicabo, possimus culpa facilis alias aliquid consectetur illum adipisci quasi sequi
                    obcaecati neque quibusdam! Totam, sequi sit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur voluptate ratione
                    temporibus, iure sequi debitis? Dolor illo iste neque architecto veritatis itaque quam sit
                    quibusdam. Minima magnam accusamus explicabo?
                </p>
                <a href="" class="blog-section__content-btn read-more-btn">
                    Read More
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Feedback section-->
<div class="feedback">
    <div class="grid wide feedback__container">
        <h2 class="feedback__heading section-heading">
            OUR CUSTOMER FEEDBACK
        </h2>

        <p class="feedback__slogan">Don't take our word for it. Trust our customers</p>
        <div class="feedback__content">
            <div class="feedback__item">
                <div class="feedback__item-author">
                    <img src="./assets/images/customer-feedback/aldo-p-person.png" alt="aldo-p-person"
                        class="feedback__item-avatar">
                    <div class="feedback__item-author-name">
                        <p>Ado P.</p>
                        <div class="feedback__item-author-rating">
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--black fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="feedback__item-verified">
                    <i class="fa-solid fa-check"></i>
                    Verifed Testimonial
                </div>
                <p class="feedback__item-desc">
                    "No matter where you go, It's is the coolest, most happening thing around! Not able to tell
                    you how happy I am with it. "
                    <br />
                    "We're loving it. This is simply unbelievable! I like it more and more each day because it
                    makes my life a lot easier."
                </p>

                <a href="" class="feedback__item-link">See more</a>
            </div>
            <div class="feedback__item feedback__item--center">
                <div class="feedback__item-author">
                    <img src="./assets/images/customer-feedback/alexa-avatar.png" alt="aldo-p-person"
                        class="feedback__item-avatar">
                    <div class="feedback__item-author-name">
                        <p>Alexa.</p>
                        <div class="feedback__item-author-rating">
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--black fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="feedback__item-verified">
                    <i class="fa-solid fa-check"></i>
                    Verifed Testimonial
                </div>
                <p class="feedback__item-desc">

                    "Your company is truly upstanding and is behind its product 100%. It's the perfect solution
                    for our business. It has really helped our business."
                    <br />
                    "I couldn't have asked for more than this. Since I invested in it I made over 100,000
                    dollars profits. I would be lost without it."
                    <br />
                    "You won't regret it. I was amazed at the quality of it. I am really satisfied with my it."
                    <br />

                    "You won't regret it. I was amazed at the quality of it. I am really satisfied with my it."
                </p>
                </p>

                <a href="" class="feedback__item-link">See more</a>
            </div>
            <div class="feedback__item">
                <div class="feedback__item-author">
                    <img src="./assets/images/customer-feedback/aldo-p-person.png" alt="aldo-p-person"
                        class="feedback__item-avatar">
                    <div class="feedback__item-author-name">
                        <p>Ado P.</p>
                        <div class="feedback__item-author-rating">
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--yellow fa-solid fa-star"></i>
                            <i
                                class="feedback__item-author-rating-icon feedback__item-author-rating-icon--black fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="feedback__item-verified">
                    <i class="fa-solid fa-check"></i>
                    Verifed Testimonial
                </div>
                <p class="feedback__item-desc">
                    "No matter where you go, It's is the coolest, most happening thing around! Not able to tell
                    you how happy I am with it. "
                    <br>
                    "We're loving it. This is simply unbelievable! I like it more and more each day because it
                    makes my life a lot easier."
                </p>

                <a href="" class="feedback__item-link">See more</a>
            </div>
        </div>
    </div>
</div>


<!-- Instagram section  -->
<div class="instagram hide-on-mobile">
    <h2 class="instagram__title section-heading">
        Follow us on instagram
    </h2>

    <div class="instagram__gallery">
        <div class="instagram__item">
            <img src="./assets/images/instagram-gallery/women-top-white-shirt.png" alt="" class="instagram__img">
        </div>
        <div class="instagram__item">
            <img src="./assets/images/instagram-gallery/woman-ready-running.png" alt="" class="instagram__img">
        </div>
        <div class="instagram__item">
            <img src="./assets/images/instagram-gallery/woman-good-body.png" alt="" class="instagram__img">
        </div>
        <div class="instagram__item">
            <img src="./assets/images/instagram-gallery/woman-jump-rode.png" alt="" class="instagram__img">
        </div>
        <div class="instagram__item">
            <img src="./assets/images/instagram-gallery/woman-wear-watch.png" alt="" class="instagram__img">
        </div>

        <div class="instagram__gallery-btn control-btn control__next-btn hide-on-tablet-mobile">
            <i class="instagram__gallery-btn-icon control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
        </div>
        <div class="instagram__gallery-btn control-btn control__prev-btn hide-on-tablet-mobile">
            <i class="instagram__gallery-btn-icon control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
        </div>
    </div>
</div>