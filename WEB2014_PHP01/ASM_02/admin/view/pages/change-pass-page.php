<!-- Begin Page Content -->
<?php

if (isset($_GET['id'])) {

    $iduser = $_GET['id'];
    $user = getuserinfobyid($iduser)[0];
    // $iduser = $_GET['id'];
    // var_dump($user);
    $username = $user['user'];

    ?>

<div class="container-fluid">
    <!-- Page Heading -->

    <a href="./index.php?act=quanlyuser">
        << Trở lại trang user</a>
            <h1 class="h3 mb-4 text-gray-800">Đổi mật khẩu User</h1>
            <form action="index.php?act=updatepass" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mật khẩu cũ: </label>
                    <input type="text" class="form-control" name="currentpass" value="">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu mới: </label>
                    <input type="text" class="form-control" name="newpassword" value="">
                </div>
                <div class="form-group">
                    <label for="">Nhập lại mật khẩu mới</label>
                    <input type="text" class="form-control" name="reenterpass" value="">
                </div>
                <input type="hidden" name="iduser" value="<?php echo $iduser ?>">
                <input type="hidden" name="username" value="<?php echo $username ?>">
                <input type="submit" name="changepassbtn" value="Cập nhật mật khẩu" class="btn btn-primary" />

            </form>
</div>

<?php
}
// }
?>