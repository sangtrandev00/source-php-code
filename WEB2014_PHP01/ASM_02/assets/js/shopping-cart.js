function getParent(element, selector) {
    while (element.parentElement) {
      if (element.parentElement.matches(selector)) {
        return element.parentElement;
      }
      element = element.parentElement;
    }
}

function showCart() {
    const table = document.querySelector("table.shopping-cart__table").querySelector("tbody");
    // Read from localstorage

    const allCartItems = { ...localStorage };
    console.log(allCartItems);
    const CartItemList = Object.values(allCartItems).map((cartItem) => JSON.parse(cartItem));
    console.log(CartItemList);
    const flatCartItemList = CartItemList.flat();
    console.log(flatCartItemList);
    let tbodyHtml = "";
    for(const item of flatCartItemList) {
        tbodyHtml+= `
        <tr class="shopping-cart__table-row" product-id=${item.id} unique-id=${item.uid}>
            <td class="shopping-cart__table-cell">
                <div class="shopping-cart__product">
                    <img src=${item.imgUrl} alt=""
                        class="shopping-cart__product-img">
                    <div class="shopping-cart__product-info">
                        <a href="" class="shopping-cart__product-name">${item.name}</a>
                        <p class="shopping-cart__product-desc">Size: <span
                                class="shopping-cart__product-desc-size">${item.size}</span>, <span
                                class="shopping-cart__product-desc-color">Color: ${item.color}</span>
                        </p>
                    </div>
                </div>
            </td>
            <td class="shopping-cart__table-cell shopping-cart__table-cell--price">${item.price}</td>
            <td class="shopping-cart__table-cell shopping-cart__table-cell--count">
                <div class="shopping-cart__quantity-control">
                    <span class="shopping-cart__quantity-control-item shopping-cart__quantity-control-item--minus" onclick="plusQty(-1)"><i
                            class="fa-solid fa-minus"></i></span>
                    <span class="shopping-cart__quantity-control-item-number">${item.quantity}</span>
                    <span class="shopping-cart__quantity-control-item shopping-cart__quantity-control-item--plus" onclick="plusQty(+1)"><i
                            class="fa-solid fa-plus"></i></span>
                </div>
            </td>
            <td class="shopping-cart__table-cell shopping-cart__table-cell--delete" >
                <span class="shopping-cart__table-cell--delete-number">$19.00</span>
                <i class="shopping-cart__table-cell-trash-icon fa-solid fa-trash" onclick="deleteProductItem(event)"></i>
            </td>
        </tr>
    `
    }
    table.innerHTML = tbodyHtml;

    calcMoneyCart();
}

function calcMoneyCart() {
    const tableCart = document.querySelector("table.shopping-cart__table").querySelector("tbody");

    const rowProductItemList = tableCart.querySelectorAll("tr.shopping-cart__table-row");
    console.log(rowProductItemList)
    rowProductItemList.forEach((rowItem)=> {
        const priceItem = rowItem.cells[1];
        console.log(priceItem)
        const priceItemMoney = Number(priceItem.innerText.substring(1));
        console.log('priceItemMoney',priceItemMoney)

        const qtyItem = rowItem.querySelector(".shopping-cart__quantity-control-item-number");
        const qtyNumber = Number(qtyItem.innerText);
        console.log(qtyNumber);

        const totalRowItem = rowItem.querySelector(".shopping-cart__table-cell--delete-number");
        const totalRowMoney = Number(totalRowItem.innerText.substring(1));
        console.log(totalRowMoney)
        totalRowItem.innerText = "$"+ (priceItemMoney * qtyNumber).toFixed(2);

    })

    const finalTotalNoTaxElement = document.querySelector(".checkout__total-header-count");
    const totalRowMoneyList = Array.from(document.querySelectorAll(".shopping-cart__table-cell--delete-number"));
    console.log('totalRowMoneyList',totalRowMoneyList);
    const totalRowMoneyNumberList = totalRowMoneyList.map((rowItem) => Number(rowItem.innerText.substring(1)));
    const finalTotalNoTax = totalRowMoneyNumberList.reduce((prevValue, currValue) =>prevValue + currValue);
    console.log('finalTotalNoTax',finalTotalNoTax)
    finalTotalNoTaxElement.innerText = "$" + finalTotalNoTax.toFixed(2);

    const finalTotalHasTaxElement = document.querySelector(".checkout__total-shipment-amount");
    const taxFee = Number(document.querySelector(".checkout__total-sub-header-count").innerText.substring(1));
    const finalTotalHasTax = taxFee + finalTotalNoTax;
    finalTotalHasTaxElement.innerText = "$" +finalTotalHasTax.toFixed(2);
}

function plusQty(n) {
    console.log('this',event.currentTarget);
    const rowProductItem = getParent(event.currentTarget,"tr.shopping-cart__table-row");
    console.log(rowProductItem);
    // shopping-cart__table-cell shopping-cart__table-cell--count
    const quantity = rowProductItem.querySelector(".shopping-cart__quantity-control-item-number");
    const priceElement = rowProductItem.querySelector(".shopping-cart__table-cell--price");

    const priceValue =Number(priceElement.innerText.substring(1));
    console.log(quantity);
    let currentNumber = Number(quantity.innerText);

    if(currentNumber === 0) {
        document.querySelector(".main-product__quantity-control-item").setAttribute("disabled",true);
    }

    currentNumber+= Number(n);
    
    const totalMoneyItem = currentNumber * priceValue;
    // console.log('totalMoneyItem',totalMoneyItem);
    quantity.innerText = currentNumber;
    const totalMoneyElement = rowProductItem.querySelector(".shopping-cart__table-cell--total-item");
    totalMoneyElement.innerText = totalMoneyItem;
    rowProductItem.querySelector(".quantity-hidden-item").value = currentNumber;

    const totalItemList = document.querySelectorAll(".shopping-cart__table-cell--total-item");
    let sumSubTotal = 0;
    for(const totalItem of totalItemList) {
        sumSubTotal+= Number(totalItem.innerText);
    }

    const subtotalAllItem = document.querySelector(".checkout__total-header-count");
    subtotalAllItem.innerText = "$"+sumSubTotal;
    // const subtotalAllItemMoney = Number(subtotalAllItem.innerText.substring(1));
    const shippingFee = Number(document.querySelector(".checkout__total-sub-header-count").innerText.substring(1));
    const finalTotalMoney = shippingFee + sumSubTotal;
    const finaltotalAllItem = document.querySelector(".checkout__total-shipment-amount");
    finaltotalAllItem.innerText = "$"+finalTotalMoney;
    
    // calcMoneyCart();
}

function deleteProductItem(event) {
    const rowProductItem = getParent(event.currentTarget,"tr.shopping-cart__table-row");
    console.log(rowProductItem)
    const currentDataId = rowProductItem.getAttribute("unique-id");
    localStorage.removeItem(currentDataId);
    rowProductItem.remove();
}

function checkOut() {
    const safeCheckoutBtn = document.querySelector(".checkout__safe-btn");
    safeCheckoutBtn.addEventListener("click",()=> {
        // console.log("Hello ")
        window.location.assign("./checkout-page.html");
    })
}

checkOut();

// showCart();