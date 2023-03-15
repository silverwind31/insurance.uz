<?php require_once "sections/header.php" ?>
    <?php $newsCategoryData = getNewsCategoryById($newsData['category_id']);?>
    <main>
        <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="<?=ASSETS?>img/breadcurmb/breadcurmb.jpg" style="background-image: url(&quot;<?=ASSETS?>img/breadcurmb/breadcurmb.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content text-center z-index">
                            <h3 class="breadcrumb__title"><?php echo $newsData['title'];?></h3>
                            <div class="breadcrumb__list">
                                <span><a href="/">Asosiy</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span><a href="?page=all-news">Barcha yangiliklar</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span><a href="?page=news-category&id=<?=$newsData['category_id']?>"><?=$newsCategoryData['name']?></a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span class="theme-color"><?php echo $newsData['title'];?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="postbox__area pt-80 pb-80">
            <div class="container">
                <?php if(!empty($newsData)): ?>
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-12">
                            <div class="postbox__wrapper">
                                <article class="postbox__item format-image transition-3">
                                    <div class="postbox__content">
                                        <div class="postbox__meta">
                                            <span><i class="fal fa-eye"></i><?=$newsData['seen_count']?></span>
                                            <span><a href="#"><i class="fal fa-clock"></i> <?=date("j",strtotime($newsData['created_date']))?> - <?=$months[date("n",strtotime($newsData['created_date']))]?> <?=date("Y",strtotime($newsData['created_date']))?> yil</a></span>
                                        </div>
                                        <h3 class="postbox__title">
                                            <?php echo $newsData['title'];?>
                                        </h3>
                                        <div class="postbox__text">
                                            <?=$newsData['body'];?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4">
                            <?php require_once "sections/sidebar.php";?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </main>
<?php require_once "sections/footer.php" ?>

