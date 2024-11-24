
// import productsData from "./products-data.js"

// const womenProducts = productsData.filter((product) => product.cate === "forwomen"); 
// const menProducts = productsData.filter((product) => product.cate === "formen"); 
// const shoesProducts = productsData.filter((product) => product.cate === "forshoes"); 

// function addData(categoryClassName) {

//   let targetProducts = [];
//   switch (categoryClassName) {
//     case ".for-women":
//       targetProducts = womenProducts;
//       break;
//     case ".for-men":
//       targetProducts = menProducts;
//       break;
//     case ".for-shoes":
//       targetProducts = shoesProducts;
//       break;
//     default:
//       break;
//   }
//   // let targetProducts = productsData;

//   const targetProductSection = document.querySelector(categoryClassName);
//   const productList = targetProductSection.querySelectorAll(".product-item");

//   for(let i = 0;i <productList.length; i++) {
//     const productAvatar = productList[i].querySelector(".product-item__img-img");
//     const productName = productList[i].querySelector(".product-item__name");
//     const productNewPrice = productList[i].querySelector(".product-item__price-new");
//     productList[i].setAttribute("data-id",targetProducts[i].id);
//     productAvatar.setAttribute("src",targetProducts[i].img[0]);
//     productName.innerText = targetProducts[i].title;
//     productNewPrice.innerText = "$"+targetProducts[i].price.toFixed(2);
//   }

// }

// addData(".for-women");
// addData(".for-men");
// addData(".for-shoes");


