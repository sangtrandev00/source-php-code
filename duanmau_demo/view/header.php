<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to CameraShop Online</title>
<link href="../controller/css/style.css" rel="stylesheet" type="text/css" />
<link href="../controller/css/menu.css" rel="stylesheet" type="text/css" />
<link href="../controller/css/nivo-slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../controller/js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="../controller/js/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
</script>
</head>

<body>
<div class="wrapper">
  <div class="header">
        <div class="logo"><a href="index.php">
        <img src="../controller/images/logo.png" width="250" height="90" alt="logo" /></a>
        </div> <!--End #logo-->
    <div class="header_info">
    	<p class="header_info_top">
            <?php
                         if(isset($_SESSION['check']))
                        {
                            $username = $_SESSION['check'];
       
                            echo " Xin chào <span>$username</span>!";
                            echo '(<a href="?action=logout">Thoát</a>)';
                        }
                        else
                        {
                           
                           echo "Welcome <span>Guest</span>!";
                            
                                                 
                        }
                        
                            ?>
            
             | <a href="?action=login">Đăng nhập</a> | <a href="?action=register">Đăng ký</a></p>
                <div class="search">
                <form action="#" method="get">
                      <input type="text" value="Nhập từ khóa tìm kiếm" name="keyword" id="keyword" title="keyword" 
                            onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                      <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                  </form>
                </div><!--End #search-->
     </div><!--End #header_info-->
     <div class="header_bottom">
       <div class="menu">
                        <ul>
                          <li><a href="?action=home" >Trang chủ</a></li>
                          <li><a href="?action=about">Giới thiệu</a></li>
                          <li><a href="#">Máy ảnh</a>
                          		<div class="sub_menu">
                                     <div class="drop_menu">
                                            <ul>
                                                <li><a href="?action=products_list_canon">Máy ảnh Canon</a></li>
                                                <li><a href="?action=products_list_nikon">Máy ảnh Nikon</a></li>
                                                <li><a href="?action=products_list_others">Các hãng khác</a></li>   
                                           </ul>
                                     </div>
                        </div></li>
                        <li><a href="#">Phụ kiện</a>
                          		<div class="sub_menu">
                                     <div class="drop_menu">
                                            <ul>
                                                <li><a href="?action=accessories_list_lens">Ống kính</a></li>
                                                <li><a href="?action=accessories_list_flash">Đèn Flash</a></li>
                                                <li><a href="?action=accessories_list_others">Phụ kiện khác</a></li>   
                                           </ul>
                                     </div>
                        </div></li>
                          <li><a href="#">Dịch vụ</a></li>                
                          <li><a href="?action=contact" class="last">Liên hệ</a></li>
         </ul>
       </div><!--End #menu-->
            <div class="shopping_cart">
                        <table width="140px" border="0" cellspacing="0" cellpadding="0" class="cart">
                          <tr>
                            <td><img src="../controller/images/shopping_cart.png" width="32" height="32" alt="cart" /></td>
                            <td class="cart_info"><a href="?action=show_cart">Xem Giỏ hàng</a></td>
                          </tr>
                      </table>
            </div><!--End #shopping_cart-->
 
     </div><!--End #header_bottom-->
    </div><!--End #header-->


