<!--HEADER-->
<?php require_once "sections/header.php";?>

<!--NAVBAR-->
<?php require_once "sections/navbar.php";?>

<!--SIDEBAR-->
<?php require_once "sections/sidebar.php";?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'news-add'): ?>
                            Yangilik qo'shish
                        <?php else: ?>
                            Yangilikni tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=news">Yangiliklar</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'news-add'): ?>
                            <li class="breadcrumb-item active">Yangilik qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">Yangilikni tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">

                <?php if(!empty($newsData)): ?>
                    <input type="hidden" name="id" value="<?=$newsData['id']?>">
                <?php endif; ?>
                <div class="row pb-3">
                    <?php if(!empty($errorMessage)): ?>
                        <div class="alert alert-danger">
                            <?=$errorMessage?>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="input_item mb-3">
                                    <label for="title">Sarlavha</label>
                                    <input type="text" name="title" class="form-control" value="<?=(!empty($newsData['title'])) ? $newsData['title'] : ''?>">
                                </div>
                                <div class="input_item mb-3">
                                    <label for="anons">Anons</label>
                                    <textarea name="anons" id="anons" rows="4" class="form-control"><?=(!empty($newsData['anons'])) ? $newsData['anons'] : ''?></textarea>
                                </div>
                                <div class="input_item mb-3">
                                    <label for="body">Body</label>
                                    <textarea name="body" id="body" rows="4" class="form-control"><?=(!empty($newsData['body'])) ? $newsData['body'] : ''?></textarea>
                                </div>
                                <div class="input_item mb-3">
                                    <label for="created_date">Created date</label>
                                    <input required type="date" id="created_date" name="created_date" class="form-control" value="<?=(!empty($newsData['created_date'])) ? $newsData['created_date'] : ''?>">
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn btn-success">Jo'natish</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <?php $newsImage = getImage('news',$newsData,'image'); ?>
                                <div class="input_item mb-3 text-center">
                                    <label>
                                        <img src="<?=$newsImage?>" alt="" style="width: 100%; height: 225px; object-fit: contain; object-position: center;" class="mb-3">
                                        <input type="file" name="image" hidden class="preview">
                                        <span class="btn btn-primary btn-sm">Rasm qo'shish uchun tugmani bosing</span>
                                    </label>
                                </div>
                                <div class="input_item mb-3">
                                    <label for="seen_count">Seen count</label>
                                    <input type="text" name="seen_count" id="seen_count" class="form-control" value="<?=(!empty($newsData['seen_count']) ? $newsData['seen_count'] : '')?>">
                                </div>
                                <div class="input_item mb-3">
                                    <label for="category_id">Category ID</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <?php if(!empty($allNewsCategories)): ?>
                                            <?php foreach ($allNewsCategories as $category): ?>
                                                <option value="<?=$category['id']?>"><?=$category['name']?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($newsData)) && ($newsData['status'] == 1) ? 'checked': ''?>>
                                    <label for="status">Holati</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>

<!--FOOTER-->
<?php require_once "sections/footer.php";?>

<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>



