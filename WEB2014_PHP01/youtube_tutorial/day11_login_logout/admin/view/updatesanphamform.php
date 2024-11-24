 <!-- Functions -->
 <section>
     <!-- CRUD here !!! -->
     <h2>UPDATE SẢN PHẨM</h2>

     <form action="index.php?act=sanpham_update" method="post" enctype="multipart/form-data">
         <select name="iddanhmuc" id="">
             <option value="0">Chọn danh mục</option>
             <?php
$iddanhmuc_curr = $spct[0]['iddanhmuc'];
if (isset($dsdm)) {
    foreach ($dsdm as $dm) {
        if ($dm['id'] == $iddanhmuc_curr) {
            echo ' <option value="' . $dm['id'] . '"selected >' . $dm['tendanhmuc'] . '</option>';
        } else {
            echo ' <option value="' . $dm['id'] . '" >' . $dm['tendanhmuc'] . '</option>';
        }
    }
}
?>
         </select>
         <input type="text" name="tensp" id="" placeholder="ten san pham ..." value="<?=$spct[0]['tensp']?>">
         <input type="file" name="hinhanh" id="" placeholder="">
         <img src="<?=$spct[0]['hinhanh']?>" width="80" alt="">
         <input type="text" name="gia" id="" placeholder="gia san pham ..." value="<?=$spct[0]['gia']?>">
         <input type="hidden" name="id" value="<?=$spct[0]['id']?>">
         <input type="submit" name="capnhat" value="Cập nhật">
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