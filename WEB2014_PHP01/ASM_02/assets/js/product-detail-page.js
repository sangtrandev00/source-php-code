// import productsData from "./products-data.js"


console.log(window.location.search.substring("4"));

function renderDataDetailPage() {
    const popupElement = document.querySelector(".pop-up");
    popupElement.classList.add("display-none");
    const dataId = Number(window.location.search.substring("4"));
    console.log(dataId);
    console.log(productsData);
    const currentProduct = productsData.find(product => product.id === dataId);
    console.log(currentProduct);
    let categoryTitle = "";
    let breadcrumb = ""
    switch (currentProduct.cate) {
        case "formen":
            categoryTitle = "FOR MEN";
            breadcrumb = `Main / For Men / <span
            class="detail-product__sub-title--current">${currentProduct.title}</span>`;
            break;
        case "forwomen":
            categoryTitle = "FOR WOMEN";
            breadcrumb = `Main / For Women / <span
            class="detail-product__sub-title--current">${currentProduct.title}</span>`;
            break;
        case "forshoes":
            categoryTitle = "FOR SHOES";
            breadcrumb = `Main / For Shoes / <span
            class="detail-product__sub-title--current">${currentProduct.title}</span>`;
            break;
        default:
            break;
    }

    const detailProductTitle = document.querySelector(".detail-product__title");
    console.log(detailProductTitle);
    const detailProductSubTitle = document.querySelector(".detail-product__sub-title");
    console.log(detailProductSubTitle);
    const mainAvatar = document.querySelector(".main-product__avatar-img");
    // main-product__slide-item main-product__slide-item--current
    const mainProductSlideItemList = document.querySelectorAll(".main-product__slide-item");

    const mainProductName = document.querySelector(".main-product__name");
    const mainProductPrice = document.querySelector(".main-product__price");
    const mainProductInfo = document.querySelector(".main-product__info");
    detailProductTitle.innerText = categoryTitle;
    detailProductSubTitle.innerHTML = breadcrumb;

    // Add Images for Slide & Avatar
    mainAvatar.setAttribute("src", currentProduct.img[0]);

   for (let i = 0; i < mainProductSlideItemList.length; i++) {
        const mainProductSlideItem = mainProductSlideItemList[i];
        mainProductSlideItem.setAttribute("src",currentProduct.img[i]);
   }
   
    // Add Name Products
    mainProductName.innerText = currentProduct.title;
    // Add Price
    mainProductPrice.innerText = "$"+currentProduct.price;
    // Add Infomation
    mainProductInfo.innerText = currentProduct.desc;
}

function closePopup() {
    // pop-up__container-close-icon fa-solid fa-xmark
    const closePopupBtn = document.querySelector(".pop-up__container-close-icon");
    if(!closePopupBtn) return;
    closePopupBtn.addEventListener("click",()=> {
        document.querySelector(".pop-up").classList.add("display-none");
    })
}

closePopup();

// renderDataDetailPage();