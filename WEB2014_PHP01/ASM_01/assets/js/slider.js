 // Slider section javascript

 let slideIndex = 1;
 showSlides(slideIndex);

 function plusSlides(n) {
   showSlides(slideIndex += n);
 }

 function currentSlider(n) {
   showSlides(slideIndex = n);
 }

 // Click button to slide animate

 function showSlides(n) {
     let slides = document.querySelectorAll(".slider__item");
     let dots = document.querySelectorAll(".slider__dot");
     let i;
     if (n > slides.length) {slideIndex = 1}    
     if (n < 1) {slideIndex = slides.length}
     
     // Cho ẩn tất cả các slide ?
     for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
     }
     for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" active", "");
     }

     slides[slideIndex-1].style.display = "block";  
     dots[slideIndex-1].className += " active";
 }

 // Automate slider

 setInterval(()=> {
     slideIndex++;
     showSlides(slideIndex);
 },5000)

 // Popup email modal marketing
 // Show modal affter 5s
 setTimeout(()=> {
     document.getElementById("modal").style.display = "flex";
 },5000);

