<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quỹ Từ Thiện</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/cssdonate/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/cssdonate/style.css">
    <link rel="stylesheet" href="../asset/css/cssdonate/style-donggop.css">
    <link rel="stylesheet" href="../asset/css/cssdonate/grid-donggop.css">
    <link rel="stylesheet" href="../asset/css/cssdonate/modal.css">
    <link rel="stylesheet" href="../asset/css/cssdonate/reponsive-nav.css">
    <link rel="stylesheet" href="../asset/css/cssdonate/responsive.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="contact">
                                <p><span class="phone"><a href="#">Phone: +0123546789</a></span><span class="email"><a
                                            href="#">Email: Fptpolytechnic@edu.com.vn</a></span></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="join-us">
                                <p><a class="btn-open-login">THAM GIA NGAY</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <div class="clear"></div>
        <div class="container-modal login-modal">
            <div class="modal">
                <div class="modal-heading">
                    <h1>Login</h1>
                    <span class="btn-close-login">x</span>
                </div>
                <form onsubmit="login()">
                    <div class="input__field">
                        <input id="username" type="text" placeholder="User Name" />
                    </div>

                    <div class="input__field">
                        <input id="email" type="text" placeholder="Email" />
                    </div>
                    <div class="input__field">
                        <input id="password" type="password" placeholder="Password" />
                    </div>
                    <a class="signup-link btn-open-sign-up">Sign Up</a>
                    <div class="clear"></div>
                    <button id="btn" class="btn">Login</button>
                </form>
            </div>
        </div>
        <div class="container-modal sign-up-modal">
            <div class="modal">
                <div class="modal-heading">
                    <h1>Sign Up</h1>
                    <span class="btn-close-sign-up">x</span>
                </div>
                <form onsubmit="signup()">
                    <div class="input__field">
                        <input id="username" type="text" placeholder="User Name" />
                    </div>

                    <div class="input__field">
                        <input id="email" type="text" placeholder="Email" />
                    </div>
                    <div class="input__field">
                        <input id="password" type="password" placeholder="Password" />
                    </div>
                    <div class="input__field">
                        <input id="password" type="password" placeholder="Confirm Password" />
                    </div>
                    <a class="login-link btn-open-login-1">Login</a>
                    <div class="clear"></div>
                    <button id="btnSignup" class="btn">Sign Up</button>
                </form>
            </div>
        </div>
        <nav class="menu">
            <div class="img-nav">
                <img src="img/logo-1.png" alt="" />
                <h2>Quỹ từ thiện Fpoly</h2>
            </div>

            <div class="content-nav">
                <ul class="content-nav__title">
                    <li class="content-nav__title-link"><a href="index.html">Trang Chủ</a></li>
                    <li class="content-nav__title-link"><a href="gioithieu.html">Giới Thiệu</a></li>
                    <li class="content-nav__title-link"><a href="chuongtrinh.html">Chương Trình</a>
                        <ul class="content-nav__submenu">
                            <li class="content-nav__submenu-link"><a href="chuongtrinh1.html">Hỗ trợ người nghèo</a>
                            </li>
                            <li class="content-nav__submenu-link"><a href="chuongtrinh2.html">Hỗ trợ người vô gia cư</a>
                            </li>
                            <li class="content-nav__submenu-link"><a href="chuongtrinh3.html">Hỗ trợ giáo dục</a></li>
                        </ul>
                    </li>
                    <li class="content-nav__title-link"><a href="baocaotaichinh.html">Báo Cáo Tài Chính</a></li>
                    <li class="content-nav__title-link"><a href="donggop.html">Đóng Góp</a></li>
                    <li class="content-nav__title-link"><a href="search-page.html">Kiểm tra</a></li>
                </ul>
                <form>
                    <input class="search" type="text" name="search" placeholder="Tìm kiếm..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- bắt đầu nav-mobile -->
            <div class="nav-mobile">
                <div class="icon-mobile" id="btnmenu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="item_menu" id="menutop">
                    <form>
                        <input type="text" name="search" placeholder="Tìm kiếm..." />
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    <ul>
                        <li><a href="index.html">Trang Chủ</a></li>
                        <li><a href="gioithieu.html">Giới Thiệu</a></li>
                        <li><a href="chuongtrinh.html">Chương Trình</a></li>
                        <li><a href="baocaotaichinh.html">Báo Cáo Tài Chính</a></li>
                        <li><a href="donggop.html">Đóng Góp</a></li>
                        <li><a href="search-page.html">Kiểm tra</a></li>

                    </ul>
                </div>
            </div>
            <!-- kết thúc nav-mobile -->
        </nav>