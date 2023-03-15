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
                        Sozlanmani tahrirlash
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=settings">Sozlanmalar</a></li>
                            <li class="breadcrumb-item active"><?=$settingsItem['name']?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post">

                <?php if(!empty($settingsItem)): ?>
                    <input type="hidden" name="id" value="<?=$settingsItem['id']?>">
                <?php endif; ?>
                <div class="row ">
                    <div class="col-12">
                        <?php if(!empty($errorMessage)): ?>
                            <div class="alert alert-danger">
                                <?=$errorMessage?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="input_item mb-3">
                                    <label for="name">Nomi</label>
                                    <input type="text" name="name" class="form-control" value="<?=(!empty($settingsItem['name'])) ? $settingsItem['name'] : ''?>">
                                </div>
                                <div class="input_item">
                                    <label for="value">Ma'lumoti</label>
                                    <input type="text" name="value" class="form-control" value="<?=(!empty($settingsItem['value'])) ? $settingsItem['value'] : ''?>">
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


