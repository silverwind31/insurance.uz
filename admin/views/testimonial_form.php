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
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'testimonial-add'): ?>
                            Yangi izoh qo'shish
                        <?php else: ?>
                            Izohni tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=testimonial">Izohlar</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'testimonial-add'): ?>
                            <li class="breadcrumb-item active">Yangi izoh qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">Izohni tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">

                <?php if(!empty($testimonialData)): ?>
                    <input type="hidden" name="id" value="<?=$testimonialData['id']?>">
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
                                    <label for="name">Ismi</label>
                                    <input type="text" name="name" class="form-control" value="<?=(!empty($testimonialData['name'])) ? $testimonialData['name'] : ''?>">
                                </div>
                                <div class="input_item mb-3">
                                    <label for="body">Ikkilamchi sarlavha</label>
                                    <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?=(!empty($testimonialData['body'])) ? $testimonialData['body'] : ''?></textarea>
                                </div>
                                <div class="input_item mb-3">
                                    <label for="job">Ismi</label>
                                    <input type="text" name="job" class="form-control" value="<?=(!empty($testimonialData['job'])) ? $testimonialData['job'] : ''?>">
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

                                <?php $testimonialImage = getImage('testimonial',$testimonialData,'image'); ?>
                                <div class="input_item mb-3 text-center">
                                    <label>
                                        <img src="<?=$testimonialImage?>" alt="" style="width: 100%; height: 225px; object-fit: contain; object-position: center;" class="mb-3">
                                        <input type="file" name="image" hidden class="preview">
                                        <span class="btn btn-primary btn-sm">Rasm qo'shish uchun tugmani bosing</span>
                                    </label>
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($testimonialData)) && ($testimonialData['status'] == 1) ? 'checked': ''?>>
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



