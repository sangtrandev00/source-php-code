<?php include "../view/header.php";?>
<?php
if(isset($_SESSION['check']))
    {
       echo 'Không tìm thấy yêu cầu';
    }
    else
    {
        if(empty($_SESSION['messages']))
        {
            $messages="";
            
        }
        else
        {
            $messages=$_SESSION['messages'];
        }
      if ((isset($_COOKIE["user"]) && (isset($_COOKIE["pass"]))))
      {
          $user=$_COOKIE["user"];
          $pass=$_COOKIE["pass"];
      }
      else
      {
          $user="";
          $pass="";
      }
      
      ?>     
 <div class="main_content">
    	<div class="showtext">
        <center><h2>Đăng nhập</h2></center>
    	<div  class="login_box">
                <form method="post" name="contact" action="?action=login_action">
                    <div class="login_field">
                        <p><?php echo "$messages" ?></p>
                    </div>
                    <div class="login_field">
                        <label for="name">UserName</label>
                        <input name="txtusername" type="text" class="input_field" id="txtusername" 
                               value="<?php echo"$user"?>"/>
                    </div>
                    <div class="login_field">
                        <label for="pass">Password</label>
                        <input name="txtpassword" type="password" class="input_field" id="txtpasword"
                               value="<?php echo"$pass"?>"/>
                    </div>
                    <div class="login_field">
                    <p><a href="?action=forgot_password">Quên mật khẩu?</a></p>
                    <input type="submit" name="login" value="Đăng nhập" class="submit_btn " />
                    </div>
                </form>
            </div> 
            
    
    </div>
        <div class="clear"></div>
    </div><!--End #main_content-->
    <?php }include "../view/footer.php";?>