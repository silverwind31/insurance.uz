<?php require_once "sections/header.php" ?>
<?php if(!empty($servicesData['id'])): ?>
    <main>
    <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="<?=ASSETS?>img/breadcurmb/breadcurmb.jpg" style="background-image: url(&quot;<?=ASSETS?>img/breadcurmb/breadcurmb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content text-center z-index">
                        <h3 class="breadcrumb__title">Xizmat haqida batafsil ma'lumot</h3>
                        <div class="breadcrumb__list">
                            <span><a href="/">Asosiy</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span><a href="?page=all-services">Barcha xizmatlar</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span class="theme-color"><?=$servicesData['service_title']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-details__area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                    <div class="service-details__thumb p-relative pb-50">
                        <img src="<?=ASSETS?>img/service/service-details-1.jpg" alt="">
                        <div class="service-details__video-btn">
                            <a class="tp-pulse-border popup-video" href="https://www.youtube.com/watch?v=3ctoSEQsY54"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                    <div class="service-details__content-box pb-35">
                        <h4 class="service-details__title">Best Car Insurance</h4>
                        <p class="pb-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as making this the first true generator on the Internet. </p>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself,</p>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-xl-6 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                    <div class="service-details__feature mb-30 d-flex align-items-center">
                        <div class="service-details__icon">
                            <span><i class="fas fa-users"></i></span>
                        </div>
                        <div class="service-details__info-text">
                            <h4>Life Insurance</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                    <div class="service-details__feature mb-30 d-flex align-items-center">
                        <div class="service-details__icon">
                            <span><i class="fas fa-home"></i></span>
                        </div>
                        <div class="service-details__info-text">
                            <h4>Home Insurance</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.7s; animation-name: tpfadeUp;">
                    <div class="service-details__feature mb-30 d-flex align-items-center">
                        <div class="service-details__icon">
                            <span><i class="fas fa-plane"></i></span>
                        </div>
                        <div class="service-details__info-text">
                            <h4>Travel Insurance</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.9s; animation-name: tpfadeUp;">
                    <div class="service-details__feature mb-30 d-flex align-items-center">
                        <div class="service-details__icon">
                            <span><i class="fas fa-briefcase"></i></span>
                        </div>
                        <div class="service-details__info-text">
                            <h4>Business Insurance</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.7s; animation-name: tpfadeUp;">
                    <div class="service-details__content-box pb-40">
                        <h4 class="service-details__title">A Simpler Way to Buy Car Insurance</h4>
                        <p class="pb-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as making this the first true generator on the Internet. </p>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.9s; animation-name: tpfadeUp;">
                    <div class="service-details__thumb pb-50">
                        <img src="<?=ASSETS?>img/service/service-details-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    <?php else: require_once "404.php"?>
<?php endif; ?>
<?php require_once "sections/footer.php" ?>

