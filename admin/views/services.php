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
                    <h1 class="m-0">Xizmatlar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy menyu</a></li>
                        <li class="breadcrumb-item active">Xizmatlar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="add">
                <a href="?p=service-add" class="btn btn-secondary mb-4">Yangi xizmat qo'shish</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID raqami</th>
                            <th>Kategoriya ID</th>
                            <th>Class</th>
                            <th>Sarlavha</th>
                            <th>Matn</th>
                            <th>status</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allServices)): ?>
                            <?php foreach ($allServices as $key => $service): ?>

                                <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$service['category_id']?></td>
                                    <td><?=$service['class']?></td>
                                    <td><?=$service['service_title']?></td>
                                    <td><?=$service['service_description']?></td>
                                    <td><?=$service['status']?></td>
                                    <td class="d-flex justify-content-center align-items-center" style="gap:20px; border: none;">
                                        <a href="?p=service-delete&id=<?=$service['id']?>" class="remove btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="?p=service-edit&id=<?=$service['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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



