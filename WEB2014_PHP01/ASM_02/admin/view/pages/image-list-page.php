<div class="p-2">

    <a href="./index.php?act=addimage" class="btn btn-primary">Thêm hình ảnh</a>
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
    <h3 class="title mt-5">Danh sách hình ảnh sản phẩm</h3>
    <table class="table table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">idsp</th>
                <th scope="col">Nội dung hình ảnh</th>
                <th scope="col">Hình sản phẩm</th>
                <th scope="col">Độ ưu tiên</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><a href="index.php?act=editproduct" class="btn-primary p-2">Sửa</a></td>
                <td><a href="index.php?act=deleteproduct" class="btn-danger p-2">Xóa</a></td>
            </tr>
            <tr>
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
            </tr>
        </tbody>
    </table>
</div>