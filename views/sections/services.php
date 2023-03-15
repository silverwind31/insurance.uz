<!--  СЕРВИСЫ  -->
<div class="service__area pb-80 grey-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <div class="service__section-box text-center mb-50 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                    <a href="?page=all-services" class="section-subtitle">Barcha xizmatlar</a>
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
                        <h4 class="service__title-sm"><a href="?page=service-details&id=<?=$service['id']?>"><?=$service['service_title']?></a></h4>
                        <p><?=$service['service_description']?></p>
                    </div>
                    <div class="service__bottom-icon z-index"><a href="?page=service-details&id=<?=$service['id']?>"><i class="fas fa-arrow-right"></i></a></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

