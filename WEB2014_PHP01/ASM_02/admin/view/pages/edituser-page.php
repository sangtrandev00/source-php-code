<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?php if (isset($_GET['id'])) {
    $iduser = $_GET['id'];
    $user = getuserinfobyid($iduser)[0];
    // var_dump($user);
}?>
    <a href="./index.php?act=quanlyuser">
        << Trở lại trang user</a>
            <h1 class="h3 mb-4 text-gray-800">Cập nhật user</h1>
            <form action="index.php?act=updateuser" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for=""> Username: </label>
                    <input type="text" class="form-control" name="username" readonly
                        value="<?php echo $user['user'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Tên User: </label>
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
                    <label for="">Avatar hình ảnh: </label>
                    <input type="file" class="form-control" name="imageurl" value="">
                </div>
                <input type="hidden" name="iduser" value="<?php echo $iduser ?>">
                <input type="submit" name="edituserbtn" value="Cập nhật" class="btn btn-primary" />
            </form>
</div>

<?php

?>