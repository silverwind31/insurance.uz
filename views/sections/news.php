<div class="blog__area grey-bg pt-80 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                <div class="blog__section-box text-center mb-50">
                    <h2 class="section-title">Sug'urtaga oid yangiliklar</h2>
                </div>
            </div>
        </div>
        <?php if(!empty($allNews)): ?>
            <div class="row">
                <?php foreach ($allNews as $news): ?>

                    <?php $image = getImage('news', $news, 'image'); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                    <div class="blog__item">
                        <div class="blog__img fix"><a href="?page=news-view&id=<?=$news['id']?>"><img class="w-100" src="<?=$image?>" alt=""></a></div>
                        <div class="blog__content">
                            <div class="blog__tag"><span><?=date('j', strtotime($news['created_date']))?> - <?=$months[date('n', strtotime($news['created_date']))]?> <?=date('Y', strtotime($news['created_date']))?></span></div>
                            <div class="blog__meta"><span class="frist-child"><i class="fas fa-eye"></i><?=$news['seen_count']?></span></div>
                            <div class="blog__title-box">
                                <h4 class="blog__title"><a href="?page=news-view&id=<?=$news['id']?>"><?=$news['title']?></a></h4>
                                <p><?=$news['anons']?></p>
                            </div>
                            <div class="blog__link"><a href="?page=news-view&id=<?=$news['id']?>">Batafsil <i class="far fa-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        <?php endif; ?>
    </div>
</div>
