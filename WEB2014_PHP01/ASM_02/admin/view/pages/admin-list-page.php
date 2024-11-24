<div class="p-2">

    <a href="./index.php?act=addadmin" class="btn btn-primary">Thêm admin</a>
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-100 navbar-search ">
        <div class="input-group">
            <input type="text" class="form-control bg-light border border-primary small "
                placeholder="Tìm kiếm sản phẩm" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" name="searchproduct" type="submit" />
                <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <h3 class="title mt-5">Danh sách Admin ( người quản trị viên )</h3>
    <table class="table table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">id</th>
                <th scope="col">avatar</th>
                <th scope="col">Tên</th>
                <th scope="col">Username</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>

            </tr>
        </thead>
        <tbody>
            <?php
foreach ($admin_list as $admin) {
    echo '
            <tr>
            <th scope="row">' . $admin['id'] . '</th>
            <td><img width="100" height="100" style="object-fit: cover" src="../' . $admin['avatar'] . '"></td>
            <td>' . $admin['name'] . '</td>
            <td>' . $admin['user'] . '</td>
            <td>' . $admin['address'] . '</td>
            <td>' . $admin['email'] . '</td>
            <td>' . $admin['phonenumber'] . '</td>
            <td width="200"><a href="index.php?act=changepassadmin&id=' . $admin['id'] . '" class="btn-success p-2">Đổi mật khẩu</td>
            <td><a href="index.php?act=editadmin&id=' . $admin['id'] . '" class="btn-primary p-2">Sửa</a></td>
            <td><a href="index.php?act=deleteaddmin&id=' . $admin['id'] . '" class="btn-danger p-2">Xóa</a></td>
        </tr>
            ';
}
?>



            <!-- <tr>
                <th scope="row">1</th>
                <td>Avatar</td>
                <td>Ten</td>
                <td>Dia chi</td>
                <td>Email</td>
                <td>So dien thoai</td>
                <td><a href="index.php?act=viewuser" class="btn-success p-2">Đổi mật khẩu</td>
                <td><a href="index.php?act=edituser" class="btn-primary p-2">Sửa</a></td>
                <td><a href="index.php?act=deleteuser" class="btn-danger p-2">Xóa</a></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Avatar</td>
                <td>Ten</td>
                <td>Dia chi</td>
                <td>Email</td>
                <td>So dien thoai</td>
                <td><a href="index.php?act=viewuser" class="btn-success p-2">Đổi mật khẩu</td>
                <td><a href="index.php?act=edituser" class="btn-primary p-2">Sửa</a></td>
                <td><a href="index.php?act=deleteuser" class="btn-danger p-2">Xóa</a></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Avatar</td>
                <td>Ten</td>
                <td>Dia chi</td>
                <td>Email</td>
                <td>So dien thoai</td>
                <td><a href="index.php?act=viewuser" class="btn-success p-2">Đổi mật khẩu</td>
                <td><a href="index.php?act=edituser" class="btn-primary p-2">Sửa</a></td>
                <td><a href="index.php?act=deleteuser" class="btn-danger p-2">Xóa</a></td>
            </tr> -->
            <!-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr> -->
        </tbody>
    </table>
</div>