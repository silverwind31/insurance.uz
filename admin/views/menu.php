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
                    <h1 class="m-0">Menyu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item active">Menyu</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="add_menu">
                <a href="?p=menu-add" class="btn btn-secondary mb-4">Yangi menyu qo'shish</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Position</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($menus)): ?>
                            <?php foreach ($menus as $key => $menu): ?>
                        <tr>
                            <td><?=++$key?></td>
                            <td><?=$menu['title']?></td>
                            <td><?=$menu['link']?></td>
                            <td><?=MENU_POSITIONS_NAME[$menu['position']]?></td>
                            <td>
                                <a href="?p=menu-delete&id=<?=$menu['id']?>" class="remove btn btn-danger"><i class="fa fa-trash"></i>O'chirish</a>
                                <a href="?p=menu-edit&id=<?=$menu['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i>O'zgartirish</a>
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

