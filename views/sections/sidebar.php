<div class="sidebar__wrapper">
    <div class="sidebar__widget mb-40">
        <h3 class="sidebar__widget-title">Izlash</h3>
        <div class="sidebar__widget-content">
            <div class="sidebar__search">
                <form action="#">
                    <div class="sidebar__search-input-2">
                        <input type="text" placeholder="Kalit so'z">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="sidebar__widget mb-40">
        <h3 class="sidebar__widget-title">Kategoriyalar</h3>
        <div class="sidebar__widget-content">
            <?php if(!empty($allNewsCategories)): ?>
            <ul>
                <?php foreach ($allNewsCategories as $newsCategory): ?>
                    <?php $categoryNewsCount = getNewsCount($newsCategory['id']) ?>
                    <li>
                        <a href="?page=news-category&id=<?=$newsCategory['id']?>"><?=$newsCategory['name']?><span><?=$categoryNewsCount?></span></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
    <div class="sidebar__widget mb-40">
        <h3 class="sidebar__widget-title">Top yangiliklar</h3>
        <div class="sidebar__widget-content">
            <?php if (!empty($topNews)): ?>

            <div class="sidebar__post rc__post">

                <?php foreach ($topNews as $news): ?>
                <?php $image = getImage('news', $news, 'image') ?>

                <div class="rc__post mb-20 d-flex align-items-center">
                    <div class="rc__post-thumb mr-20">
                        <a href="?page=news-view&id=<?=$news['id']?>"><img src="<?=$image?>"></a>
                    </div>
                    <div class="rc__post-content">
                        <div class="rc__meta">
                            <span><i class="fal fa-eye"></i><?=$news['seen_count']?></span>
                            <span><?=date("j",strtotime($news['created_date']))?> - <?=$months[date("n",strtotime($news['created_date']))]?> <?=date("Y",strtotime($news['created_date']))?> yil</span>
                        </div>
                        <h3 class="rc__post-title">
                            <a href="?page=news-view&id=<?=$news['id']?>"><?=$news['title']?></a>
                        </h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
