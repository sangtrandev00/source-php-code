<?php
// Start the session
session_start();
if (!isset($_SESSION['login'])) {
    echo "<meta http-equiv='refresh' content='0;url=../../pages/login.php'>";
    exit;
}
if (isset($_SESSION['login']) && $_SESSION['login']['roleid'] == 0) {
    echo "<meta http-equiv='refresh' content='0;url=../../pages/login.php'>";
    exit;
}

if (isset($_SESSION['login']) && ($_SESSION['login']['roleid'] == 1 || $_SESSION['login']['roleid'] == 2)) {
    include_once "../../lib/Database.php";
$db = new Database;
$id = $_GET['id'];
// $sql = "select * from project where id=" . $id;
// $db->query($sql);
// $row = $db->fetch_assoc();
$check = 0;
$user_id_conf = 0;
// echo $id;
$sql = "UPDATE project SET `check`=$check, `user_id_conf`=$user_id_conf where id=" . $id;
// echo $sql;
$db->query($sql);
//echo "<meta http-equiv='refresh' content='0;url=index.php'>";
if ($_SESSION['login']['roleid'] == 1) {
    header("location: index_admin.php");
} else {
    header("location: index_subadmin.php");
}
} else {
echo 'Bạn không đủ quyền hạn';
}
