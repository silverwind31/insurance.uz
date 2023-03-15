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
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'menu-add'): ?>
                            Menyu qo'shish
                        <?php else: ?>
                            Menyuni tahrirlash
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=menu">Menyu</a></li>
                        <?php if(!empty($_GET['p']) && $_GET['p'] == 'menu-add'): ?>
                            <li class="breadcrumb-item active">Menyu qo'shish</li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">Menyuni tahrirlash</li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post">

                <?php if(!empty($menuData)): ?>
                    <input type="hidden" name="id" value="<?=$menuData['id']?>">
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <?php if(!empty($errorMessage)): ?>
                            <div class="alert alert-danger">
                                <?=$errorMessage?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="input_item mb-3">
                                    <label for="title">Sarlavha</label>
                                    <input type="text" name="title" class="form-control" value="<?=(!empty($menuData['title'])) ? $menuData['title'] : ''?>">
                                </div>
                                <div class="input_item">
                                    <label for="link">Havola</label>
                                    <input type="text" name="link" class="form-control" value="<?=(!empty($menuData['link'])) ? $menuData['link'] : ''?>">
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
                                    <label for="position">Joylashuvi</label>
                                    <select name="position" id="position" class="form-control">
                                        <option>Joylashuvni tanlang</option>
                                        <?php foreach (MENU_POSITIONS_NAME as $key => $item): ?>
                                            <option value="<?=$key?>" <?=(!empty($menuData['status']) && $menuData['position'] == $key) ? 'selected' : ''?>><?=$item?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input_item mb-3">
                                    <label for="parent">Menyu tarkibi</label>
                                    <select name="parent" id="parent" class="form-control" <?=(empty($menuData)) ? 'disabled' : ''?>>
                                        <option value="0">O'zi asosiy</option>
                                        <?php if(!empty($menuData) && !empty($positionParent)): ?>
                                            <?php foreach ($positionParent as $value):?>
                                                <option value="<?=$value['id']?>"<?=($value['id'] == $menuData['parent']) ? 'selected' : ''?>><?=$value['title']?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="input_item mb-3">
                                    <label for="order_by">Ketma-ketligi</label>
                                    <input type="text" name="order_by" class="form-control" value="<?=(!empty($menuData['order_by'])) ? $menuData['order_by'] : ''?>">
                                </div>
                                <div class="input_item form-check align-items-center">
                                    <input type="checkbox" name="status" id="status" class="form-check-input" <?=(!empty($menuData['status']) && $menuData['status'] == 1) ? 'checked': ''?>>
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


