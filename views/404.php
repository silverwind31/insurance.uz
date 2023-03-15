<?php require_once "sections/header.php" ?>

<main>

    <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="<?=ASSETS?>img/breadcurmb/breadcurmb-2.jpg" style="background-image: url(&quot;<?=ASSETS?>img/breadcurmb/breadcurmb-2.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content text-center z-index">
                        <h3 class="breadcrumb__title">Sahifa topilmadi</h3>
                        <div class="breadcrumb__list">
                            <span><a href="/">Asosiy</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span class="theme-color">404 - sahifa topilmadi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="error__area error__area-bg pt-110 pb-110" data-background="<?=ASSETS?>img/error/error-bg.jpg" style="background-image: url(&quot;<?=ASSETS?>img/error/error-bg.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="error__item-box text-center">
                        <div class="error__thumb pb-25">
                            <img src="<?=ASSETS?>img/error/error.png" alt="">
                        </div>
                        <div class="error__content">
                            <h4 class="error__title-sm">sahifa topilmadi</h4>
                            <p>Siz qidirayotgan sahifa mavjud emas!</p>
                        </div>
                        <div>
                            <a class="tp-btn back-bg" href="/"><span>Asosiy sahifaga qaytish</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php require_once "sections/footer.php" ?>
