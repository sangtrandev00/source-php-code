

function goToHome() {
    document.querySelector(".order-completed__button").addEventListener("click",()=> {
        window.location.assign("./index.html");
    })
}

goToHome();