console.log("hello");

function renderScrollTopElement() {
    // how to render scroll top element.
    // that is a big story.

    const scrollTopDiv = document.createElement('div');
    scrollTopDiv.id = 'scrollTop';
    const scrollTopElement = document.getElementById('scrollTop');
    scrollTopElement.innerHTML = `<i class="fa-solid fa-chevron-up scroll-top-icon"></i>`;
}

function ScrollTop() {

    const crollTopElement = document.getElementById('scrollTop');


    window.addEventListener('scroll', function() {
        var scrolled = window.scrollY;
        if(scrolled > 200) {
            crollTopElement.classList.remove('display-none');
        //    appearHeaderNav.style.display = 'block';
        }
        else {
            crollTopElement.classList.add('display-none');
        }
    })

    crollTopElement.addEventListener('click', () => {
        document.documentElement.scrollTop = 0;
    })
}


(() => {
    renderScrollTopElement();
    ScrollTop();
    // preventDefaultATag();
})()


function closeModal() {
    document.querySelector(".modal__exit-icon").addEventListener("click",()=> {
        document.getElementById("modal").style.display = "none";
    })
}

closeModal();

// Menu dropdown javascript

// const mobileMenuIcon = document.querySelector("")

document.querySelector(".navbar__right-section-moible-menu").addEventListener("click",()=> {
    console.log("hello click");
    document.querySelector(".menu-responsive").classList.toggle("display-block")
})

const menuResponsiveItemLinks = document.querySelectorAll(".menu-responsive__item-link");

for(const menuItemLink of menuResponsiveItemLinks) {
    menuItemLink.addEventListener("click",(e)=> {
        e.preventDefault();

        e.currentTarget.nextElementSibling.classList.toggle("display-block");
        // fa-solid fa-chevron-down menu-responsive__item-icon-right
        // fa-solid fa-chevron-right menu-responsive__item-icon-right
        e.currentTarget.querySelector(".menu-responsive__item-icon-right").classList.toggle("fa-chevron-right");
        
    })
}

function reloadToCartPage() {
    // navbar__cart-icon fa-solid fa-cart-shopping mobile-navbar__icon
    document.querySelector(".navbar__cart-icon").addEventListener("click",()=> {
        window.location.assign("./shopping-cart-page.html");
    });
}

function handleClickProductItem() {
    const productItemList = document.querySelectorAll(".product-item");
    console.log(productItemList);
  
    for(const product of productItemList) {
      product.addEventListener("click",(e)=> {
        console.log(e.currentTarget);
        const currentProduct = e.currentTarget;
        const dataId = currentProduct.getAttribute("data-id");
        window.location.assign(`./product-detail-page.html?id=${dataId}`);
      })
    }
}

function countNumberCartItems() {
    const navbarCartCountElement = document.querySelector(".navbar__cart-count");
    // const numberCartItemsFromLocal = Number(localStorage.getItem(""));
    const allCartItems = { ...localStorage };
    console.log(allCartItems);
    const CartItemList = Object.values(allCartItems).map((cartItem) => JSON.parse(cartItem));
    const flatCartItemList = CartItemList.flat();
    console.log(flatCartItemList);
    // const numberCartItems = 
    navbarCartCountElement.innerText = `${flatCartItemList.length}`.padStart(2,"0");
}


function backToPreviousPage() {
    const backToPrevPageIcon = document.querySelector(".previous-page-icon");
    if(!backToPrevPageIcon) return;
    backToPrevPageIcon.addEventListener("click",()=> {
        console.log("hihi")
        history.back();
    })
}
backToPreviousPage();

countNumberCartItems();
  
handleClickProductItem();

reloadToCartPage();