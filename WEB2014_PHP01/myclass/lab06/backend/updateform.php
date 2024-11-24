<form action="./cateproduct.php?act=updatecateform" method="post">
    <input name="catename" type="text" value="<?php if (isset($_GET['id'])) {
    echo $cateitem[0]['catename'];
}

?>" name="cateupdate" placeholder="update input product" id="">
    <input type="hidden" name="cateid" value="<?php echo $_GET['id'] ?>">
    <input type="submit" name="cateupdatebtn" value="Cập nhật">
</form>