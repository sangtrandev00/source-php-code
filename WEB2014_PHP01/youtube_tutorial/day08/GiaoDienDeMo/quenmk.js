function kiemtra() {
    var loi = "";
    //kiểm tra email
    var email= document.getElementById("email");    
if(email.value==""){   
    email.className="loi";
    loi += "Email không được bỏ trống.<br>";
}
    // trả về giá trị kiểm tra
    if(loi!=""){
        document.getElementById('baoloi').innerHTML="<p>" + loi + "</p>";
        return false;
    }
}