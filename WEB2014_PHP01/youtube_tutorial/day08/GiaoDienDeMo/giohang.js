var keyLocalStorageItemGioHang = 'danhSachItemGioHang';
/**yêu cầu tạo ra đối tượng item vào giỏ hàng
 * input id SanPham, soLuong
 * output: đối tượng item giỏ hàng
 */
function TaoDoiTuongItemGioHang(idSanPham, soLuong){
    var itemGioHang = new Object()
    itemGioHang.idSanPham = idSanPham;
    itemGioHang.soLuong = soLuong;
    return itemGioHang;
}

/*
yêu cầu lấy ra toàn bộ các item giỏ hàng được lưu trữ trong local storage
input:
output:danh sách toàn bộ item giỏ hàng lưu trữ trong local storage
*/ 

// console.log(TaoDoiTuongItemGioHang('123',20));
function layDanhSachItemGioHang(){
    var danhSachItemGioHang = new Array();
    // bước 1: lấy chuỗi json lưu trữ trong local storage
    var jsonDanhSachItemGioHang = localStorage.getItem(keyLocalStorageItemGioHang);

    // bước 2: chuyển từ json qua danh sách item giỏ hàng
    
    if (jsonDanhSachItemGioHang == null)
    danhSachItemGioHang = JSON.parse(jsonDanhSachItemGioHang);
    return danhSachItemGioHang;
} 
