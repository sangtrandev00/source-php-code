<?php include "../view/header.php";?>
 <div class="main_content">
    	<div class="showtext">
    	<div  class="logout_box">
                
               <?php
        if (isset($_SESSION['check'])){
        $_SESSION = array();
        session_destroy();
        echo "<center>";
        echo "<h3>Chúc mừng bạn đã đăng xuất thành công</h3>";
        echo "<br/>";
        echo "<a href='?action=home'>Trở về trang chủ</a>";
        }
        else {
            echo "
            <center>
            <h1>Bạn chưa đăng nhập.</h1>
              <p><a href='?action=login'>Đăng nhập</a> </p>
            </center>
              ";
        }
        echo "</center>";
?> 
                
          </div> 
    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
<?php include "../view/footer.php";?>