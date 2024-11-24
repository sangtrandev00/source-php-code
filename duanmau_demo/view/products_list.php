<?php include "../view/header.php";?>
 <div class="main_content">
    	<div class="showtext">
         <h1>
             <?php
             echo $Category;
             ?>
             
         </h1>
    	<div  class="products_box">
 <table width="840px" cellspacing="9" class="products_list">
          <tr>
            <?php
            
        $pro = new Products();
        
        
        $display = 12;
        if(isset($_GET['page']) && (int)$_GET['page']) {
                $page = $_GET['page'];
            } else { //neu chua xac dinh, thi tim so trang
                $count = $pro->CountProduct($Category);
                $record = $count[0];
                
                if($record > $display) {
                    $page = ceil($record/$display);
                } else {
                    $page = 1;
                }
            }
        $start = (isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;

        $result = $pro->getListPageOrderProduct($start,$display,$Category);
        $dem =0;
        while($set = $result -> fetch()):
            $dem++;?>
           <td>
           <center>
           <a href="?action=products_details&id=<?php echo $set['ProductID'] ?>"><img src="<?php echo '../controller/images/products/'.$set['ProductImage'] ?>" width="150px"/></a><br />
            <div><b><?php echo $set['ProductName']?></b></div>
            <div ><p class="products_price_title">Giá: <?php echo number_format($set['ProductPrice'])?> đồng</p></div>
           </center>
           </td>
           <?php
        if($dem%4==0)
       {
        echo '</tr><tr>';
       }
        endwhile;
      
      ?>
        
          </tr>
          
        </table>
            
            <?php 
            
            if($page > 1) { //hien thi so trang
                
                $next = $start + $display;
                $prev = $start - $display;
                $current = ($start/$display)+1;?>
                <center><table class="products_list_pages">
                        <tr>
                            <?php  //Hiển thị trang trước
                                if($current !=1) {
                                echo "<td><a href='index.php?action=$action&start=$prev&page=$page'>Previous</a></td>";
                                } ?>
                            
                            <?php //Hiển thị số link trang
                                for($i=1;$i<=$page;$i++) {
                                    if($current != $i) {
                                    echo "<td><a href='index.php?action=$action&start=".($display*($i-1))."&page=$page'>$i</a></td>";
                                } else {
                                    echo "<td class='current'>$i</td>";
                                }
                                } //kết thúc vòng lặp for
                               ?>
                            
                                <?php //Hiển thị trang kế tiếp

                                 if($current != $page) {
                                     echo "<td><a href='index.php?action=$action&start=$next&page=$page'>Next</a></td>";
                                 }

                                }
                                ?>
                        </tr>
                
                </table></center>
   
          </div>
    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
    
    
<?php include "../view/footer.php";?>