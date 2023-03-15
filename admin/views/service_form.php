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
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'service-add'): ?>
                            Yangi xizmat qo'shish
                        <?php else: ?>
                            Xizmatni tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=services">Xizmatlar</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'service-add'): ?>
                            <li class="breadcrumb-item active">Yangi xizmat qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">Xizmatni tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">

                <?php if(!empty($serviceData)): ?>
                    <input type="hidden" name="id" value="<?=$serviceData['id']?>">
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
                                    <label for="service_title">Sarlavha</label>
                                    <input type="text" name="service_title" class="form-control" value="<?=(!empty($serviceData['service_title'])) ? $serviceData['service_title'] : ''?>">
                                </div>
                                <div class="input_item mb-3">
                                    <label for="service_description">Matn</label>
                                    <textarea name="service_description" id="service_description" rows="4" class="form-control"><?=(!empty($serviceData['service_description'])) ? $serviceData['service_description'] : ''?></textarea>
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
                                    <label for="class">Class</label>
                                    <input type="text" name="class" class="form-control" value="<?=(!empty($serviceData['class'])) ? $serviceData['class'] : ''?>">
                                </div>
                                <div class="input_item mb-3">
                                    <label for="category_id">Category ID</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <?php if(!empty($serviceCategories)): ?>
                                            <?php foreach ($serviceCategories as $category): ?>
                                                <option value="<?=$category['id']?>"><?=$category['name']?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($serviceData)) && ($serviceData['status'] == 1) ? 'checked': ''?>>
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



