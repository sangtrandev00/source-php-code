// <!-- js thong bao popup -->

function thongbaopopup(){
    document.getElementById("tbpopup-1").classList.toggle("active");
    }
    // ==================================
  

    // =========================Hiệu ứng vào giỏ hàng==================
    $(document).on("click",".addcard", function(e){
        // var curr =$(this).parents();
        // var tensp=curr.children("h5").eq(0).text();
        // var giasp=curr.children("h6").eq(0).text();
        // alert(giasp);
        // var curr =$(this).parents();
        // var src=curr.find("img").attr("src");
        // var tensp=curr.children("h5").eq(0).text();
        //  var giasp=curr.children("h6").eq(0).text();
     var curr =$(this).parents();
     var tensp=curr.children("h5").eq(0).text();
     var giasp=curr.children("h6").eq(0).text();
        e.preventDefault();
        if( $(this).hasClass('disable') ){
          alert("Sản Phẩm: " +tensp +' Giá: '+giasp+" đã được bạn chọn lại")
          return false;
      }
      
      $(this).addClass('disable');
    var parent=$(this).parents(".spdathang");
    var cart = $(document).find('#cart-shop');
    var src = parent.find('img').attr('src');
    var parTop = parent.offset().top;
    var parLeft = parent.offset().left;
        $('<img />',
         { class:"img-product",
           src: src, 
         })
          .appendTo('body').css({
              'top':parTop +parent.height() -60,
              'left':parLeft + parent.width() -200,
          });
          setTimeout(function(){
            $(document).find(".img-product").css({
                'top':cart.offset().top,
              'left':cart.offset().left,
            });
            setTimeout(function(){
                $(document).find('.img-product').remove();
              //  var citem=parseInt(cart.find('#count-item').data('count'))+1;
              //  cart.find('#count-item').text (' '+citem).data('count',citem)
            },500)
          },500);
      });

      // =====================Sp đi vào hover giỏ hàng============
//--------------------CART----------------------------------
const btn = document.querySelectorAll("button")
//console.log(btn)
btn.forEach(function(button,index){
    //console.log(button,index)
    button.addEventListener("click", function(event){
      var currr =$(this).parents();
      var parent1=$(this).parents(".spdathang");
        var btnItem = event.target
        // var product = btnItem.parentElement
        var productImg =parent1.find('img').attr('src')
        var productName = currr.children("h5").eq(0).text()
        var productPrice = currr.children("h6").eq(0).text();
        
        //console.log(productPrice,productImg,productName)
        addcart(productPrice,productImg,productName)
        console.log(productPrice)
    })
})
function  addcart(productPrice,productImg,productName){
    var addtr = document.createElement("tr")
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i=0; i<cartItem.length;i++){
      if( $(this).hasClass('disable') ){
        // alert("Sản Phẩm: " +tensp +' Giá: '+giasp+" đã có trong giỏ hàng")
        alert("Sản phẩm của bạn đã tồn tại trong giỏ hàng")
        return false;
    }
    
    $(this).addClass('disable');
        var productT = document.querySelectorAll(".title")
        if(productT[i].innerHTML == productName){
          // alert("Sản Phẩm: " +productName +' Giá: '+productPrice+'đ'+" đã có trong giỏ hàng")
            // alert("Sản phẩm của bạn đã tồn tại trong giỏ hàng")
            return
        }
    }
    var trcontent = ' <tr><td style="display: flex; align-items: center;"><img style="width: 90px" src="'+productImg+'"><span class="title">'+productName+'</span></td><td><p><span class="prices">'+productPrice+'</span><sup>đ</sup></p></td><td><input style="width: 30px; outline: none" stype="number" value="1" max="100"></td><td style="cursor: pointer;"><span class="cart-delete">Xóa</span></td></tr>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector("tbody")
    //console.log(cartTable)
    cartTable.append(addtr)

    carttotal()
    deleteCart()
}
//-------------------------------------------------------
function carttotal(){
  var cartItem = document.querySelectorAll("tbody tr")
  var totalC = 0
  //console.log(cartItem.length)
  for (var i=0; i<cartItem.length;i++){
      var inputValue = cartItem[i].querySelector("input").value
      //console.log(inputValue)
      var productPrice = cartItem[i].querySelector(".prices").innerHTML
       const bodauphay =productPrice.split(",");
       var bodauphay1 = document.querySelector(".price-total span").innerHTML = bodauphay;
      //console.log(productPrice)
      var totalA = inputValue*productPrice,
      //totalB = totalA.toLocaleString('de-DE')
      //console.log(totalB)
      totalC = totalC+totalA
      //totalD = totalC.toLocaleString('de-DE')
      console.log(totalA)
      //console.log(totalC)
      
  }
  var cartTotalA = document.querySelector(".price-total span")
  //nâng cao
  //var cartPrice = document.querySelector(".cart-icon span")
  bodauphay1.innerHTML = totalC.toLocaleString('de-DE') 
  //nâng cao
  //cartPrice.innerHTML = totalC.toLocaleString('de-DE')
  inputchange()
  //console.log(cartTotalA)
}
//--------------Deletet cart------------------------
function deleteCart(){
  var cartItem = document.querySelectorAll("tbody tr")
  for (var i=0; i<cartItem.length;i++){
      var productT = document.querySelectorAll(".cart-delete")
      productT[i].addEventListener("click",function(event){
          var cartDelete = event.target
          var cartitemR = cartDelete.parentElement.parentElement
          cartitemR.remove()
         carttotal()
          //console.log(cartitemR)
      })
  }
}
function inputchange(){
  var cartItem = document.querySelectorAll("tbody tr")
  for (var i=0; i<cartItem.length;i++){
      var inputValue = cartItem[i].querySelector("input")
     inputValue.addEventListener("change",function(){
         carttotal()
     })
  }
}
// =============chi tiết sản phẩm===============
$(() => {
  $('p img').hover(function(){
    let imgPath = $(this).attr('src');
    $('#main-img').attr('src', imgPath);
    // $('#anhtn').attr('src').css("border", "#1px solid red");
  })
}) 


// =========================SỐ LƯỢNG=========================
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})

// ===============LIKE=====================

    var button = document.getElementById('button1');
    //gán sự kiện click 
    button.addEventListener("click", function(){
        //Lấy tất cả các class của button và chuyển thành chuỗi
        var allClass = this.classList.toString();
        // kiểm tra nếu chưa tồn tại class active thì thêm class active
        if (allClass.indexOf('active') == -1) {
            this.classList += ' active';
        }
        //Thêm hoặc xóa class fa-thumbs-down
        this.classList.toggle("fa-thumbs-down");
    });
