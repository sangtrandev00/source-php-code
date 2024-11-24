<?php

session_start();
unset($_SESSION['objuser']);
// Load lại trang sau khi xóa
header('location: logined.php');