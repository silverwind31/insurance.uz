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
                    <h1 class="m-0">Yangiliklar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy menyu</a></li>
                        <li class="breadcrumb-item active">Yangiliklar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="add">
                <a href="?p=news-add" class="btn btn-secondary mb-4">Yangilik qo'shish</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID raqami</th>
                            <th>Kategoriya ID</th>
                            <th>Sarlavha</th>
                            <th>Anons</th>
                            <th>Yaratilgan vaqti</th>
                            <th>Rasm</th>
                            <th>Seen count</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allNews)): ?>
                            <?php foreach ($allNews as $key => $news): ?>

                                <?php $newsImage = getImage('news', $news, 'image') ?>
                                <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$news['category_id']?></td>
                                    <td><?=$news['title']?></td>
                                    <td><?=$news['anons']?></td>
                                    <td><?=$news['created_date']?></td>
                                    <td><img src="<?=$newsImage?>" alt="" height="150px" width="150px"></td>
                                    <td><?=$news['seen_count']?></td>
                                    <td class="d-flex justify-content-center align-items-center" style="gap:20px; border: none;">
                                        <a href="?p=news-delete&id=<?=$news['id']?>" class="remove btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="?p=news-edit&id=<?=$news['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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



