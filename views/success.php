<?php require_once "sections/header.php" ?>

<main>
    <div class="error__area error__area-bg pt-110 pb-110" data-background="<?=ASSETS?>img/error/error-bg.jpg" style="background-image: url(&quot;<?=ASSETS?>img/error/error-bg.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="error__item-box text-center">
                        <div class="alert-alert-success mb-30">
                            <?=$message;?>
                        </div>
                    <div>
                        <a class="tp-btn back-bg" href="/"><span>Asosiy sahifaga qaytish</span></a>
                </div>
            </div>
        </div>
    </div>

</main>
<?php require_once "sections/footer.php" ?>

