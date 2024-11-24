<?php
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
    $confirm = 1;
    $seen = 1;
    date_default_timezone_set("Asia/Bangkok");
    $disbursementdate = date("Y-m-d H:i:s");
    $disbursementdate = htmlspecialchars(addslashes(trim($disbursementdate)));
    $user_id_conf = $_SESSION['login']['userid'];
    $sql = "UPDATE disbursement SET `confirm` = $confirm , `disbursementdate` = '$disbursementdate' , `seen` = $seen , `user_id_conf` = $user_id_conf where id=" . $id;
    $db->query($sql);

    // $db1 = new Database;
    // $sql1 = "select * from disbursement where id=" . $id; // lấy tiền cần giải ngân theo id của đơn giải ngân
    // $db1->query($sql1);
    // $row1 = $db1->fetch_assoc();
    // $withdraw_money = $row1['money'];// số tiền cần giải ngân
    // // echo $withdraw_money;

    // $db2 = new Database;
    // $sql2 = "UPDATE project SET withdraw_money = withdraw_money+$withdraw_money where id=".$row1['project_id'];
    // $db2->query($sql2);

    //echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    if ($_SESSION['login']['roleid'] == 1) {
        header("location: index_admin.php");
    } else {
        header("location: index_subadmin.php");
    }
} else {
    echo 'Bạn không đủ quyền hạn';
}
