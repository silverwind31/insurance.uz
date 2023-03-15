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
                    <h1 class="m-0">Sozlanmalar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item active">Sozlanmalar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Nomi</th>
                            <th>Ma'lumotlar</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allSettings)): ?>
                            <?php foreach ($allSettings as $key => $settings): ?>
                                <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$settings['name']?></td>
                                    <td><?=$settings['value']?></td>
                                    <td>
                                        <a href="?p=settings-edit&id=<?=$settings['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i>O'zgartirish</a>
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

