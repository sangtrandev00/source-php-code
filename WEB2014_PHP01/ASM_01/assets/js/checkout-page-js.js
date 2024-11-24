

function showCheckoutCart() {
    const checkoutListContainer = document.querySelector(".checkout__list-wrap");
    // Read from localstorage

    const allCartItems = { ...localStorage };
    const CartItemList = Object.values(allCartItems).map((cartItem) => JSON.parse(cartItem));
    const flatCartItemList = CartItemList.flat();
    console.log(flatCartItemList);
    let checkoutListHtml = "";
    for(const item of flatCartItemList) {
        checkoutListHtml+= `
            <div class="checkout__item" product-id=${item.id} unique-id=${item.uid}>
                <div class="checkout__item-desc">
                    <div class="checkout__item-img-wrap">
                        <img src=${item.imgUrl} alt=""
                        class="checkout__item-img">
                    </div>
                    <div class="checkout__item-infos">
                        <p class="checkout__item-qty">${item.quantity}x</p>
                        <p class="checkout__item-price">$${item.price}</p>
                        <p class="checkout__item-name">${item.name}</p>
                        <p class="checkout__item-variant">Size: ${item.size}, Color: ${item.color}</p>
                    </div>
                </div>
                <div class="checkout__item-total">$${Number(item.price.substring(1)) * Number(item.quantity)}</div>
            </div>
        `
    }

    checkoutListContainer.innerHTML = checkoutListHtml;

    calcCheckoutCart();

}

function calcCheckoutCart() {

    const checkoutItemMoneyList = Array.from(document.querySelectorAll(".checkout__item-total"));
    console.log(checkoutItemMoneyList);
    const checkoutMoneyList = checkoutItemMoneyList.map((item)=> Number(item.innerText.substring(1)));
    console.log('checkoutMoneyList',checkoutMoneyList)
    const subTotalMoney = checkoutMoneyList.reduce((prev,curr)=> prev+curr);
    const subTotalMoneyElement = document.querySelector(".all-total__item-money");
    subTotalMoneyElement.innerText = subTotalMoney.toFixed(2);

    const shipmentElement = document.querySelector(".all-total__item-shipment"); 
    const finalTotalElement = document.querySelector(".checkout__final-money-value");
    const finalTotalMoney = Number(shipmentElement.innerText) +subTotalMoney
    finalTotalElement.innerText = `$${finalTotalMoney}`;
    
    const vatElement = document.querySelector(".checkout__final-vat-value");
    vatElement.innerText = `$${finalTotalMoney * 10 / 100}`;
}

function showOrderCompleted() {
    const checkoutBtn = document.querySelector(".checkout__final-button");
    checkoutBtn.addEventListener("click",()=> {
        window.location.assign("./order-completed-page.html");
    });
}

showOrderCompleted();
showCheckoutCart();