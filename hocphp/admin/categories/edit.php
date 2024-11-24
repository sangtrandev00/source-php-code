<?php 
include_once "../Database.php";
$db=new Database;
$id=$_GET['id'];
$sql="select * from category where id=".$id;
$db->query($sql);
$row=$db->fetch_assoc();
?>
<form action="" method="post">
   <input type="text" name="txtName" value="<?php echo $row['name']?>"> <button>Sửa</button>
</form>
<?php 
$name=isset($_POST['txtName'])?$_POST['txtName']:"";
if($name<>""){
    $name=htmlspecialchars(addslashes(trim($name)));
    $sql="update category set name='$name' where id=".$id;
    //echo $sql;
    $db->query($sql);
    header("location: index.php");
}
?>