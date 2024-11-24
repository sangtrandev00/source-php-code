   <!-- Shopping cart section section -->

   <div class="shopping-cart">
       <div class="grid wide">
           <h2 class="shopping-cart__heading section-heading">Shopping Cart</h2>
           <h3 class="shopping-cart__sub-heading"><i class="previous-page-icon fa-solid fa-arrow-left-long"></i>
               <span>Continue
                   Shopping</span>
           </h3>
           <div class="shopping-cart__section">
               <form action="./index.php?act=updatecart" method="post">
                   <div class="shopping-cart__table-wrap">
                       <table class="shopping-cart__table">
                           <thead>
                               <tr class="shopping-cart__table-row" style="border: 1px solid #000">
                                   <th width=300 class="shopping-cart__table-heading ">Name Product</th>
                                   <th class="shopping-cart__table-heading">Price</th>
                                   <th class="shopping-cart__table-heading">Qty</th>
                                   <th class="shopping-cart__table-heading" colspan="2"> Total Money</th>
                                   <!-- <th class="shopping-cart__table-heading"></th> -->
                               </tr>
                           </thead>
                           <tbody>
                               <?php
$cartlist = $_SESSION['giohang'];
// var_dump($cartlist);
$idsp = $cartlist[0];

$sum = 0;
$shipping = 5;

