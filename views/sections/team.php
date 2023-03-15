<div class="team__area pt-80 pb-80 p-relative">
    <div class="team__shape-1 d-none d-xl-block wow tpfadeLeft" data-wow-duration=".7s" data-wow-delay=".3s"><img src="<?=ASSETS?>img/team/team-shape-1.png" alt=""></div>
    <div class="team__shape-2 d-none d-xl-block wow tpfadeRight" data-wow-duration=".7s" data-wow-delay=".5s"><img src="<?=ASSETS?>img/team/team-shape-2.png" alt=""></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                <div class="team__section-box text-center pb-30">
                    <h4 class="section-subtitle">Jamoamiz tarkibi</h4>
                    <h2 class="section-title pb-20">Jamoamiz a'zolari</h2>
                </div>
            </div>
        </div>
        <?php if(!empty($team)): ?>
        <div class="row">
            <?php foreach ($team as $item): ?>
                <?php $image = getImage('team', $item, 'image'); ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s">
                <div class="team__item p-relative">
                    <div class="team__thumb"><img src="<?=$image?>" alt="" style="width: 420px; height: 100%;"></div>
                    <div class="team__content">
                        <div class="team__social-box"><a href="#"><i class="fas fa-share-alt"></i></a>
                            <div class="team__social-icon d-flex flex-column">
                                <a class="facebook" href="<?=$item['facebook_link']?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="twitter" href="<?=$item['twitter_link']?>"><i class="fab fa-twitter"></i></a>
                                <a class="instagram" href="<?=$item['instagram_link']?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team__info">
                            <h4 class="team__author-name"><a href="/"><?=$item['name']?></a></h4><span><?=$item['job']?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
