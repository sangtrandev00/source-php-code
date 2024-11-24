

// section-products__sort-bar

const filterBarElement = document.querySelector(".section-products__sort-bar");
const filterBarElementText = document.querySelector(".section-products__sort-bar-text");
const filterByCateTitleIconList = document.querySelectorAll(".filter-by__cate-title-icon");
const filterByCateTitleList = document.querySelectorAll(".filter-by__cate-title");
const filterByCateList = document.querySelectorAll(".filter-by__cate-list");
// filterBarElement.innerText = "Filter by";

const filterSideBar = document.querySelector(".shop-content__side-bar");


// shop-content__main

// filterSideBar.style.display = "block";

filterBarElement.addEventListener("click",()=> {
    console.log("clicked");
    filterSideBar.classList.toggle("display-block");
    document.querySelector(".section-products__sort-bar-icon").classList.toggle("fa-chevron-right");
})

window.addEventListener('DOMContentLoaded', (event) => {
    // console.log('DOM fully loaded and parsed');
    filterBarElementText.innerText = "Filter By";
    // filterByCateTitleIcon.classList.add("fa-plus");
    for(const icon of filterByCateTitleIconList) {
        icon.classList.add("fa-plus");
    }
    console.log(filterByCateList)

    for(const filter of filterByCateList) {
        filter.classList.add("display-none");
    }

    for(const filterTitle of filterByCateTitleList) {
        filterTitle.addEventListener("click",()=> {
            filterTitle.nextElementSibling.classList.toggle("display-block");
            filterTitle.querySelector(".filter-by__cate-title-icon").classList.toggle("fa-plus")
        })
    }
});