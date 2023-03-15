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
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'slider-add'): ?>
                            Yangi slayder qo'shish
                        <?php else: ?>
                            Slayderni tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=slider">Slayder</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'slider-add'): ?>
                            <li class="breadcrumb-item active">Yangi slayder qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">Slayderni tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">

                <?php if(!empty($sliderData)): ?>
                    <input type="hidden" name="id" value="<?=$sliderData['id']?>">
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
                                    <input type="text" name="title" class="form-control" value="<?=(!empty($sliderData['title'])) ? $sliderData['title'] : ''?>">
                                </div>
                                <div class="input_item mb-3">
                                    <label for="subtitle">Ikkilamchi sarlavha</label>
                                    <input type="subtitle" name="subtitle" class="form-control" value="<?=(!empty($sliderData['subtitle'])) ? $sliderData['subtitle'] : ''?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input_item mb-3">
                                            <label for="video_btn">Video sarlavhasi</label>
                                            <input type="video_btn" name="video_btn" class="form-control" value="<?=(!empty($sliderData['video_btn'])) ? $sliderData['video_btn'] : ''?>">
                                        </div>
                                        <div class="input_item">
                                            <label for="button_text">Tugma sarlavhasi</label>
                                            <input type="button_text" name="button_text" class="form-control" value="<?=(!empty($sliderData['button_text'])) ? $sliderData['button_text'] : ''?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input_item mb-3">
                                            <label for="video_link">Video havolasi</label>
                                            <input type="video_link" name="video_link" class="form-control" value="<?=(!empty($sliderData['video_link'])) ? $sliderData['video_link'] : ''?>">
                                        </div>
                                        <div class="input_item">
                                            <label for="button_link">Tugma havolasi</label>
                                            <input type="button_link" name="button_link" class="form-control" value="<?=(!empty($sliderData['button_link'])) ? $sliderData['button_link'] : ''?>">
                                        </div>
                                    </div>
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

                                <?php $sliderImage = getImage('slider',$sliderData,'image'); ?>
                                <div class="input_item mb-3 text-center">
                                    <label>
                                        <img src="<?=$sliderImage?>" alt="" style="width: 100%; height: 225px; object-fit: contain; object-position: center;" class="mb-3">
                                        <input type="file" name="image" hidden class="preview">
                                        <span class="btn btn-primary btn-sm">Rasm qo'shish uchun tugmani bosing</span>
                                    </label>
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($sliderData)) && ($sliderData['status'] == 1) ? 'checked': ''?>>
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



