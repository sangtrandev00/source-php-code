<?php
if (isset($_GET['i'])) {
    $index = $_GET['i'];
    $currentvalue = $_SESSION['productlist'][$index];
} else {
    $currentvalue = "";
}
?>

<form action="index.php?act=submitproduct&index=<?=$index?>" class="form" method="post">
    <h3>Form Nhập dữ liệu sản phẩm</h3>
    <input type="text" name="nameproduct" id="" value="<?=$currentvalue?>"> <br>
    <input type="submit" value="Nhập tên sản phẩm" name="submitbtn">
</form>