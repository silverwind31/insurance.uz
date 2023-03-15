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
                    <h1 class="m-0">Loyihalar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item active">Loyihalar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="add">
                <a href="?p=project-add" class="btn btn-secondary mb-4">Yangi loyiha qo'shish</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID raqami</th>
                            <th>Sarlavhasi</th>
                            <th>Ikkilamchi sarlavha</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allProjectsData)): ?>
                            <?php foreach ($allProjectsData as $key => $project): ?>

                                <?php $projectImage = getImage('project', $project, 'image') ?>
                                <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$project['title']?></td>
                                    <td><?=$project['subtitle']?></td>
                                    <td><img src="<?=$projectImage?>" alt="" height="150px" width="150px"></td>
                                    <td class="d-flex justify-content-center align-items-center" style="gap:20px; border: none;">
                                        <a href="?p=project-delete&id=<?=$project['id']?>" class="remove btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="?p=project-edit&id=<?=$project['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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


