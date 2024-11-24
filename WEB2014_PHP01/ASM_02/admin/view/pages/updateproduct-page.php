<?php
$cate_list = get_all_cates();
$product_item = get_one_product($_GET['id'])[0];
$idsp = $_GET['id'];
// var_dump($product_item);
$cate_name = get_cate_name($product_item['iddm']);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <a href="./index.php?act=quanlysanpham">
        << Trở về danh sách sản phẩm</a>
            <h1 class="h3 mb-4 text-gray-800">Cập nhật sản phẩm</h1>
            <form action="<?="./index.php?act=editproduct&id=$idsp";?>" method="post" enctype="multipart/form-data">`
                <div class="form-group">
                    <label for="">Tên tên sản phẩm</label>
                    <input type="text" class="form-control" name="proname" value="<?php echo $product_item['tensp'] ?>"
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
                    <input type="number" min=0 class="form-control" name="oldprice"
                        value="<?php echo $product_item['giacu'] ?>" placeholder="Ví dụ: TP.Hồ Chí Minh...">
                </div>
                <div class="form-group">
                    <label for="">Giá mới</label>
                    <input type="number" min=0 class="form-control" name="newprice"
                        value="<?php echo $product_item['giasp'] ?>" placeholder="Ví dụ: TP.Hồ Chí Minh...">
                </div>
                <div class="form-group">
                    <label for="">Chế độ hiển thị</label>
                    <input type="number" class="form-control" name="view" value="<?php echo $product_item['view'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Sản phẩm mới </label>
                    <!-- Mới = 1, cũ = 0 -->
                    <input type="number" class="form-control" name="new" value="<?php echo $product_item['new'] ?>"
                        min=0 max=1>
                </div>
                <div class="form-group">
                    <label for="">Giảm giá hay không </label>
                    <!-- Mới = 1, cũ = 0 -->
                    <input type="number" class="form-control" name="sale" value="<?php echo $product_item['sale'] ?>"
                        min=0 max=1>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh 1</label>
                    <input required type="file" class="form-control" name="image1">
                    <p>The name of the file you picked is: <span id="filename">(none)</span></p>
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
                    <label for="">Mô tả ngắn</label>
                    <textarea class="form-control" rows="5" id="" name="shortdesc"
                        placeholder="Ví dụ: ......"><?php echo $product_item['shortdesc'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Mô tả chi tiết</label>
                    <textarea class="form-control" id="" rows="5" id="comment"
                        name="fulldesc"><?php echo $product_item['fulldesc'] ?></textarea>
                </div>
                <input name="updateproductbtn" type="submit" class="btn btn-primary" value="Cập nhật sản phẩm">
            </form>
</div>


<?php
if (isset($_POST['updateproductbtn']) && $_POST['updateproductbtn']) {
    $id = $_GET['id'];
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
    // echo $target_file1, $target_file2, $target_file3, $target_file4, $target_file5;
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
    move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4);
    move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file5);
    $shortdesc = $_POST['shortdesc'];
    $fulldesc = $_POST['fulldesc'];

    update_product($id, $cateid, $proname, $oldprice, $newprice, $shortdesc, $fulldesc, $new, $view, $sale, $target_file1, $target_file2, $target_file3, $target_file4, $target_file5);
} else {

}
?>