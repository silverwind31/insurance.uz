<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Universal Sug'urta™</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?=ASSETS?>img/favicon.png">
    <link rel="stylesheet" href="<?=ASSETS?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/animate.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/custom-animation.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/swiper-bundle.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/slick.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/nice-select.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/flaticon.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/meanmenu.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/font-awesome-pro.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/spacing.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/style.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/custom.css">
</head>
<body>
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div><button class="scroll-top scroll-to-target" data-target="html"><i class="far fa-angle-double-up"></i></button>
<header>
    <div class="header-top__area black-bg fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-10 col-lg-9 col-md-8">
                    <div class="header-top__left-info">
                        <ul>
                            <li class="d-none d-xl-inline-block"><a href="javascript:void(0);"><i class="fas fa-clock"></i><?=getSettings('working_time')?></a></li>
                            <li class="d-none d-lg-inline-block"><a href="https://www.google.com/maps/place/Sydney+NSW,+Australia/@-33.8473567,150.6517951,10z/data=!3m1!4b1!4m5!3m4!1s0x6b129838f39a743f:0x3017d681632a850!8m2!3d-33.8688197!4d151.2092955" target="_blank"><i class="fas fa-map"></i><?=getSettings('location')?></a></li>
                            <li><a href="mailto:<?=getSettings('email')?>"><i class="fas fa-envelope"></i><?=getSettings('email')?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="header-top__social header-top__blue-bg text-end z-index-5 d-none d-md-block">
                        <?php if(!empty($socialLinks)): ?>
                            <?php foreach ($socialLinks as $social): ?>
                                <?php echo "<a href='{$social['link']}'><i class='{$social['class']}'></i></a>"; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-bottom__area white-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                    <div class="header-bottom__logo header-bottom__blue-bg z-index-5"><a href="/">Universal Sug'urta™</a></div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block">
                    <div class="header-bottom__main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <?php if(!empty($allMenus)): ?>
                                    <?php foreach ($allMenus as $menu): ?>
                                      <?php echo generateHeaderMenu($menu); ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                    <div class="header-bottom__right d-flex align-items-center justify-content-end">
                        <div class="header-bottom__search-wrapper p-relative d-none d-md-block">
                            <div class="header-bottom__search"><a class="header-bottom__icon-search" href="javascript:void(0)"><i class="fas fa-search"></i></a><a class="header-bottom__icon-close" href="javascript:void(0)"><i class="fas fa-times"></i></a></div>
                            <div class="header-bottom__search-box">
                                <form action="#"><input type="text" placeholder="Search ..."><button type="submit"><i class="fas fa-search"></i></button></form>
                            </div>
                        </div><a class="tp-btn-sm ml-30 d-none d-md-block" href="/"><span>Buyurtma qilish</span></a><a class="d-lg-none menu-bar tp-menu-bar" href="#"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="tp-offcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn"><button class="close-btn"><i class="fal fa-times"></i></button></div>
        <div class="tpoffcanvas__logo"><a href="/"><img src="<?=ASSETS?>img/logo/logo.png" alt=""></a></div>
        <div class="tpoffcanvas__text">
            <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod viverra nibh cras pulvinar suspen.</p>
        </div>
        <div class="mobile-menu"></div>
        <div class="tpoffcanvas__info">
            <h3 class="offcanva-title">Get In Touch</h3>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon"><a href="/"><i class="fal fa-envelope"></i></a></div>
                <div class="tpoffcanvas__info-address"><span>Email</span><a href="maito:hello@yourmail.com"><span class="__cf_email__" data-cfemail="c6aea3aaaaa986bfa9b3b4aba7afaae8a5a9ab">[email&#160;protected]</span></a></div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon"><a href="#"><i class="fal fa-phone-alt"></i></a></div>
                <div class="tpoffcanvas__info-address"><span>Phone</span><a href="tel:(00)45611227890">(00) 456 1122 7890</a></div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon"><a href="#"><i class="fas fa-map-marker-alt"></i></a></div>
                <div class="tpoffcanvas__info-address"><span>Location</span><a href="https://www.google.com/maps/@37.4801311,22.8928877,3z" target="_blank">Riverside 255, San Francisco, USA </a></div>
            </div>
        </div>
        <div class="tpoffcanvas__social">
            <div class="social-icon"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-facebook-square"></i></a><a href="#"><i class="fab fa-dribbble"></i></a></div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
