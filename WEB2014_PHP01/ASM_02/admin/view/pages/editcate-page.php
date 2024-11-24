<?php
$cate = get_one_cate($cateid)[0];
// var_dump($cate);
$cate_old_name = $cate['tendanhmuc'];
$cate_old_title = $cate['tieude'];

?>

<div class="container p-3">
    <h3 class="title">Cập nhật danh mục</h3>

    <form method="post" action="index.php?act=updatedanhmuc">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input type="text" disabled class="form-control" value="<?php echo $cate_old_name ?>"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục mới</label>
            <input type="text" name="catename" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tiêu đề danh mục</label>
            <input type="text" disabled class="form-control" value="<?php echo $cate_old_title ?>"
                id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tiêu đề danh mục mới</label>
            <input type="text" name="catetitle" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="hidden" name="cateid" value="<?php echo $cateid ?>" />
        <input name="updatebtn" type="submit" class="btn btn-primary" value="update" />
    </form>
</div>