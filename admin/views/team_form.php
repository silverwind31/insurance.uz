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
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'team-add'): ?>
                            Yangi a'zo qo'shish
                        <?php else: ?>
                            Tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=team">Jamoa a'zolari</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'team-add'): ?>
                            <li class="breadcrumb-item active"> Yangi a'zo qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">Tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">

                <?php if(!empty($teamData)): ?>
                    <input type="hidden" name="id" value="<?=$teamData['id']?>">
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
                                    <label for="name">F.I.Sh.</label>
                                    <input type="text" name="name" class="form-control" value="<?=(!empty($teamData['name'])) ? $teamData['name'] : ''?>">
                                </div>
                                <div class="input_item mb-3">
                                    <label for="facebook_link">Facebook havola</label>
                                    <input type="text" name="facebook_link" class="form-control" value="<?=(!empty($teamData['facebook_link'])) ? $teamData['facebook_link'] : ''?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input_item mb-3">
                                            <label for="twitter_link">Twitter havola</label>
                                            <input type="text" name="twitter_link" class="form-control" value="<?=(!empty($teamData['twitter_link'])) ? $teamData['twitter_link'] : ''?>">
                                        </div>
                                        <div class="input_item">
                                            <label for="instagram_link">Instagram havola</label>
                                            <input type="text" name="instagram_link" class="form-control" value="<?=(!empty($teamData['instagram_link'])) ? $teamData['instagram_link'] : ''?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input_item mb-3">
                                            <label for="job">Kasbi</label>
                                            <input type="text" name="job" class="form-control" value="<?=(!empty($teamData['job'])) ? $teamData['job'] : ''?>">
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

                                <?php $teamImage = getImage('team',$teamData,'image'); ?>
                                <div class="input_item mb-3 text-center">
                                    <label>
                                        <img src="<?=$teamImage?>" alt="" style="width: 100%; height: 225px; object-fit: contain; object-position: center;" class="mb-3">
                                        <input type="file" name="image" hidden class="preview">
                                        <span class="btn btn-primary btn-sm">Rasm qo'shish uchun tugmani bosing</span>
                                    </label>
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($teamData)) && ($teamData['status'] == 1) ? 'checked': ''?>>
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



