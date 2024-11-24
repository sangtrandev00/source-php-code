<?php
// session_start();
// var_dump($_SESSION['iddh']);

// if (isset($_SESSION['iddh'])) {
//     $iddh = $_SESSION['iddh'];
//     $cart_list = getshowcart($iddh);
//     var_dump($cart_list);
//     $number_cart_items = count($cart_list);
// }

if (isset($_SESSION['giohang'])) {
    // var_dump($_SESSION['giohang']);
    $number_cart_items = count($_SESSION['giohang']);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignmnet HTML5 & CSS3 from Figma -- SS Apparel Ecommerce Sportswear Shop -- Made by SangTranDev</title>
    <!-- Fonts: Open Sans & Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- Fonts awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/common-responsive.css">
    <?php

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'shoppage':
            # code...
            echo '
          <!-- shop page styles css -->
          <link rel="stylesheet" href="assets/css/shop-page.css">
          <link rel="stylesheet" href="assets/css/shop-page-responsive.css">
          ';
            break;
        case 'aboutpage':
            # code...
            echo '
            <!-- About styles css -->
            <link rel="stylesheet" href="assets/css/about-page.css">
            <link rel="stylesheet" href="assets/css/about-page-responsive.css">
          ';
            break;
        case 'profilepage':
            # code...
            echo '
            <!-- About styles css -->
            <link rel="stylesheet" href="assets/css/profile-page.css">
          ';
            break;
        case 'checkoutpage':
            # code...
            echo '
            <!-- checkout styles css -->
            <link rel="stylesheet" href="assets/css/checkout-page.css">
            <link rel="stylesheet" href="assets/css/checkout-page-responsive.css">
          ';
            break;
        case 'ordercompletedpage':
            # code...
            echo '
            <!-- order completed page styles css -->
            <link rel="stylesheet" href="assets/css/order-completed-page.css">
            <link rel="stylesheet" href="assets/css/order-completed-page-responsive.css">
          ';
            break;
        case 'detailpage':
            # code...
            echo '
            <!-- product detail page styles css -->
            <link rel="stylesheet" href="assets/css/product-detail-page.css">
            <link rel="stylesheet" href="assets/css/product-detail-page-responsive.css">
          ';
            break;
        case 'thanhtoan':
            # code...
            echo '
            <!-- product detail page styles css -->
            <link rel="stylesheet" href="assets/css/detail-order.css">

          ';
            break;
        case 'contactpage':
            # code...
            echo '
            <!-- Contact page styles css -->
            <link rel="stylesheet" href="assets/css/contact-page.css">
            <link rel="stylesheet" href="assets/css/contact-page-responsive.css">
          ';
            break;
        case 'shoppingcartpage':
        case 'updatecart':
            # code...
            echo '
            <!-- Shopping cart page styles css -->
            <link rel="stylesheet" href="assets/css/shopping-cart-page.css">
            <link rel="stylesheet" href="assets/css/shopping-cart-page-responsive.css">
          ';
            break;
        case 'loginpage':
        case 'forgotpasspage':
        case 'resetpassword':
        case 'signuppage':
        case 'signupsuccess':
            # code...
            echo '
            <link rel="stylesheet" href="assets/css/login-page.css">
            <link rel="stylesheet" href="assets/css/login-page-responsive.css">
          ';

            break;
        default:
            # code...
            echo '
            <link rel="stylesheet" href="assets/css/home-page.css">
            <link rel="stylesheet" href="assets/css/home-page-responsive.css">
            ';
            break;
    }
} else {
    echo '
    <link rel="stylesheet" href="assets/css/home-page.css">
    <link rel="stylesheet" href="assets/css/home-page-responsive.css">
    ';
}

?>


</head>

