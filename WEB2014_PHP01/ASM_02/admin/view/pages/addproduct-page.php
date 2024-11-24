<?php
$cate_list = get_all_cates();
// var_dump($cate_list);

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="./index.php?act=quanlysanpham">
        << Trở về trang quản lý sản phẩm</a>
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Thêm sản phẩm</h1>
            <form action="./index.php?act=addproductpage" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên tên sản phẩm</label>
                    <input required type="text" class="form-control" name="proname" value=""
                        placeholder="Ví dụ: quần thể thao nam">
                </div>
                <div class="form-group">
                    <label for="">Chọn danh mục sản phẩm</label>
                    <select name="cateid" class="custom-select">
                        <?php

foreach ($cate_list as $cate_item) {
    # code...
    echo '
                <option  value="' . $cate_item['id'] . '">' . $cate_item['tendanhmuc'] . '</option>
                    ';
}

?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá Cũ</label>
                    <input type="number" min=0 name="oldprice" class="form-control" value="0" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Giá mới</label>
                    <input required type="number" min=0 class="form-control" name="newprice" value="0" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Chế độ hiển thị</label>
                    <input type="number" class="form-control" name="view" value="1">
                </div>
                <div class="form-group">
                    <label for="">Sản phẩm mới </label>
                    <!-- Mới = 1, cũ = 0 -->
                    <input type="number" class="form-control" name="new" value="0" min=0 max=1>
                </div>
                <div class="form-group">
                    <label for="">Giảm giá hay không </label>
                    <!-- Mới = 1, cũ = 0 -->
                    <input type="number" class="form-control" name="sale" value="0" min=0 max=1>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh 1</label>
                    <input required type="file" class="form-control" name="image1">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh 2</label>
                    <input type="file" class="form-control" name="image2">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh 3</label>
                    <input type="file" class="form-control" name="image3">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh 4</label>
                    <input type="file" class="form-control" name="image4">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh 5</label>
                    <input type="file" class="form-control" name="image5">
                </div>
                <div class="form-group">
                    <label for="pwd">Mô tả ngắn</label>
                    <textarea class="form-control" rows="5" id="comment" name="shortdesc"
                        placeholder=""><?php ?></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Mô tả chi tiết</label>
                    <textarea class="form-control" id="inp_editor1" rows="5" id="comment" name="fulldesc"></textarea>
                </div>
                <input type="submit" name="addproductbtn" class="btn btn-primary" />
            </form>

</div>



<?php

if (isset($_POST['addproductbtn']) && $_POST['addproductbtn']) {

    $proname = $_POST['proname'];
    $cateid = $_POST['cateid'];
    $oldprice = $_POST['oldprice'];
    $newprice = $_POST['newprice'];
    $view = $_POST['view'];
    $new = $_POST['new'];
    $sale = $_POST['sale'];

    $target_file1 = "../assets/images/" . basename($_FILES["image1"]["name"]);
    $target_file2 = "../assets/images/" . basename($_FILES["image2"]["name"]);
    $target_file3 = "../assets/images/" . basename($_FILES["image3"]["name"]);
    $target_file4 = "../assets/images/" . basename($_FILES["image4"]["name"]);
    $target_file5 = "../assets/images/" . basename($_FILES["image5"]["name"]);

    // echo $target_file1, $target_file2, $target_file3, $target_file4, $target_file5;
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
    move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4);
    move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file5);
    $shortdesc = $_POST['shortdesc'];
    $fulldesc = $_POST['fulldesc'];

    insert_product($cateid, $proname, $oldprice, $newprice, $shortdesc, $fulldesc, $new, $view, $sale, $target_file1, $target_file2, $target_file3, $target_file4, $target_file5);
} else {

}

?>