<?php
include_once "../Database.php";
$db=new Database;
$id=$_GET['id'];
// echo $id;
$sql="delete from category where id=".$id;
//echo $sql;
$db->query($sql);
//echo "<meta http-equiv='refresh' content='0;url=index.php'>";
header("location: index.php");

