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

if (isset($_SESSION['login']) && ($_SESSION['login']['roleid'] == 1)) {
include_once "../../lib/Database.php";
$db=new Database;
$id=$_GET['id'];
// echo $id;
$sql="delete from project where id=".$id;
//echo $sql;
$db->query($sql);
echo "<meta http-equiv='refresh' content='0;url=index_admin.php'>";
// header("location: index.php");
} else {
    echo 'Bạn không đủ quyền hạn';
}