<body>

    <!-- SS Apparel -- Brand -->

    <div id="container">
        <header class="header">
            <div class="promotion-header">
                <p class="promotion-header__text">Get 15% OFF - Use Coupon Code SUMMER_SALE</p>
            </div>
            <div class="navbar__container">
                <div class="grid wide">
                    <div class="navbar">
                        <a href="./index.php" class="navbar__logo">
                            <svg class="navbar__logo-svg" width="108" height="46" viewBox="0 0 108 46" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M48.8295 20.4545C48.7784 20.0227 48.571 19.6875 48.2074 19.4489C47.8438 19.2102 47.3977 19.0909 46.8693 19.0909C46.483 19.0909 46.1449 19.1534 45.8551 19.2784C45.5682 19.4034 45.3438 19.5753 45.1818 19.794C45.0227 20.0128 44.9432 20.2614 44.9432 20.5398C44.9432 20.7727 44.9986 20.973 45.1094 21.1406C45.223 21.3054 45.3679 21.4432 45.544 21.554C45.7202 21.6619 45.9048 21.7514 46.098 21.8224C46.2912 21.8906 46.4688 21.946 46.6307 21.9886L47.517 22.2273C47.7443 22.2869 47.9972 22.3693 48.2756 22.4744C48.5568 22.5795 48.8253 22.723 49.081 22.9048C49.3395 23.0838 49.5526 23.3139 49.7202 23.5952C49.8878 23.8764 49.9716 24.2216 49.9716 24.6307C49.9716 25.1023 49.848 25.5284 49.6009 25.9091C49.3565 26.2898 48.9986 26.5923 48.527 26.8168C48.0582 27.0412 47.4886 27.1534 46.8182 27.1534C46.1932 27.1534 45.652 27.0526 45.1946 26.8509C44.7401 26.6491 44.3821 26.3679 44.1207 26.0071C43.8622 25.6463 43.7159 25.2273 43.6818 24.75H44.7727C44.8011 25.0795 44.9119 25.3523 45.1051 25.5682C45.3011 25.7812 45.5483 25.9403 45.8466 26.0455C46.1477 26.1477 46.4716 26.1989 46.8182 26.1989C47.2216 26.1989 47.5838 26.1335 47.9048 26.0028C48.2259 25.8693 48.4801 25.6847 48.6676 25.4489C48.8551 25.2102 48.9489 24.9318 48.9489 24.6136C48.9489 24.3239 48.8679 24.0881 48.706 23.9062C48.544 23.7244 48.331 23.5767 48.0668 23.4631C47.8026 23.3494 47.517 23.25 47.2102 23.1648L46.1364 22.858C45.4545 22.6619 44.9148 22.3821 44.517 22.0185C44.1193 21.6548 43.9205 21.179 43.9205 20.5909C43.9205 20.1023 44.0526 19.6761 44.3168 19.3125C44.5838 18.946 44.9418 18.6619 45.3906 18.4602C45.8423 18.2557 46.3466 18.1534 46.9034 18.1534C47.4659 18.1534 47.9659 18.2543 48.4034 18.456C48.8409 18.6548 49.1875 18.9276 49.4432 19.2741C49.7017 19.6207 49.8381 20.0142 49.8523 20.4545H48.8295ZM56.4819 20.4545C56.4308 20.0227 56.2234 19.6875 55.8597 19.4489C55.4961 19.2102 55.0501 19.0909 54.5217 19.0909C54.1353 19.0909 53.7972 19.1534 53.5075 19.2784C53.2205 19.4034 52.9961 19.5753 52.8342 19.794C52.6751 20.0128 52.5955 20.2614 52.5955 20.5398C52.5955 20.7727 52.6509 20.973 52.7617 21.1406C52.8754 21.3054 53.0202 21.4432 53.1964 21.554C53.3725 21.6619 53.5572 21.7514 53.7504 21.8224C53.9435 21.8906 54.1211 21.946 54.283 21.9886L55.1694 22.2273C55.3967 22.2869 55.6495 22.3693 55.9279 22.4744C56.2092 22.5795 56.4776 22.723 56.7333 22.9048C56.9918 23.0838 57.2049 23.3139 57.3725 23.5952C57.5401 23.8764 57.6239 24.2216 57.6239 24.6307C57.6239 25.1023 57.5004 25.5284 57.2532 25.9091C57.0089 26.2898 56.6509 26.5923 56.1793 26.8168C55.7106 27.0412 55.141 27.1534 54.4705 27.1534C53.8455 27.1534 53.3043 27.0526 52.8469 26.8509C52.3924 26.6491 52.0344 26.3679 51.7731 26.0071C51.5146 25.6463 51.3683 25.2273 51.3342 24.75H52.4251C52.4535 25.0795 52.5643 25.3523 52.7575 25.5682C52.9535 25.7812 53.2006 25.9403 53.4989 26.0455C53.8001 26.1477 54.1239 26.1989 54.4705 26.1989C54.8739 26.1989 55.2362 26.1335 55.5572 26.0028C55.8782 25.8693 56.1325 25.6847 56.32 25.4489C56.5075 25.2102 56.6012 24.9318 56.6012 24.6136C56.6012 24.3239 56.5202 24.0881 56.3583 23.9062C56.1964 23.7244 55.9833 23.5767 55.7191 23.4631C55.4549 23.3494 55.1694 23.25 54.8626 23.1648L53.7887 22.858C53.1069 22.6619 52.5671 22.3821 52.1694 22.0185C51.7717 21.6548 51.5728 21.179 51.5728 20.5909C51.5728 20.1023 51.7049 19.6761 51.9691 19.3125C52.2362 18.946 52.5941 18.6619 53.043 18.4602C53.4947 18.2557 53.9989 18.1534 54.5558 18.1534C55.1183 18.1534 55.6183 18.2543 56.0558 18.456C56.4933 18.6548 56.8398 18.9276 57.0955 19.2741C57.354 19.6207 57.4904 20.0142 57.5046 20.4545H56.4819ZM63.9425 27H61.9652L64.978 18.2727H67.3558L70.3643 27H68.3871L66.201 20.267H66.1328L63.9425 27ZM63.8189 23.5696H68.4893V25.0099H63.8189V23.5696ZM71.3807 29.4545V20.4545H73.1705V21.554H73.2514C73.331 21.3778 73.446 21.1989 73.5966 21.017C73.75 20.8324 73.9489 20.679 74.1932 20.5568C74.4403 20.4318 74.7472 20.3693 75.1136 20.3693C75.5909 20.3693 76.0313 20.4943 76.4347 20.7443C76.8381 20.9915 77.1605 21.3651 77.402 21.8651C77.6435 22.3622 77.7642 22.9858 77.7642 23.7358C77.7642 24.4659 77.6463 25.0824 77.4105 25.5852C77.1776 26.0852 76.8594 26.4645 76.456 26.723C76.0554 26.9787 75.6065 27.1065 75.1094 27.1065C74.7571 27.1065 74.4574 27.0483 74.2102 26.9318C73.9659 26.8153 73.7656 26.669 73.6094 26.4929C73.4531 26.3139 73.3338 26.1335 73.2514 25.9517H73.196V29.4545H71.3807ZM73.1577 23.7273C73.1577 24.1165 73.2116 24.456 73.3196 24.7457C73.4276 25.0355 73.5838 25.2614 73.7884 25.4233C73.9929 25.5824 74.2415 25.6619 74.5341 25.6619C74.8295 25.6619 75.0795 25.581 75.2841 25.419C75.4886 25.2543 75.6435 25.027 75.7486 24.7372C75.8565 24.4446 75.9105 24.108 75.9105 23.7273C75.9105 23.3494 75.858 23.017 75.7528 22.7301C75.6477 22.4432 75.4929 22.2187 75.2884 22.0568C75.0838 21.8949 74.8324 21.8139 74.5341 21.8139C74.2386 21.8139 73.9886 21.892 73.7841 22.0483C73.5824 22.2045 73.4276 22.4261 73.3196 22.7131C73.2116 23 73.1577 23.3381 73.1577 23.7273ZM78.9744 29.4545V20.4545H80.7642V21.554H80.8452C80.9247 21.3778 81.0398 21.1989 81.1903 21.017C81.3438 20.8324 81.5426 20.679 81.7869 20.5568C82.0341 20.4318 82.3409 20.3693 82.7074 20.3693C83.1847 20.3693 83.625 20.4943 84.0284 20.7443C84.4318 20.9915 84.7543 21.3651 84.9957 21.8651C85.2372 22.3622 85.358 22.9858 85.358 23.7358C85.358 24.4659 85.2401 25.0824 85.0043 25.5852C84.7713 26.0852 84.4531 26.4645 84.0497 26.723C83.6491 26.9787 83.2003 27.1065 82.7031 27.1065C82.3509 27.1065 82.0511 27.0483 81.804 26.9318C81.5597 26.8153 81.3594 26.669 81.2031 26.4929C81.0469 26.3139 80.9276 26.1335 80.8452 25.9517H80.7898V29.4545H78.9744ZM80.7514 23.7273C80.7514 24.1165 80.8054 24.456 80.9134 24.7457C81.0213 25.0355 81.1776 25.2614 81.3821 25.4233C81.5866 25.5824 81.8352 25.6619 82.1278 25.6619C82.4233 25.6619 82.6733 25.581 82.8778 25.419C83.0824 25.2543 83.2372 25.027 83.3423 24.7372C83.4503 24.4446 83.5043 24.108 83.5043 23.7273C83.5043 23.3494 83.4517 23.017 83.3466 22.7301C83.2415 22.4432 83.0866 22.2187 82.8821 22.0568C82.6776 21.8949 82.4261 21.8139 82.1278 21.8139C81.8324 21.8139 81.5824 21.892 81.3778 22.0483C81.1761 22.2045 81.0213 22.4261 80.9134 22.7131C80.8054 23 80.7514 23.3381 80.7514 23.7273ZM88.4347 27.1236C88.017 27.1236 87.6449 27.0511 87.3182 26.9062C86.9915 26.7585 86.733 26.5412 86.5426 26.2543C86.3551 25.9645 86.2614 25.6037 86.2614 25.1719C86.2614 24.8082 86.3281 24.5028 86.4616 24.2557C86.5952 24.0085 86.777 23.8097 87.0071 23.6591C87.2372 23.5085 87.4986 23.3949 87.7912 23.3182C88.0866 23.2415 88.3963 23.1875 88.7202 23.1562C89.1009 23.1165 89.4077 23.0795 89.6406 23.0455C89.8736 23.0085 90.0426 22.9545 90.1477 22.8835C90.2528 22.8125 90.3054 22.7074 90.3054 22.5682V22.5426C90.3054 22.2727 90.2202 22.0639 90.0497 21.9162C89.8821 21.7685 89.6435 21.6946 89.3338 21.6946C89.0071 21.6946 88.7472 21.767 88.554 21.9119C88.3608 22.054 88.233 22.233 88.1705 22.4489L86.4915 22.3125C86.5767 21.9148 86.7443 21.571 86.9943 21.2812C87.2443 20.9886 87.5668 20.7642 87.9616 20.608C88.3594 20.4489 88.8196 20.3693 89.3423 20.3693C89.706 20.3693 90.054 20.4119 90.3864 20.4972C90.7216 20.5824 91.0185 20.7145 91.277 20.8935C91.5384 21.0724 91.7443 21.3026 91.8949 21.5838C92.0455 21.8622 92.1207 22.196 92.1207 22.5852V27H90.3991V26.0923H90.348C90.2429 26.2969 90.1023 26.4773 89.9261 26.6335C89.75 26.7869 89.5384 26.9077 89.2912 26.9957C89.044 27.081 88.7585 27.1236 88.4347 27.1236ZM88.9545 25.8707C89.2216 25.8707 89.4574 25.8182 89.6619 25.7131C89.8665 25.6051 90.027 25.4602 90.1435 25.2784C90.2599 25.0966 90.3182 24.8906 90.3182 24.6605V23.9659C90.2614 24.0028 90.1832 24.0369 90.0838 24.0682C89.9872 24.0966 89.8778 24.1236 89.7557 24.1491C89.6335 24.1719 89.5114 24.1932 89.3892 24.2131C89.267 24.2301 89.1562 24.2457 89.0568 24.2599C88.8438 24.2912 88.6577 24.3409 88.4986 24.4091C88.3395 24.4773 88.2159 24.5696 88.1278 24.6861C88.0398 24.7997 87.9957 24.9418 87.9957 25.1122C87.9957 25.3594 88.0852 25.5483 88.2642 25.679C88.446 25.8068 88.6761 25.8707 88.9545 25.8707ZM93.5291 27V20.4545H95.2891V21.5966H95.3572C95.4766 21.1903 95.6768 20.8835 95.9581 20.6761C96.2393 20.4659 96.5632 20.3608 96.9297 20.3608C97.0206 20.3608 97.1186 20.3665 97.2237 20.3778C97.3288 20.3892 97.4212 20.4048 97.5007 20.4247V22.0355C97.4155 22.0099 97.2976 21.9872 97.147 21.9673C96.9964 21.9474 96.8587 21.9375 96.7337 21.9375C96.4666 21.9375 96.228 21.9957 96.0178 22.1122C95.8104 22.2259 95.6456 22.3849 95.5234 22.5895C95.4041 22.794 95.3445 23.0298 95.3445 23.2969V27H93.5291ZM101.118 27.1278C100.444 27.1278 99.8647 26.9915 99.3789 26.7188C98.896 26.4432 98.5238 26.054 98.2624 25.5511C98.0011 25.0455 97.8704 24.4474 97.8704 23.7571C97.8704 23.0838 98.0011 22.4929 98.2624 21.9844C98.5238 21.4759 98.8917 21.0795 99.3661 20.7955C99.8434 20.5114 100.403 20.3693 101.045 20.3693C101.477 20.3693 101.879 20.4389 102.251 20.5781C102.626 20.7145 102.953 20.9205 103.231 21.196C103.512 21.4716 103.731 21.8182 103.887 22.2358C104.044 22.6506 104.122 23.1364 104.122 23.6932V24.1918H98.5948V23.0668H102.413C102.413 22.8054 102.356 22.5739 102.243 22.3722C102.129 22.1705 101.971 22.0128 101.77 21.8991C101.571 21.7827 101.339 21.7244 101.075 21.7244C100.799 21.7244 100.555 21.7884 100.342 21.9162C100.132 22.0412 99.967 22.2102 99.8477 22.4233C99.7283 22.6335 99.6673 22.8679 99.6644 23.1264V24.196C99.6644 24.5199 99.7241 24.7997 99.8434 25.0355C99.9656 25.2713 100.137 25.4531 100.359 25.581C100.581 25.7088 100.843 25.7727 101.147 25.7727C101.349 25.7727 101.534 25.7443 101.701 25.6875C101.869 25.6307 102.012 25.5455 102.132 25.4318C102.251 25.3182 102.342 25.179 102.404 25.0142L104.083 25.125C103.998 25.5284 103.824 25.8807 103.559 26.1818C103.298 26.4801 102.96 26.7131 102.545 26.8807C102.133 27.0455 101.657 27.1278 101.118 27.1278ZM107.122 18.2727V27H105.306V18.2727H107.122Z"
                                    fill="black" />
                                <rect width="43" height="46" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_524_4674"
                                            transform="translate(0 -0.00381141) scale(0.012987 0.01214)" />
                                    </pattern>
                                    <image id="image0_524_4674" width="77" height="83"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </a>

                        <ul class="navbar__list hide-on-tablet">
                            <li class="navbar__item">
                                <a href="./index.php" class="navbar__item-link">Home</a>
                            </li>
                            <li class="navbar__item">
                                <a href="./index.php?act=shoppage" class="navbar__item-link">Shop
                                    <i class="fa-solid fa-chevron-down fa-sm"></i>
                                </a>
                                <!-- Dropdown menu -->
                                <div class="navbar__dropdown">
                                    <ul class="dropdown__list">
                                        <?php

