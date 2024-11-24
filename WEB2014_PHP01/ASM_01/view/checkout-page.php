    <!-- Checkout section  -->

    <div class="checkout">
        <div class="grid wide">
            <h2 class="checkout__title section-heading">Check out</h2>
            <h3 class="checkout__sub-title"><i class="previous-page-icon fa-solid fa-arrow-left-long"></i>
                <span>Back to
                    Cart</span>
            </h3>

            <div class="checkout__section">
                <!-- Checkout form section left -->
                <div class="checkout__form">
                    <form action="">
                        <div class="checkout__form-genders form-group">
                            <div class="checkout__form-gender checkout__form-mrs">Mrs</div>
                            <div class="checkout__form-gender checkout__form-mr">Mr.</div>
                        </div>
                        <div class="checkout__form-firstname form-group">
                            <input type="text" name="" id="" class="form-control ck-form-control" required
                                placeholder="First Name*">
                        </div>
                        <div class="checkout__form-lastname form-group">
                            <input type="text" name="" id="" class="form-control ck-form-control" required
                                placeholder="Last Name*">
                        </div>
                        <div class="checkout__form-email form-group">
                            <input type="email" name="" id="" class="form-control ck-form-control" required
                                placeholder="Email Name*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="checkout__form-living form-group">
                            <input type="text" name="" id="" class="form-control ck-form-control" required
                                placeholder="Street*">
                            <input type="text" name="" id="" class="form-control ck-form-control" required
                                placeholder="Houses*">
                        </div>
                        <div class="checkout__form-postcode form-group">
                            <input type="text" name="" id="" class="form-control ck-form-control" required
                                placeholder="PostCode*">
                            <input type="text" name="" id="" class="form-control ck-form-control" required
                                placeholder="Location*">
                        </div>
                        <div class="checkout__form-postcode form-group">
                            <!-- Custom css select -->
                            <details class="custom-select">
                                <summary class="radios">
                                    <input type="radio" name="item" id="default" title="Select Country..." checked>
                                    <input type="radio" name="item" id="item1" title="Item 1">
                                    <input type="radio" name="item" id="item2" title="Item 2">
                                    <input type="radio" name="item" id="item3" title="Item 3">
                                    <input type="radio" name="item" id="item4" title="Item 4">
                                    <input type="radio" name="item" id="item5" title="Item 5">
                                </summary>
                                <ul class="list">
                                    <li class="list-item">
                                        <label for="item1">
                                            Viet Nam
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="list-item">
                                        <label for="item2">Singapore</label>
                                    </li>
                                    <li class="list-item">
                                        <label for="item3">USA</label>
                                    </li>
                                    <li class="list-item">
                                        <label for="item4">England</label>
                                    </li>
                                    <li class="list-item">
                                        <label for="item5">Japan</label>
                                    </li>
                                </ul>
                            </details>
                        </div>
                        <div class="checkout__form-phone form-group">
                            <input type="tel" name="" id="" class="form-control ck-form-control"
                                placeholder="Phone Number*" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                        </div>
                        <div class="checkout__form-check form-group">
                            <input type="checkbox" name="" id="" class="">
                            <label for="" class="checkout__form-check-text">Create a customer account now and
                                benefit from many advantages.</label>
                        </div>
                        <div class="checkout__form-check form-group">
                            <!-- icon -->
                            <i class="exclamation__icon fa-solid fa-circle-exclamation"></i>
                            <label for="" class="checkout__form-check-text">The password will be sent to you by
                                email</label>
                        </div>
                        <div class="checkout__form-check form-group">
                            <input type="checkbox" name="" id="" class="">
                            <label for="" class="checkout__form-check-text">Shipping Address is Different</label>
                        </div>
                        <div class="checkout__form-payment form-group">
                            <label for="" class="checkout__form-check-text">
                                <img src="./assets/images/payment/paypal.png" alt="" class="checkout__form-payment-img">
                                <p>Pay Pal</p>
                            </label>
                            <input type="checkbox" name="" id="" class="">
                        </div>
                        <div class="checkout__form-payment form-group">
                            <label for="" class="checkout__form-check-text">
                                <img src="./assets/images/payment/paypal.png" alt="" class="checkout__form-payment-img">
                                <p>Pay Pal PLus</p>
                            </label>
                            <input type="checkbox" name="" id="" class="">
                        </div>
                        <div class="form-group">
                            <div class="checkout__form-vietcombank">
                                <div class="checkout__form-payment-img-wrap">
                                    <img src="./assets/images/payment/vietcombank.png" alt=""
                                        class="checkout__form-payment-img">
                                    <p>VietCombank</p>
                                </div>
                                <input type="checkbox" name="" id="" class="">
                            </div>

                            <form action="" class="payment-form">
                                <div class="form-group payment-form__credit-card">
                                    <input type="text" name="" id="" class="form-control ck-form-control"
                                        placeholder="Credit Card Number*">
                                </div>
                                <div class="form-group payment-form__expiry-date">
                                    <input type="text" name="" id="" class="form-control ck-form-control"
                                        placeholder="Expiry Date*">
                                    <input type="text" name="" id="" class="form-control ck-form-control"
                                        placeholder="CVC / CVV*">
                                </div>
                                <div class="form-group payment-form__card-holder">
                                    <input type="text" name="" id="" class="form-control ck-form-control"
                                        placeholder="Name of Cardholder*">
                                    <!-- <input type="text" name="" id="" class="form-control" placeholder="CVC / CVV*"> -->
                                </div>
                            </form>

                        </div>


                    </form>
                </div>

                <!-- Checkout form section right -->

                <div class="checkout__list">
                    <div class="checkout__article">
                        <h3 class="checkout__article-title">Article</h3>
                        <h3 class="checkout__article-total-title">Total</h3>
                    </div>
                    <div class="checkout__list-wrap">
                        <div class="checkout__item">
                            <div class="checkout__item-desc">
                                <img src="./assets/images/shopping-cart/blue-hot-trend-short.png" alt=""
                                    class="checkout__item-img">
                                <div class="checkout__item-infos">
                                    <p class="checkout__item-qty">1x</p>
                                    <p class="checkout__item-price">$59</p>
                                    <p class="checkout__item-name">Blue shorts</p>
                                    <p class="checkout__item-variant">Size: M</p>
                                </div>
                            </div>
                            <div class="checkout__item-total">$59</div>
                        </div>
                        <div class="checkout__item">
                            <div class="checkout__item-desc">
                                <img src="./assets/images/shopping-cart/blue-hot-trend-short.png" alt=""
                                    class="checkout__item-img">
                                <div class="checkout__item-infos">
                                    <p class="checkout__item-qty">1x</p>
                                    <p class="checkout__item-price">$59</p>
                                    <p class="checkout__item-name">Blue shorts</p>
                                    <p class="checkout__item-variant">Size: M</p>
                                </div>
                            </div>
                            <div class="checkout__item-total">$59</div>
                        </div>
                        <div class="checkout__item">
                            <div class="checkout__item-desc">
                                <img src="./assets/images/shopping-cart/blue-hot-trend-short.png" alt=""
                                    class="checkout__item-img">
                                <div class="checkout__item-infos">
                                    <p class="checkout__item-qty">1x</p>
                                    <p class="checkout__item-price">$59</p>
                                    <p class="checkout__item-name">Blue shorts</p>
                                    <p class="checkout__item-variant">Size: M</p>
                                </div>
                            </div>
                            <div class="checkout__item-total">$59</div>
                        </div>
                    </div>

                    <div class="checkout__item-all-total">
                        <div class="all-total__item">
                            <div class="all-total__item-title">Subtotal</div>
                            <div class="all-total__item-money">2.070.000</div>
                        </div>
                        <div class="all-total__item">
                            <div class="all-total__item-sub-title">Shipment</div>
                            <div class="all-total__item-shipment">103.500</div>
                        </div>
                        <div class="all-total__item">
                            <div class="all-total__item-ship-time">
                                Delivery time 2 - 4 working days
                            </div>
                        </div>
                    </div>

                    <div class="checkout__final">
                        <button class="checkout__final-button">Checkout</button>
                        <div class="checkout__final-policy">
                            <input type="checkbox" name="" id="" class="checkout__final-check-input">
                            <label for="" class="checkout__final-policy-text">T&C is simply dummy text of the
                                printing and typesetting industry</label>
                        </div>
                        <div class="checkout__final-money">
                            <h3 class="checkout__final-money-title">Total</h3>
                            <h3 class="checkout__final-money-value">$143,910.00</h3>
                        </div>
                        <div class="checkout__final-vat">
                            <h3 class="checkout__final-vat-title">(VAT)</h3>
                            <h3 class="checkout__final-vat-value">$7,195.00</h3>
                        </div>
                    </div>
                    <div class="checkout__payment">
                        <img src="./assets/images/payment/visa.png" alt="" class="checkout__payment-item">
                        <img src="./assets/images/payment/paypal.png" alt="" class="checkout__payment-item">
                        <img src="./assets/images/payment/mastercard.png" alt="" class="checkout__payment-item">
                        <img src="./assets/images/payment/maestro.png" alt="" class="checkout__payment-item">
                        <img src="./assets/images/payment/american express.png" alt="" class="checkout__payment-item">
                        <img src="./assets/images/payment/bitcoin.png" alt="" class="checkout__payment-item">
                        <img src="./assets/images/payment/CB.png" alt="" class="checkout__payment-item">
                        <img src="./assets/images/payment/Dmca.png" alt="" class="checkout__payment-item">
                    </div>
                </div>
            </div>

        </div>

    </div>