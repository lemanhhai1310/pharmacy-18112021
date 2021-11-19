<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Pharmacy - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<!--header-->
<div class="header">
    <!--header__top-->
    <div class="header__top uk-visible@m">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li>
                            <a href="#">Tin tức</a>
                            <div class="uk-navbar-dropdown header__dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Tin hoạt động Poke</a></li>
                                    <li><a href="#">Thông tin y dược</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="uk-navbar-right">
                    <!--language-->
                    <div class="uk-navbar-item">
                        <div class="header__top__language">
                            <span>Tiếng Việt</span>
                        </div>
                        <div class="uk-navbar-dropdown header__dropdown" uk-dropdown="mode: hover">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Tiếng Việt</a></li>
                                <li><a href="#">Tiếng Anh</a></li>
                                <li><a href="#">Tiếng Nhật</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/language-->
                </div>

            </nav>
        </div>
    </div>
    <!--/header__top-->

    <!--header__bottom-->
    <div class="header__bottom" uk-sticky>
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <a href="." class="uk-navbar-item uk-logo"><img src="images/logo_h.png" alt=""></a>
                </div>

                <div class="uk-navbar-right">
                    <!--search-->
                    <div class="uk-navbar-item uk-visible@m">
                        <div class="uk-position-relative header__bottom__search">
                            <input class="uk-input uk-border-pill header__bottom__search__input" type="text" placeholder="Bạn cần tìm gì">
                            <button type="button" class="header__bottom__search__btn uk-button uk-button-default uk-position-center-right"></button>
                        </div>
                    </div>
                    <!--/search-->

                    <!--quantam-->
                    <div class="uk-navbar-item">

                    </div>
                    <!--/quantam-->

                    <!--giohang-->
                    <div class="uk-navbar-item">

                    </div>
                    <!--/giohang-->

                    <!--account-->
                    <div class="uk-navbar-item">

                    </div>
                    <!--/account-->
                </div>

            </nav>
        </div>
    </div>
    <!--/header__bottom-->
</div>
<!--/header-->