<div class="barnd__area pt-115 pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="brand__section-box text-center pb-60">
                    <h4>Bizning hamkorlarimiz</h4>
                </div>
            </div>
        </div>
        <?php if(!empty($brands)): ?>
        <div class="row">
            <div class="brand__slider-active">
                <?php foreach ($brands as $brand): ?>
                <?php $image = getImage('brands', $brand, 'image'); ?>
                    <div class="brand__item wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                        <img src="<?=$image?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