$i = 0;
foreach ($cartlist as $cartitem) {
    # code...

    $totalcartitem = $cartitem[3] * $cartitem[4];
    $sum += $totalcartitem;
    echo '
                                <tr class="shopping-cart__table-row" style="border: 1px solid #000">
                                <td class="shopping-cart__table-cell">
                                    <div class="shopping-cart__product">
                                        <img src="' . $cartitem[2] . '" alt=""
                                            class="shopping-cart__product-img">
                                        <div class="shopping-cart__product-info">
                                            <a href="./index.php?act=detailpage&id=' . $cartitem[0] . '" class="shopping-cart__product-name">' . $cartitem[1] . '</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="shopping-cart__table-cell shopping-cart__table-cell--price">$' . $cartitem[3] . '</td>
                                <td class="shopping-cart__table-cell shopping-cart__table-cell--count">
                                    <div class="shopping-cart__quantity-control">
                                        <span class="shopping-cart__quantity-control-item"><i
                                                class="fa-solid fa-minus" onclick="plusQty(-1)"></i></span>
                                        <span class="shopping-cart__quantity-control-item-number">' . $cartitem[4] . '</span>
                                        <span class="shopping-cart__quantity-control-item" onclick="plusQty(1)"><i
                                                class="fa-solid fa-plus"></i></span>
                                    </div>
                                </td>
                                <td class="shopping-cart__table-cell shopping-cart__table-cell--delete">$ <span class="shopping-cart__table-cell--total-item">' . $totalcartitem . '</span>
                                <a href="./index.php?act=deletecart&idcart=' . $i . '"> <i class="shopping-cart__table-cell-trash-icon fa-solid fa-trash"></i> </a>
                                </td>
                                <input type="hidden" class="quantity-hidden-item" name="qtyhidden[]" value="' . $cartitem[4] . '"=>
                                <input type="hidden" name="">
                            </tr>
                                ';
    $i++;
}
?>

                           </tbody>

                       </table>
                       <a href="./index.php?act=shoppage" class="continue-shopping-btn btn"> <i class="fa fa-arrow-left"
                               aria-hidden="true"></i> TIẾP TỤC XEM SẢN PHẨM</a>
                       <input type="submit" name="updatecartbtn" class="update-shopping-cart-btn btn"
                           value="CẬP NHẬT GIỎ HÀNG">
               </form>
           </div>
           <div class="shopping-cart__checkout">
               <form action="./index.php?act=checkoutpage" method="post">
                   <div class="checkout">
                       <div class="checkout__coupon">
                           <div class="checkout__coupon-title">
                               <h3 class="checkout__coupon-title-text">Do you have a voucher?</h3>
                               <span>(Optional)</span>
                           </div>
                           <div class="checkout__coupon-buttons">
                               <button class="checkout__coupon-button checkout__coupon-button--enter-the-code">
                                   Enter the code
                               </button>
                               <button class="checkout__coupon-button checkout__coupon-button--redeem">
                                   Redeem
                               </button>
                           </div>


                       </div>

                       <div class="checkout__total">
                           <div class="checkout__total-header">
                               <span class="checkout__total-header-title">Subtotal</span>
                               <span class="checkout__total-header-count">$<?php echo $sum ?></span>
                           </div>
                           <div class="checkout__total-sub-header">
                               <span class="checkout__total-sub-header-title">Shipping</span>
                               <span class="checkout__total-sub-header-count">$<?php echo $shipping ?></span>
                           </div>
                       </div>

                       <div class="checkout__total-shipment">
                           <h3 class="checkout__total-shipment-title">Total <span>(VAT Included)</span></h3>
                           <div class="checkout__total-shipment-amount">$<?php echo $sum + $shipping ?></div>
                       </div>

                       <input type="submit" value="Safe to checkout" class="checkout__safe-btn" />

                       <div class="checkout__payment">
                           <img src="./assets/images/payment/visa.png" alt="" class="checkout__payment-item">
                           <img src="./assets/images/payment/paypal.png" alt="" class="checkout__payment-item">
                           <img src="./assets/images/payment/mastercard.png" alt="" class="checkout__payment-item">
                           <img src="./assets/images/payment/maestro.png" alt="" class="checkout__payment-item">
                           <img src="./assets/images/payment/american express.png" alt=""
                               class="checkout__payment-item">
                           <img src="./assets/images/payment/bitcoin.png" alt="" class="checkout__payment-item">
                           <img src="./assets/images/payment/CB.png" alt="" class="checkout__payment-item">
                           <img src="./assets/images/payment/Dmca.png" alt="" class="checkout__payment-item">
                       </div>

                   </div>



               </form>
           </div>

       </div>

       <div class="upsell-product">
           <h2 class="upsell-product__heading section-heading">You May also like</h2>
           <div class="upsell-product__list">
               <div class="product-list">
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
                               <span class="product-item__price-old">$19.00</span>
                               <span class="product-item__price-new">$14.00</span>
                           </div>

                           <div class="product-item__rating-stars">
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                           </div>

                       </div>
                   </div>
                   <div class="product-item">
                       <p class="product-item__bandage">New Arrival</p>
                       <p class="product-item__sold-quantity">12 sold</p>
                       <div class="product-item__img-container">
                           <img src="./assets/images/for-men/organinc cotton shirt.png" alt=""
                               class="product-item__img-img">
                           <p class="product-item__img-quick-view">
                               Quick View
                           </p>
                       </div>
                       <div class="product-item__body">
                           <h3 class="product-item__name">Running Shorts</h3>
                           <span class="product-item__divider"></span>
                           <div class="product-item__price">
                               <span class="product-item__price-old">$18.00</span>
                               <span class="product-item__price-new">$15.00</span>
                           </div>

                           <div class="product-item__rating-stars">
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                           </div>

                       </div>
                   </div>
                   <div class="product-item">
                       <p class="product-item__bandage">New Arrival</p>
                       <p class="product-item__sold-quantity">12 sold</p>
                       <div class="product-item__img-container">
                           <img src="./assets/images/for-women/running short dark grey.png" alt=""
                               class="product-item__img-img">
                           <p class="product-item__img-quick-view">
                               Quick View
                           </p>
                       </div>
                       <div class="product-item__body">
                           <h3 class="product-item__name">Running Shorts</h3>
                           <span class="product-item__divider"></span>
                           <div class="product-item__price">
                               <span class="product-item__price-old">$14.00</span>
                               <span class="product-item__price-new">$11.00</span>
                           </div>

                           <div class="product-item__rating-stars">
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                           </div>

                       </div>
                   </div>
                   <div class="product-item">
                       <p class="product-item__bandage">New Arrival</p>
                       <p class="product-item__sold-quantity">12 sold</p>
                       <div class="product-item__img-container">
                           <img src="./assets/images/for-men/swim-shorts.png" alt="" class="product-item__img-img">
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
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--yellow fa-solid fa-star"></i>
                               <i
                                   class="product-item__rating-icon product-item__rating-icon--black fa-solid fa-star"></i>
                           </div>

                       </div>
                   </div>
                   <!-- Control buttons -->

                   <div class="control-btn control__next-btn product-item__next-btn hide-on-tablet-mobile">
                       <i class="control-btn-icon fa-solid fa-chevron-right fa-xl"></i>
                   </div>
                   <div class="control-btn control__prev-btn product-item__prev-btn hide-on-tablet-mobile">
                       <i class="control-btn-icon fa-solid fa-chevron-left fa-xl"></i>
                   </div>

               </div>
           </div>
       </div>


       <!-- Recently view products -->
       <div class="recent-products">
           <h2 class="recent-products__title section-heading">RECENTLY VIEW PRODUCTS</h2>
           <div class="product-list">
               <div class="product-item">
                   <p class="product-item__bandage">New Arrival</p>
                   <p class="product-item__sold-quantity">12 sold</p>
                   <div class="product-item__img-container">
                       <img src="./assets/images/for-women/seamless bra 3.png" alt="" class="product-item__img-img">
                       <p class="product-item__img-quick-view">
                           Quick View
                       </p>
                   </div>
                   <div class="product-item__body">
                       <h3 class="product-item__name">Running Shorts</h3>
                       <span class="product-item__divider"></span>
                       <div class="product-item__price">
                           <span class="product-item__price-old">$20.00</span>
                           <span class="product-item__price-new">$18.00</span>
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
                       <img src="./assets/images/for-women/running short dark grey.png" alt=""
                           class="product-item__img-img">
                       <p class="product-item__img-quick-view">
                           Quick View
                       </p>
                   </div>
                   <div class="product-item__body">
                       <h3 class="product-item__name">Running Shorts</h3>
                       <span class="product-item__divider"></span>
                       <div class="product-item__price">
                           <span class="product-item__price-old">$21.00</span>
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
                           <span class="product-item__price-old">$18.00</span>
                           <span class="product-item__price-new">$14.00</span>
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
                       <img src="./assets/images/for-women/Running Shorts img.png" alt="" class="product-item__img-img">
                       <p class="product-item__img-quick-view">
                           Quick View
                       </p>
                   </div>
                   <div class="product-item__body">
                       <h3 class="product-item__name">Running Shorts</h3>
                       <span class="product-item__divider"></span>
                       <div class="product-item__price">
                           <span class="product-item__price-old">$14.00</span>
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

   </div>
   </div>

   <?php

?>