<?php include "../view/header.php";?>
<?php
$objQuest = null;
$objQuest = new Products();
$quest = $objQuest->getProductById($_GET['id']);
?>

 <div class="main_content">
    	<div class="showtext">
            <h1>Sản phẩm chi tiết</h1>
            
                    <center><table cellspacing="5" width="800">
    <tr>
    <form action="?action=add_cart" method="post">
        
        <td class="products_detail_images">
            <img src="<?php echo '../controller/images/products/'.$quest['ProductImage']; ?>" width="250px"/>
        </td>
        <td class="products_detail_info">
            <input type="hidden" name="productkey" value="<?php echo $quest['ProductID'];?>"/>
            <div><b> Tên sản phẩm:</b> <?php echo $quest['ProductName'];?> </div>
            <div><b> Loại phụ kiện:</b> <?php echo $quest['ProductCategory'];?> </div>
            <div><b>Giá sản phẩm :</b> <?php echo number_format($quest['ProductPrice']);?> đồng</div>
            
            <br />
            <div class="gioithieusp"><b>Mô tả sản phẩm:</b><?php echo $quest['ProductDesc'];?></div>
            <br />
            <select name="itemqty">  
           <?php for($i=1;$i<=10;$i++): ?>
           <option value="<?php echo $i; ?>">
            <?php echo $i?>
           </option>
            <?php endfor; ?>
           </select>
           <input type="submit"  value="Đặt hàng" style="cursor:pointer;color: #FFF; background:#990000; border:1px solid #663333;"/>
        </td>
        </form>
        </tr>
    
     </table></center>

    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
<?php include "../view/footer.php";?>