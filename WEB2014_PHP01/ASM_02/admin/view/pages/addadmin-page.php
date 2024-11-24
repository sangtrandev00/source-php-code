<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <a href="./index.php?act=quanlyadmin">
        << Trở lại trang danh sách admin</a>
            <h1 class="h3 mb-4 text-gray-800">Thêm admin</h1>
            <form action="index.php?act=addadmin" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên admin: </label>
                    <input type="text" class="form-control" name="fullname" value="">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ: </label>
                    <input type="text" class="form-control" name="address" value="">
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="email" class="form-control" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="">Phone: </label>
                    <input type="text" class="form-control" name="phone" value="">
                </div>
                <div class="form-group">
                    <label for="">Username: </label>
                    <input type="text" class="form-control" name="username" value="">
                </div>
                <div class="form-group">
                    <label for="">Password: </label>
                    <input type="text" class="form-control" name="password" value="">
                </div>
                <div class="form-group">
                    <label for="">Avatar hình ảnh: </label>
                    <input type="file" class="form-control" name="imageurl" value="">
                </div>
                <input type="hidden" name="iduser" value="<?php echo $iduser ?>">
                <input type="submit" name="addadminbtn" value="Thêm mới" class="btn btn-primary" />
            </form>
</div>

<?php

?>