<?php if(!empty($allSlides)): ?>
    <div class="slider__area">
        <div class="slider__active">

            <?php foreach ($allSlides as $slide): ?>

                <?php $image = getImage('slider', $slide, 'image'); ?>
                <!--    SLIDER ITEM    -->
                <div class="slider__item">
                    <div class="slider__bg slider__height slider__overlay-shape d-flex align-items-center" style="background: url(<?php echo $image;?>)">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-9 col-xl-8 col-lg-10">
                                    <div class="slider__content-box z-index-5">
                                        <?php if(!empty($slide['video_link'])): ?>
                                        <div class="slider__video">
                                            <a class="popup-video" href="<?=$slide['video_link']?>"><i class="fas fa-play"></i></a>
                                            <span><?=$slide['video_btn']?></span>
                                        </div>
                                        <?php endif; ?>
                                        <div class="slider__title-box">
                                            <h4 class="slider__sub-title text-white pb-25"><?=$slide['subtitle']?></h4>
                                            <h2 class="slider__title text-white pb-25"><?=$slide['title']?></h2>
                                        </div>
                                        <div class="slider__btn"><a class="tp-btn" href="<?=$slide['button_link']?>"><span><?=$slide['button_text']?></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>