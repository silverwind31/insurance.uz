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
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'social-add'): ?>
                            Yangi ijtimoy sahifa qo'shish
                        <?php else: ?>
                            Ijtimoiy sahifani tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=social">Ijtimoy tarmoqlar</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'social-add'): ?>
                            <li class="breadcrumb-item active">Yangi ijtimoy sahifa qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active"> Ijtimoiy sahifani tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post">

                <?php if(!empty($socialData)): ?>
                    <input type="hidden" name="id" value="<?=$socialData['id']?>">
                <?php endif; ?>
                <div class="row">
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
                                    <input type="text" name="title" class="form-control" value="<?=(!empty($socialData['title'])) ? $socialData['title'] : ''?>">
                                </div>
                                <div class="input_item">
                                    <label for="link">Havola</label>
                                    <input type="text" name="link" class="form-control" value="<?=(!empty($socialData['link'])) ? $socialData['link'] : ''?>">
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
                                <div class="input_item mb-3">
                                    <label for="order_by">Ketma-ketligi</label>
                                    <input type="text" name="order_by" class="form-control" value="<?=(!empty($socialData['order_by'])) ? $socialData['order_by'] : ''?>">
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($socialData)) && ($socialData['status'] == 1) ? 'checked': ''?>>
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


