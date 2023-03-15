<?php require_once "sections/header.php" ?>
    <main>
        <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="assets/img/breadcurmb/breadcurmb.jpg" style="background-image: url(&quot;assets/img/breadcurmb/breadcurmb.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content text-center z-index">
                            <h3 class="breadcrumb__title">Barcha xizmatlar</h3>
                            <div class="breadcrumb__list">
                                <span><a href="/">Asosiy sahifa</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span class="theme-color">Barcha xizmatlar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service__area pt-80 pb-80 grey-bg-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="service__section-box text-center mb-50 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                            <h2 class="section-title">Bizning xizmatlarimiz</h2>
                        </div>
                    </div>
                </div>
                <?php if(!empty($services)): ?>
                    <div class="row">
                        <?php foreach ($services as $service): ?>
                            <div class="col-xl-3 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                <div class="service__item text-center d-flex justify-content-between flex-column">
                                    <div class="service__top-icon"><span><i class="<?=$service['class']?>"></i></span></div>
                                    <div class="service__content z-index">
                                        <h4 class="service__title-sm"><a href="?page=service-details&id=<?=$service['category_id']?>"><?=$service['service_title']?></a></h4>
                                        <p><?=$service['service_description']?></p>
                                    </div>
                                    <div class="service__bottom-icon z-index"><a href="?page=service-details&id=<?=$service['category_id']?>"><i class="fas fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
<?php require_once "sections/footer.php" ?>

