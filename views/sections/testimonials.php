<!--  ОТЗЫВЫ  -->
<div class="testimonial__area pb-80 grey-bg fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                <div class="testimonial__section-box text-center mb-50">
                    <h4 class="section-subtitle">Izohlar</h4>
                    <h2 class="section-title">Xaridorlar biz haqimizda nima deydi?</h2>
                </div>
            </div>
        </div>
        <div class="testimonial__slider-section">
            <div class="swiper-container testimonial__slider-active">
                <?php if(!empty($testimonials)): ?>
                    <div class="swiper-wrapper mb-70">

                        <?php foreach ($testimonials as $testimonial): ?>

                            <?php $image = getImage('testimonial', $testimonial, 'image') ?>
                            <div class="swiper-slide wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                            <div class="testimonial__item-wrapper p-relative">
                                <div class="testimonial__item z-index-3">
                                    <div class="testimonial__icon pb-20"><i class="fas fa-quote-left"></i></div>
                                    <div class="testimonial__content pb-10">
                                        <p><?=$testimonial['body']?></p>
                                    </div>
                                    <div class="testimonial__author-box">
                                        <div class="testimonial__thum-sm mr-15"><img src="<?=$image?>" alt=""></div>
                                        <div class="testimonial__author-info">
                                            <h4 class="testimonial__author-name"><?=$testimonial['name']?></h4><span><?=$testimonial['job']?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="testimonial__slider-dots text-center"></div>
            </div>
        </div>
    </div>
</div>
