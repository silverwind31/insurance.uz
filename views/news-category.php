<?php require_once "sections/header.php" ?>
<main>
    <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="<?=ASSETS?>img/breadcurmb/breadcurmb.jpg" style="background-image: url(&quot;<?=ASSETS?>img/breadcurmb/breadcurmb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content text-center z-index">
                        <h3 class="breadcrumb__title"><?php echo $categoryData['name'];?></h3>
                        <div class="breadcrumb__list">
                            <span><a href="/">Asosiy</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span><a href="?page=all-news">Barcha yangiliklar</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span class="theme-color"><?php echo $categoryData['name'];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="postbox__area pt-120 pb-120 inner_pages">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-12">
                    <?php if(!empty($categoryNews)): ?>

                        <div class="row">
                            <?php foreach ($categoryNews as $news): ?>

                                <?php $image = getImage('news', $news, 'image'); ?>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
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
                    <?php else: ?>
                    <div class="alert alert-danger">
                        Yangiliklar mavjud emas!
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <?php require_once "sections/sidebar.php";?>
                </div>
            </div>
        </div>
    </div>

</main>
<?php require_once "sections/footer.php" ?>
