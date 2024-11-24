function plusQuantity(n) {
    console.log("clicked");
    // main-product__quantity-control-item-number
    let quantityControlNumber = document.querySelector(".main-product__quantity-control-item-number");
    let currentNumber = Number(quantityControlNumber.innerText);
    console.log('currentNumber',currentNumber);
    if(currentNumber === 0) {
        document.querySelector(".main-product__quantity-control-item").setAttribute("disabled",true);
    }
    currentNumber+= Number(n);
    console.log('currentNumber',currentNumber);
    quantityControlNumber.innerText = currentNumber;
}

function changeColours() {
    // main-product__color-item main-product__color-item--dark-green main-product__color-item--acitve
    const colorItemList = document.querySelectorAll(".main-product__color-item");
    console.log(colorItemList);
    for(const colorItem of colorItemList) {
        
        colorItem.addEventListener("click",(e)=> {
            for(const colorItem of colorItemList) {
                colorItem.classList.remove("main-product__color-item--acitve");
            }
            e.target.classList.add("main-product__color-item--acitve");
        })
    }
}

function changeSizes() {
    // main-product__size-select main-product__size-select--active
    const sizeSelectList = document.querySelectorAll(".main-product__size-select");
    for(const size of sizeSelectList) {
        size.addEventListener("click",()=> {
            for(const size of sizeSelectList) {
                size.classList.remove("main-product__size-select--active");
            }
            size.classList.add("main-product__size-select--active");
        })
    }
}

function getParent(element, selector) {
    while (element.parentElement) {
      if (element.parentElement.matches(selector)) {
        return element.parentElement;
      }
      element = element.parentElement;
    }
}

function addToCart(event) {
    console.log(event.target);
    const popupElement = document.querySelector(".pop-up");
    popupElement.classList.remove("display-none");

    const currentProduct = getParent(event.target, ".main-product");
    const currentDataId = window.location.search.substring("4");
    
    const paramsString = window.location.search;
    const searchParams = new URLSearchParams(paramsString);
    console.log(searchParams.get('act'));
    console.log(searchParams.get('id'));
    const currentProductName = currentProduct.querySelector(".main-product__name").innerText;
    const currentProductPrice = currentProduct.querySelector(".main-product__price-new").innerText;
    const chosenProductColor = currentProduct.querySelector(".main-product__color-item.main-product__color-item--acitve").className;
    const currentImageUrl = currentProduct.querySelector(".main-product__avatar-img").getAttribute("src");
    
    let currentProductColor ="";
    switch (chosenProductColor) {
        case "main-product__color-item main-product__color-item--dark-red main-product__color-item--acitve":
            currentProductColor = "Dark Red";
            break;
        case "main-product__color-item main-product__color-item--dark-grey main-product__color-item--acitve":
            currentProductColor = "Dark Grey";
            break;
        case "main-product__color-item main-product__color-item--dark-blue main-product__color-item--acitve":
            currentProductColor = "Dark Blue";
            break;
        case "main-product__color-item main-product__color-item--dark-purple main-product__color-item--acitve":
            currentProductColor = "Dark Purple";
            break;
        case "main-product__color-item main-product__color-item--dark-green main-product__color-item--acitve":
            currentProductColor = "Dark Green";
            break;
        case "main-product__color-item main-product__color-item--dark-yellow main-product__color-item--acitve":
            currentProductColor = "Dark Yellow";
            break;
        default:
            break;
    }

    const choosenProductSize = currentProduct.querySelector(".main-product__size-select.main-product__size-select--active").innerText;
    console.log(choosenProductSize); 
    const currentProductQty = currentProduct.querySelector(".main-product__quantity-control-item-number").innerText;
    console.log(currentProductQty);
    
    // console.log(localStorage.hasOwnProperty(currentDataId));
    const uniqueId = "id" + Math.random().toString(16).slice(2);
    console.log('uniqueId',uniqueId);
    const currentProductData = {
        "id": currentDataId,
        "uid": uniqueId,
        "name": currentProductName,
        "price": currentProductPrice,
        "color": currentProductColor,
        "size": choosenProductSize,
        "quantity": currentProductQty,
        "imgUrl": currentImageUrl
    }
    
    // Add To Popup data.
    const popupImgProduct = document.querySelector(".pop-up__product-img");
    const popupNameProduct = document.querySelector(".pop-up__desc-title");
    const popupColorProduct = document.querySelector(".pop-up__desc-color-text");
    const popupSizeProduct = document.querySelector(".pop-up__desc-size-text");
    const popupPriceProductItem = document.querySelector(".pop-up__desc-price-text");
    const popupQtyProduct = document.querySelector(".pop-up__desc-qty-text");
    const popupPriceTotal = document.querySelector(".pop-up__desc-price-total-text");
    const popupTotalMoney = document.querySelector(".pop-up__desc-total-money-text");
    const popupShippingFee = document.querySelector(".pop-up__desc-shipping-fee-text");
    popupImgProduct.setAttribute("src",currentImageUrl);
    popupNameProduct.innerText = currentProductName;
    popupColorProduct.innerText = currentProductColor;
    popupSizeProduct.innerText = choosenProductSize;
    popupQtyProduct.innerText = currentProductQty;
    popupPriceProductItem.innerText = currentProductPrice;
    const totalItemProducts = Number(currentProductPrice.substring(1)) * Number(popupQtyProduct.innerText);

    popupPriceTotal.innerText = `$${totalItemProducts}`;
    popupTotalMoney.innerText = `$${totalItemProducts + Number(popupShippingFee.innerText.substring(1))}`;

    const popupContinueBtn = document.querySelector(".pop-up__buttons--continue");
    const popupCheckoutBtn = document.querySelector(".pop-up__buttons--checkout");
    const popupViewCartBtn = document.querySelector(".pop-up__buttons--view-cart");

    popupContinueBtn.addEventListener("click",()=> {
        window.location.reload();
    })
    popupCheckoutBtn.addEventListener("click",()=> {
        // window.location.assign("./index.php?act=thanhtoan");
    })
    popupViewCartBtn.addEventListener("click",()=> {
        window.location.assign("./index.php?act=shoppingcartpage");
    })
    // const productDataList = [];
    // if(localStorage.hasOwnProperty(currentDataId)) {
    //     const oldProductList = JSON.parse(localStorage.getItem(currentDataId));
    //     console.log("oldProductList",oldProductList);
    //     oldProductList.push(currentProductData);
    //     localStorage.setItem(currentDataId,JSON.stringify(oldProductList));
    // } else {
    //     productDataList.push(currentProductData);
    //     localStorage.setItem(currentDataId,JSON.stringify(productDataList));
    // }

    localStorage.setItem(uniqueId,JSON.stringify(currentProductData));
    
}




changeColours();
changeSizes();