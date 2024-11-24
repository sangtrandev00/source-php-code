<?php include_once("../part/header.php") ?>
<?php
include_once("../../lib/Database.php");
$db1 = new Database;
$id1 = $_GET['id'];
$sql1 = "select * from project where id=" . $id1;
$db1->query($sql1);
$row1 = $db1->fetch_assoc();

$db = new database();
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$name = isset($_POST["txtname"]) ? $_POST["txtname"] : "";
$money = isset($_POST["money"]) ? $_POST["money"] : "";
$note = isset($_POST["note"]) ? $_POST["note"] : "";
$err = [];

if (isset($_POST['username'])) {
    if ($username == "") {
        array_push($err, 'Vui lòng nhập tên');
    }
    if ($phone == "") {
        array_push($err, 'Vui lòng nhập số điện thoại');
    }
    if ($email == "") {
        array_push($err, 'Vui lòng nhập email');
    }
    if ($money == "") {
        array_push($err, 'Vui lòng nhập số tiền cần đóng góp');
    } else {
        if ($money <= 0) {
            array_push($err, 'Vui lòng nhập số tiền dương');
        }
    }
}

if (count($err) == 0 && isset($_POST['username'])) {
    $project_id = $id1;
    $cateid = $row1['cateid'];
    $username = htmlspecialchars(addslashes(trim($username)));
    $phone = htmlspecialchars(addslashes(trim($phone)));
    $email = htmlspecialchars(addslashes(trim($email)));
    $money = htmlspecialchars(addslashes(trim($money)));
    $note = htmlspecialchars(addslashes(trim($note)));
    $sql = "insert into donate(username,phone,email,cateid,project_id,money,note) values('$username','$phone','$email','$cateid','$project_id','$money','$note')";
    $id = $db->insert_query($sql);
    //echo $id;
    //echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Đóng góp</h1>
    <div class="container">
        <div class="jumbotron">
            <h1>Tiêu đề</h1>
            <p>123</p>
        </div>
        <div class="row marketing">
            <div class="col-lg-6">
                <h2>Đóng góp</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="usr">Tên</label>
                        <input type="text" class="form-control" id="usr" name="username" value="<?php echo $username ?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Số điện thoại</label>
                        <input type="text" class="form-control" id="usr" name="phone" value="<?php echo $phone ?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Email</label>
                        <input type="text" class="form-control" id="usr" name="email" value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Loại dự án</label>
                        <select name="cateid" class="custom-select" disabled>
                            <?php
                            $db2 = new database();
                            $sql2 = "select * from category";
                            $db2->query($sql2);
                            while ($row2 = $db2->fetch_assoc()) {
                            ?>
                                <option name="" value="<?php echo $row2['id'] ?>" <?php echo $row2['id'] == $row1['cateid'] ? "selected" : "" ?>><?php echo $row2['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usr">Tên Dự án</label>
                        <input type="text" class="form-control" id="usr" name="txtname" value="<?php echo $row1['name'] ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="usr">Số tiền cần quyên góp</label>
                        <input type="number" class="form-control" id="usr" name="money" value="<?php echo $money ?>">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Ghi chú</label>
                        <textarea class="form-control" rows="5" id="comment" name="note"><?php echo $note ?></textarea>
                    </div>
                    <?php if (count($err) > 0) { ?>
                        <ul class="alert alert-danger">
                            <?php
                            foreach ($err as $value) {
                            ?>
                                <li><?php echo $value ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Đóng góp</button>
                </form>
            </div>

            <div class="col-lg-6">
                <h2>Lịch sử giao dịch</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID đóng góp</th>
                            <th>Thời gian đóng góp</th>
                            <th>Số tiền đóng góp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->query("select * from donate order by id desc");
                        while ($row = $db->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><a href=""><?php echo $row['id'] ?></a></td>
                                <td><?php echo $row['createdate'] ?></td>
                                <td><?php echo number_format($row['money'],0,",",".") ?>đ</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- /container -->

</div>

<!-- /.container-fluid -->
<?php include_once("../part/footer.php") ?>