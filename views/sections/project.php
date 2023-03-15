<div class="project__area fix">
    <div class="project__bg pt-120 pb-200" data-background="<?=ASSETS?>img/project/project-bg.jpg">
        <div class="container">
            <div class="row justify-content-center wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                <div class="col-xl-7 col-lg-10">
                    <div class="project__section-box text-center">
                        <h4 class="section-subtitle">Mashhur loyihalarimiz</h4>
                        <h2 class="section-title text-white">Bizning eng yaxshi sug'urta loyihalarimiz</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <?php if(!empty($project)): ?>
                <div class="project__slider-wrapper">
                    <div class="project__slider-active">
                        <?php foreach ($project as $item): ?>
                            <?php $image = getImage('project', $item, 'image'); ?>
                            <div class="project__slider-item p-relative wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                            <div class="project__img"><img src="<?=$image?>" alt=""></div>
                            <div class="project__content-box">
                                <div class="project__info-text">
                                    <h4 class="project__title-sm"><a href="/"><?=$item['title']?></a></h4><span><?=$item['subtitle']?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>