$cate_list = get_all_cates();
foreach ($cate_list as $cate_item) {
    echo '
                                         <li class="dropdown__item">
                                            <a href="./index.php?act=shoppage&cateid=' . $cate_item['id'] . '" class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-person"></i> ' . $cate_item['tendanhmuc'] . '
                                            </a>
                                         </li>
                                         ';
}
?>


                                        <!-- <li class="dropdown__item">
                                            <a href="./index.php?act=shoppage&cate=formen" class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-person"></i> For Men
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="./index.php?act=shoppage&cate=forwomen"
                                                class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-person-dress"></i> For Women
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="./index.php?act=shoppage&cate=forshoes"
                                                class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-socks"></i> For Shoes
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="" class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-forward"></i> Other
                                            </a>
                                            <ul class="sub-dropdown__list">
                                                <li class="sub-dropdown__item">
                                                    <a href="" class="sub-dropdown__item-link">
                                                        <i class="dropdown__item-icon fa-solid fa-compass"></i> Menu
                                                        link
                                                    </a>
                                                </li>
                                                <li class="sub-dropdown__item">
                                                    <a href="" class="sub-dropdown__item-link">
                                                        <i class="dropdown__item-icon fa-solid fa-mars-double"></i> Menu
                                                        link
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </div>

                            </li>
                            <li class="navbar__item">
                                <a href="./index.php?act=aboutpage" class="navbar__item-link">About</a>
                            </li>
                            <li class="navbar__item">
                                <a href="" class="navbar__item-link">Members</a>
                            </li>
                            <li class="navbar__item">
                                <a href="./index.php?act=contactpage" class="navbar__item-link">Contact</a>
                            </li>
                            <li class="navbar__item">
                                <a href="" class="navbar__item-link">Other
                                    <i class="fa-solid fa-chevron-down fa-sm"></i>
                                </a>
                                <!-- Dropdown menu -->
                                <div class="navbar__dropdown">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__item">
                                            <a href="" class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-brands fa-blogger-b"></i> Blog
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="" class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-question"></i> FAQ
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="" class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-circle-exclamation"></i> 404
                                                ERROR
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="" class="dropdown__item-link">
                                                <i class="dropdown__item-icon fa-solid fa-forward"></i> Other
                                            </a>
                                            <ul class="sub-dropdown__list">
                                                <li class="sub-dropdown__item">
                                                    <a href="" class="sub-dropdown__item-link">
                                                        <i class="dropdown__item-icon fa-solid fa-compass"></i> Menu
                                                        link
                                                    </a>
                                                </li>
                                                <li class="sub-dropdown__item">
                                                    <a href="" class="sub-dropdown__item-link">
                                                        <i class="dropdown__item-icon fa-solid fa-mars-double"></i> Menu
                                                        link
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="navbar__item">
                                <a href="./index.php?act=shoppage&sale=1"
                                    class="navbar__item-link navbar__item-link--saleoff">SALE OFF</a>
                            </li>
                            <li class="navbar__item">
                                <i class="navbar__item-icon-search fa fa-search" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="navbar__right-section">
                            <div class="navbar__login navbar__item">
                                <?php
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
    $iduser = $_SESSION['iduser'];
    $user = getuserinfobyid($iduser)[0];
    // var_dump($user);
    ?>

                                <img src="<?php echo $user['avatar'] ?>" alt="" class="navbar__login-avatar-img">
                                <?php
} else {

    ?>
                                <i class="navbar__login-item navbar__login-icon fa fa-user" aria-hidden="true"></i>
                                <?php
}
?>
                                <p class="navbar__login-item navbar__login-text">

                                    <?php if (isset($_SESSION['username']) && $_SESSION['username'] != '') {echo $_SESSION['username'];} else {echo "ACCOUNT";}?>

                                </p>
                                <i class="fa-solid fa-chevron-down fa-sm"></i>
                                <!-- Dropdown menu -->
                                <div class="navbar__dropdown account__dropdown">
                                    <ul class="dropdown__list account__dropdown-list">
                                        <?php
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
    echo '
                                                <li class="dropdown__item account__dropdown-item">
                                                <a href="./index.php?act=profilepage"
                                                    class="dropdown__item-link account__dropdown-item-link">
                                                    USER INFORMATION
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="./index.php?act=logout"
                                                    class="dropdown__item-link account__dropdown-item-link">
                                                    LOGOUT
                                                </a>
                                            </li>
                                                ';
} else {
    ?>

                                        <li class="dropdown__item account__dropdown-item">
                                            <a href="./index.php?act=loginpage"
                                                class="dropdown__item-link account__dropdown-item-link">
                                                LOGIN
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="./index.php?act=signuppage"
                                                class="dropdown__item-link account__dropdown-item-link">
                                                SIGN UP
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="./index.php?act=forgotpasspage"
                                                class="dropdown__item-link account__dropdown-item-link">
                                                FORGOT PASSWORD
                                            </a>
                                        </li>
                                        <?php
}
?>
                                    </ul>
                                </div>
                            </div>
                            <a href="./index.php?act=shoppingcartpage" class="navbar__cart">
                                <i class="navbar__cart-icon fa-solid fa-cart-shopping mobile-navbar__icon"></i>
                                <span class="navbar__cart-count ">
                                    <?php if (isset($number_cart_items)) {
    echo $number_cart_items;
} else {
    echo 0;
}
?>
                                    <!-- <span class="navbar__cart-count-text">10</span> -->
                                </span>
                            </a>
                            <div class="navbar__right-section-moible  hide-on-pc">
                                <i
                                    class="navbar__right-section-moible-search fa-solid fa-magnifying-glass mobile-navbar__icon"></i>
                                <i class="navbar__right-section-moible-menu fa-solid fa-bars mobile-navbar__icon"></i>
                            </div>

                        </div>
                        <ul class="menu-responsive hide-on-pc hide-on-tablet-mobile">
                            <li class="menu-responsive__item">
                                <a href="./shop-page-for-women.html" class="menu-responsive__item-link">
                                    <i class="menu-responsive__item-icon-left fa-solid fa-shop"></i>
                                    <span class="menu-responsive__item-link-text">Shop</span> <i
                                        class="fa-solid fa-chevron-down menu-responsive__item-icon-right"></i>
                                </a>
                                <ul class="menu-responsive__dropdown">
                                    <li class="menu-responsive__dropdown-item">
                                        <a href="" class="menu-responsive__dropdown-link"><i
                                                class="dropdown__item-icon fa-solid fa-person"></i> For Men</a>
                                    </li>
                                    <li class="menu-responsive__dropdown-item">
                                        <a href="./shop-page-for-women.html" class="menu-responsive__dropdown-link"><i
                                                class="dropdown__item-icon fa-solid fa-person-dress"></i> For Women</a>
                                    </li>
                                    <li class="menu-responsive__dropdown-item">
                                        <a href="" class="menu-responsive__dropdown-link"><i
                                                class="dropdown__item-icon fa-solid fa-socks"></i>For Shoes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-responsive__item">
                                <a href="./about-page.html" class="menu-responsive__item-link"><i
                                        class="menu-responsive__item-icon-left fa-regular fa-address-card"></i>
                                    <span class="menu-responsive__item-link-text"> About</span> <i
                                        class=" fa-solid fa-chevron-down menu-responsive__item-icon-right"></i></a>
                            </li>
                            <li class="menu-responsive__item">
                                <a href="" class="menu-responsive__item-link"><i
                                        class="menu-responsive__item-icon-left fa-solid fa-right-to-bracket"></i> <span
                                        class="menu-responsive__item-link-text">Login, Logout</span> <i
                                        class="fa-solid fa-chevron-down menu-responsive__item-icon-right"></i></a>
                            </li>
                            <li class="menu-responsive__item">
                                <a href="" class="menu-responsive__item-link"><i
                                        class="menu-responsive__item-icon-left fa-solid fa-arrows-up-down-left-right"></i>
                                    <span class="menu-responsive__item-link-text">Other</span> <i
                                        class="fa-solid fa-chevron-down menu-responsive__item-icon-right"></i>
                                </a>
                                <!-- Dropdown menu responsive -->

                                <ul class="menu-responsive__dropdown">
                                    <li class="menu-responsive__dropdown-item">
                                        <a href="./contact-page.html" class="menu-responsive__dropdown-link"><i
                                                class="dropdown__item-icon fa-solid fa-person"></i>Contact</a>
                                    </li>
                                    <li class="menu-responsive__dropdown-item">
                                        <a href="" class="menu-responsive__dropdown-link"><i
                                                class="dropdown__item-icon fa-solid fa-person-dress"></i> FAQ</a>
                                    </li>
                                    <li class="menu-responsive__dropdown-item">
                                        <a href="" class="menu-responsive__dropdown-link"><i
                                                class="dropdown__item-icon fa-solid fa-socks"></i>ERROR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>