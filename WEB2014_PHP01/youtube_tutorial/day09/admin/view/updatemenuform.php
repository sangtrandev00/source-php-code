 <!-- Functions -->
 <section>
     <!-- CRUD here !!! -->
     <h2>CẬP NHẬT DANH MỤC</h2>
     <?php
echo var_dump($kqone);
?>
     <!-- <p>Hi ! Everyone, My name is Sang!!!</p> -->

     <form action="index.php?act=updatemenuform" method="post">
         <input type="text" name="tendanhmuc" id="" value="<?php echo $kqone[0]['tendanhmuc'] ?>">
         <input type="hidden" name="id" value="<?php echo $kqone[0]['id'] ?>">
         <input type="submit" name="themmoi" value="Cập nhật">
     </form>
     <br>
     <table>
         <tr>
             <th>STT</th>
             <th>Tên danh mục</th>
             <th>Ưu tiên</th>
             <th>Hiển thị</th>
             <th>Hành động</th>
         </tr>

         <?php
// var_dump($kq);
?>
         <?php
//  Tại sao count > 1 ???? --> Nếu nó không lớn hơn 1 có được hay không.
if (isset($kq) && count($kq) > 0) {
    $i = 1;
    foreach ($kq as $itemMenu) {
        # code...
        echo '
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $itemMenu['tendanhmuc'] . '</td>
                        <td>' . $itemMenu['uutien'] . '</td>
                        <td>' . $itemMenu['hienthi'] . '</td>
                        <td><a href="index.php?act=updatemenuform&id=' . $itemMenu['id'] . '">Sửa</a> | <a href="index.php?act=deletemenu&id=' . $itemMenu['id'] . '">Xóa</a></td>
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