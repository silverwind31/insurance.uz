<footer>
    <div class="footer__area pt-80 pb-40" data-background="<?=ASSETS?>img/footer/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                    <div class="footer__widget footer-col-1">
                        <div class="footer__content">
                            <h4 class="footer__title">Biz haqimizda</h4>
                            <p><?=getSettings('footer_about')?></p>
                        </div>
                        <div class="footer__social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-dribbble"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                    <div class="footer__widget footer-col-2">
                        <div class="footer__content">
                            <h4 class="footer__title">Foydali havolalar</h4>
                        </div>
                        <div class="footer__menu">
                            <?php if(!empty($footerMenus)): ?>
                            <ul>
                                <?php foreach ($footerMenus as $menu): ?>
                                    <li><a href="<?=$menu['link']?>"><?=$menu['title']?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s">
                    <div class="footer__widget footer-col-3">
                        <div class="footer__content">
                            <h4 class="footer__title">Biz bilan bo'glanish</h4>
                        </div>
                        <div class="footer__address">
                            <ul>
                                <li><a href="mailto:<?=getSettings('email')?>"><i class="fas fa-envelope"></i><?=getSettings('email')?></a></li>
                                <li><a href="https://www.google.com/maps/place/Melbourne+VIC,+Australia/@-37.9716929,144.7729576,10z/data=!3m1!4b1!4m5!3m4!1s0x6ad646b5d2ba4df7:0x4045675218ccd90!8m2!3d-37.8136276!4d144.9630576" target="_blank"><i class="fas fa-map-marker-alt"></i><span><?=getSettings('location')?></span></a></li>
                            </ul>
                        </div>
                        <div class="footer__content reglament">
                            <h4 class="footer__title-inner">Ish reglamenti</h4>
                            <?=getSettings('working_time_footer')?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
                    <div class="footer__widget footer-col-4">
                        <div class="footer__content">
                            <h4 class="footer__title">Obuna bo'lish</h4>
                            <p class="pr-space">Bizning ijtimoiy tarmoqdagi sahifalarimizga obuna bo'ling</p>
                        </div>
                        <div class="footer__input">
                            <form action="/"><input type="email" placeholder="Pochta manzili"><button type="submit"><i class="fas fa-paper-plane"></i></button></form>
                        </div>
                        <div class="footer__contact d-flex align-items-center">
                            <div class="footer__icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="footer__number"><a href="tel:<?=getSettings('tel_class')?>"><?=getSettings('tel_title')?></a><span>Mutaxassis bilan bog'lanish</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__area copyright__bg pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center"><span><?=getSettings('copyright')?></span></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?=ASSETS?>js/jquery.js"></script>
<script src="<?=ASSETS?>js/waypoints.js"></script>
<script src="<?=ASSETS?>js/bootstrap.bundle.min.js"></script>
<script src="<?=ASSETS?>js/swiper-bundle.js"></script>
<script src="<?=ASSETS?>js/slick.js"></script>
<script src="<?=ASSETS?>js/magnific-popup.js"></script>
<script src="<?=ASSETS?>js/counterup.js"></script>
<script src="<?=ASSETS?>js/wow.js"></script>
<script src="<?=ASSETS?>js/nice-select.js"></script>
<script src="<?=ASSETS?>js/meanmenu.js"></script>
<script src="<?=ASSETS?>js/isotope-pkgd.js"></script>
<script src="<?=ASSETS?>js/imagesloaded-pkgd.js"></script>
<script src="<?=ASSETS?>js/ajax-form.js"></script>
<script src="<?=ASSETS?>js/main.js"></script>
</body>
</html>