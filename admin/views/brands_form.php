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
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'brand-add'): ?>
                            Yangi hamkor qo'shish
                        <?php else: ?>
                            Tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=brands">Hamkorlar</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'brand-add'): ?>
                            <li class="breadcrumb-item active">Yangi hamkor qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active"> Tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">
                <?php if(!empty($brandData)): ?>
                    <input type="hidden" name="id" value="<?= $brandData['id']?>">
                <?php endif; ?>
                <div class="row justify-content-center text-center">
                    <?php if(!empty($errorMessage)): ?>
                        <div class="alert alert-danger">
                            <?=$errorMessage?>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-8">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php $brandImage = getImage('brands',$brandData,'image'); ?>
                                <div class="input_item mb-3 text-center">
                                    <label>
                                        <img src="<?=$brandImage?>" alt="" style="width: 100%; height: 225px; object-fit: contain; object-position: center;" class="mb-3">
                                        <input type="file" name="image" hidden class="preview">
                                        <span class="btn btn-primary btn-sm">Rasm qo'shish uchun tugmani bosing</span>
                                    </label>
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($brandData)) && ($brandData['status'] == 1) ? 'checked': ''?>>
                                    <label for="status">Holati</label>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn btn-success">Jo'natish</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>

<!--FOOTER-->
<?php require_once "sections/footer.php";?>



