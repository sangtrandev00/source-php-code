
<?php
    include "../model/connect.php";

    include "../model/user.php";
    include "../model/customer.php";
    include "../model/contact.php";
    include "../model/products.php";
    include "../model/cart.php";
    include "../model/order.php";
    

    // Khởi tạo session
     session_start();
     
     // Tạo mảng thông tin về giỏ hàng
     if(!isset($_SESSION['cartview']))
         $_SESSION['cartview'] = array();
     
     
     if(isset($_GET["action"]))
         $action=$_GET["action"]; 
     elseif (isset($_POST['action']))
     {
         $action=$_POST["action"];
     }
     else
         $action="home";
     
     //Xóa dữ liệu của biến Messages
     unset($_SESSION['messages']);
     switch($action)
     {
        // Gọi trang chủ
         case "home":
            include "../view/home.php";
   
            

            break;   
            
         // Gọi trang Logout   
         case "logout":
            include "../view/logout.php";
            break;
         // Gọi  trang Login 
         case "login":
            include "../view/login.php";
            break;
         
         // Gọi trang hành động của trang Login
          case "login_action":
           
            $username = $_POST['txtusername'];
            $_SESSION['username'] = $username;
            $password = $_POST['txtpassword'];
            $_SESSION['password'] = $password;
            
            $user = new customer();
            if ($username=="" || $password=="")
            {
                // Tạo mặc định biến Session cho người dùng sau khi đăng nhập thành công
                $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
                include "../view/login.php";
                break;
            }
            else
            {
                if($user->checkUser($username,$password))
                {
                   
                   $result = $user->userid($username, $password);
                   $userid = $result[0];
                
                if($remember)
               {
                $time=time()+60*60*24*30;
                setcookie("user","$username",$time);
                setcookie("pass","$password",$time);
               }
               // Tạo mặc định biến Session cho người dùng sau khi đăng nhập thành công
                $_SESSION['check'] = $username;
                //include '../view/index.php';
                header ("Location:index.php");
                break;
                 }
                else
                {
                    $_SESSION['messages'] = "Tên đăng nhập chưa chính xác !";
                    include "../view/login.php";
                    break;
                }
            }
          case "register":
                if(isset($_SESSION['check']))
                {
                    
                     include '../view/alert.php';
                }
                 else
                 {
                     include '../view/register.php';
                 }
               
            break;  
              case "add_user":
               include '../view/insert_user.php';
               
            break;  
        // show_cart:
          case "show_cart":
            include '../view/products_addcart.php';
            break;
        // products_list_canon
       case "products_list_canon":
           $action="products_list_canon";
           $Category ="Máy ảnh Canon";
           include '../view/products_list.php';
            break;
        
        case "products_details":
            include "../view/products_details.php";
            break;
        // add_cart
         case "add_cart":
         echo add_item($_POST['productkey'],$_POST['itemqty']);
            include "../view/products_addcart.php";
            break;
     }
?>
