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
                    <h1 class="m-0">Hamkorlar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item active">Hamkorlar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="add">
                <a href="?p=brand-add" class="btn btn-secondary mb-4">Yangi hamkor qo'shish</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID raqami</th>
                            <th>Rasm</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allBrands)): ?>
                            <?php foreach ($allBrands as $key => $brand): ?>

                                <?php $brandImage = getImage('brands', $brand, 'image') ?>
                                <tr>
                                    <td><?=++$key?></td>
                                    <td><img src="<?=$brandImage?>" alt="" height="150px" width="150px"></td>
                                    <td class="d-flex justify-content-center align-items-center" style="gap:20px; border: none;">
                                        <a href="?p=brand-delete&id=<?=$brand['id']?>" class="remove btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="?p=brand-edit&id=<?=$brand['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>

<!--FOOTER-->
<?php require_once "sections/footer.php";?>


