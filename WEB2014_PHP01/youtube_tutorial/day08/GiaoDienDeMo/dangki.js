function kiemtra() {
    var loi = "";
    // kiểm tra tên đăng nhập : text + length
    var tdn = document.getElementById("tendangnhap");
if(tdn.value==""){
    tdn.className="loi";        
    loi += "Tên đăng nhập không được bỏ trống<br>";
}
else if(tdn.value.length<=6){
    tdn.className="loi";       
    loi += "Tên đăng nhập quá ngắn<br>";        
}
else if(tdn.value.length>10){
    tdn.className="loi";       
    loi += "Tên đăng nhập quá dài<br>";        
}
else tdn.className="txt";   

    // kiểm tra mật khẩu : text + length 
    var mk = document.getElementById("matkhau");
if(mk.value==""){
    mk.className="loi";        
    loi += "Mật khẩu không được bỏ trống<br>";
}
else if(mk.value.length<=6){
    mk.className="loi";       
    loi += "Mật khẩu quá ngắn<br>";        
}
else if(mk.value.length>20){
    mk.className="loi";       
    loi += "Mật khẩu quá dài<br>";        
}
else mk.className="txt";  

    // kiểm tra họ tên : text
    var hoten= document.getElementById("hoten");        
if(hoten.value==""){ 
    hoten.className="loi"; 
    loi += "Họ và tên không được bỏ trống.<br>"; 
}
else hoten.className="txt"; 

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