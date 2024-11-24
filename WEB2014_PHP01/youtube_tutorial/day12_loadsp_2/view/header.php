<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakecious</title>
    <link rel="shortcut icon" href="./image/cupcake.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/about-us.css">
    <link rel="stylesheet" href="./css/contact-us.css">
    <link rel="stylesheet" href="./css/our-cake.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
    .content_2 h2 {
        color: red;
    }
    </style>

</head>

<body>
    <div class="container">
        <header>
            <div class="content">
                <div class="contact">
                    <span class="phone">
                        <ion-icon name="call-outline"></ion-icon>0192 837 465
                    </span>
                    <span class="mail">
                        <ion-icon name="mail-outline"></ion-icon>duyn.my@gmail.com
                    </span>
                </div>
                <div class="media">
                    <span>
                        <ion-icon name="logo-twitter"></ion-icon>
                    </span>
                    <span>
                        <ion-icon name="logo-facebook"></ion-icon>
                    </span>
                    <span>
                        <ion-icon name="logo-youtube"></ion-icon>
                    </span>
                    <span>
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </span>
                    <span>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </span> |
                    <span>
                        <ion-icon name="search-outline"></ion-icon>
                    </span>
                </div>
            </div>
        </header>
        <nav>
            <a href="index.php">
                <div class="logo">
                    <img src="./image/Cakecious.png" alt="" width="220px" height="70px">
                </div>
            </a>
            <div class="menu">
                <ul>
                    <li><a href="#">Home<i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Homepage default</a></li>
                            <li><a href="#">Homepage demo</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?act=ourcake">Our cakes</a></li>
                    <li><a href="#">Menu <i class="fas fa-chevron-down"></i></a>
                        <!-- Danh mục sản phẩm -->
                        <ul>
                            <!-- <li><a href="#">Custom cakes</a></li>
                            <li><a href="#">Birthday cakes</a></li>
                            <li><a href="#">Wedding cakes</a></li>
                            <li><a href="#">European decicacies</a></li> -->
                            <?php
foreach ($dsdm as $itemdm) {
    # code...
    // echo var_dump($itemdm);
    echo '<li><a href="index.php?act=product&id=' . $itemdm['id'] . '">' . $itemdm['tendanhmuc'] . '</a></li>';
}
?>
                        </ul>
                    </li>
                    <li><a href="index.php?act=about">About us<i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our chefs</a></li>
                            <li><a href="#">Testimanials</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">What we make</a></li>
                            <li><a href="#">Special recipe</a></li>
                            <li><a href="#">Coming soon</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?act=blog">Blog</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="index.php?act=contact">Contact us</a></li>
                </ul>
            </div>
        </nav>