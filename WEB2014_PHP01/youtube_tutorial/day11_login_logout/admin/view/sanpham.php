 <!-- Functions -->
 <section>
     <!-- CRUD here !!! -->
     <h2>SẢN PHẨM</h2>

     <form action="index.php?act=addsanpham" method="post" enctype="multipart/form-data">
         <select name="iddanhmuc" id="">
             <option value="0">Chọn danh mục</option>
             <?php
if (isset($dsdm)) {
    foreach ($dsdm as $dm) {
        # code...
        echo ' <option value="' . $dm['id'] . '">' . $dm['tendanhmuc'] . '</option>';
    }
}
?>
         </select>
         <input type="text" name="tensp" id="" placeholder="ten san pham ...">
         <input type="file" name="hinhanh" id="" placeholder="">
         <input type="text" name="gia" id="" placeholder="gia san pham ...">
         <input type="submit" name="themmoi" value="Thêm mới">
     </form>
     <br>
     <table>
         <tr>
             <th>STT</th>
             <th>Tên sản phẩm</th>
             <th>Hình ảnh</th>
             <th>Giá</th>
             <th>Hành động</th>
         </tr>
         <?php
// var_dump($kq);

?>
         <?php
//  Tại sao count > 1 ???? --> Nếu nó không lớn hơn 1 có được hay không.
if (isset($dssp) && count($dssp) > 0) {
    $i = 1;
    foreach ($dssp as $itemsp) {
        # code...
        echo '
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $itemsp['tensp'] . '</td>
                        <td><img src="' . $itemsp['hinhanh'] . '" width="100px"/></td>
                        <td>' . $itemsp['gia'] . '</td>
                        <td><a href="index.php?act=update_sanphamform&id=' . $itemsp['id'] . '">Sửa</a> | <a href="index.php?act=delete_sanpham&id=' . $itemsp['id'] . '">Xóa</a></td>
                    </tr>
                    ';
        $i++;
    }
} else {
    echo "No thing in sql";
}
?>
         <!-- <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td><a href="">Sửa</a> | <a href="">Xóa</a></td>
         </tr> -->
     </table>

 </section>