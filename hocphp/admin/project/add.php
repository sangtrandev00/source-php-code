<?php include_once("../part/header.php") ?>

<?php
include_once("../../lib/Database.php");
$db = new database();
$name = isset($_POST["txtname"]) ? $_POST["txtname"] : "";
$location = isset($_POST["location"]) ? $_POST["location"] : "";
$cateid = isset($_POST["cateid"]) ? $_POST["cateid"] : "";
$description = isset($_POST["description"]) ? $_POST["description"] : "";
$startdate = isset($_POST["startdate"]) ? $_POST["startdate"] : "";
$enddate = isset($_POST["enddate"]) ? $_POST["enddate"] : "";
$total = isset($_POST["total"]) ? $_POST["total"] : "";
$image = isset($_POST["image"]) ? $_POST["image"] : "";
$checktotal = isset($_POST["checktotal"]) == '1' ? 1 : 0;
$checktime = isset($_POST["checktime"]) == '1' ? 1 : 0;
$detailed_description = isset($_POST["detailed_description"]) ? $_POST["detailed_description"] : "";
$err = [];

if (isset($_POST['txtname'])) {
    if ($name == "") {
        array_push($err, 'Vui lòng nhập tên dự án');
    }
    if ($location == "") {
        array_push($err, 'Vui lòng nhập địa điểm');
    }
    if ($startdate == "") {
        array_push($err, 'Vui lòng nhập ngày bắt đầu đóng góp');
    }
    if ($enddate == "") {
        array_push($err, 'Vui lòng nhập ngày kết thúc đóng góp');
    }
    if ($total == "") {
        array_push($err, 'Vui lòng nhập số tiền cần đóng góp');
    } else {
        if ($total <= 0) {
            array_push($err, 'Vui lòng nhập số tiền dương');
        }
    }



    if ($_FILES['image']['error'] > 0) {
        array_push($err, 'File Upload Bị Lỗi');
    } else {
        // Upload file
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_path = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        if (strlen(strstr($file_type, 'image')) > 0) {
            if ((round($file_size / 1024, 0)) <= 10240) {
                $now = DateTime::createFromFormat('U.u', microtime(true));
                $result = $now->format("m_d_Y_H_i_s_u");
                $krr    = explode('_', $result);
                $result = implode("", $krr);
                // echo $result;
                move_uploaded_file($_FILES['image']['tmp_name'], '../../asset/img/upload/' . $result . $file_name);
                $image = $result . $file_name;
            } else {
                array_push($err, 'Vui lòng nhập file < 10MB');
            }
        } else {
            array_push($err, 'Vui lòng nhập file định dạng là ảnh');
        }

        // echo $file_name."<br>";
        // echo (round($file_size / 1024, 0)) . "KB<br>";
        // echo $file_path."<br>";
        // echo $file_type . "<br>";
        // echo 'File Uploaded';
    }


    if ($description == "") {
        array_push($err, 'Vui lòng nhập mô tả');
    }
    if ($detailed_description == "") {
        array_push($err, 'Vui lòng nhập mô tả chi tiết');
    }
    if ($startdate > $enddate) {
        array_push($err, 'Vui lòng nhập ngày kết thúc lớn hơn ngày bắt đầu');
    }
}

if (count($err) == 0 && isset($_POST['txtname'])) {
    $userid = $_SESSION['login']['userid'];
    $name = htmlspecialchars(addslashes(trim($name)));
    $location = htmlspecialchars(addslashes(trim($location)));
    $cateid = htmlspecialchars(addslashes(trim($cateid)));
    $description = htmlspecialchars(addslashes(trim($description)));
    $startdate = htmlspecialchars(addslashes(trim($startdate)));
    $enddate = htmlspecialchars(addslashes(trim($enddate)));
    $total = htmlspecialchars(addslashes(trim($total)));
    $image = htmlspecialchars(addslashes(trim($image)));
    $detailed_description = addslashes(trim($detailed_description));
    $sql = "insert into project(name,location,cateid,description,startdate,enddate,total,detail,image,userid,checktime,checktotal) values('$name','$location','$cateid','$description','$startdate','$enddate','$total','$detailed_description','$image','$userid','$checktime','$checktotal')";
    $id = $db->insert_query($sql);
    //echo $id;
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Thêm dự án thiện nguyện</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="usr">Tên Dự án</label>
            <input type="text" class="form-control" id="usr" name="txtname" value="<?php echo $name ?>"
                placeholder="Ví dụ: Mái ấm tình thương...">
        </div>
        <div class="form-group">
            <label for="usr">Chọn loại dự án</label>
            <select name="cateid" class="custom-select">
                <?php
                $db1 = new database();
                $sql1 = "select * from category";
                $db1->query($sql1);
                while ($row1 = $db1->fetch_assoc()) {
                ?>
                <option name="" value="<?php echo $row1['id'] ?>"><?php echo $row1['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="usr">Địa điểm</label>
            <input type="text" class="form-control" id="usr" name="location" value="<?php echo $location ?>"
                placeholder="Ví dụ: TP.Hồ Chí Minh...">
        </div>
        <div class="form-group">
            <label for="usr">Ngày bắt đầu kêu gọi</label>
            <input type="date" class="form-control" id="usr" name="startdate"
                value="<?php echo $startdate == "" ? "" : date("Y-m-d", strtotime($startdate)) ?>">
        </div>
        <div class="form-group">
            <label for="usr">Ngày kết thúc kêu gọi</label>
            <input type="date" class="form-control" id="usr" name="enddate"
                value="<?php echo $enddate == "" ? "" : date("Y-m-d", strtotime($enddate)) ?>">
        </div>
        <div class="form-group">
            <label for="usr">Số tiền cần quyên góp</label>
            <input type="number" class="form-control" id="usr" name="total" value="<?php echo $total ?>">
        </div>
        <div class="form-group">
            <label for="usr">Hình ảnh</label>
            <input type="file" class="form-control" id="usr" name="image">
        </div>
        <div class="form-group">
            <label for="pwd">Mô tả ngắn</label>
            <textarea class="form-control" rows="5" id="comment" name="description"
                placeholder="Ví dụ: Giúp đỡ hoàn cảnh khó khăn, vô gia cư..."><?php echo $description ?></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Mô tả chi tiết</label>
            <textarea class="form-control" id="inp_editor1" rows="5" id="comment"
                name="detailed_description"><?php echo $detailed_description ?></textarea>
        </div>
        <div class="form-check">
            <label class="form-check-label" for="check1">
                <input type="checkbox" class="form-check-input" id="check1" name="checktotal" value="1" checked>Tự động
                đóng dự án khi đủ số tiền
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label" for="check2">
                <input type="checkbox" class="form-check-input" id="check2" name="checktime" value="1" checked>Tự động
                đóng dự án khi hết thời hạn quyên góp
            </label>
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
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
<!-- /.container-fluid -->
<?php include_once("../part/footer.php") ?>