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
                    <h1 class="m-0">Jamoa a'zolari</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy menyu</a></li>
                        <li class="breadcrumb-item active">Jamoa a'zolari</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="add">
                <a href="?p=team-add" class="btn btn-secondary mb-4">Yangi a'zo qo'shish</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID raqami</th>
                            <th>I.Sh.F.</th>
                            <th>Facebook havola</th>
                            <th>Twitter havola</th>
                            <th>Instagram havola</th>
                            <th>Kasbi</th>
                            <th>Rasmi</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allTeamData)): ?>
                            <?php foreach ($allTeamData as $key => $teamData): ?>

                                <?php $teamImage = getImage('team', $teamData, 'image') ?>
                                <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$teamData['name']?></td>
                                    <td><?=$teamData['facebook_link']?></td>
                                    <td><?=$teamData['twitter_link']?></td>
                                    <td><?=$teamData['instagram_link']?></td>
                                    <td><?=$teamData['job']?></td>
                                    <td><img src="<?=$teamImage?>" alt="" height="150px" width="150px"></td>
                                    <td class="d-flex justify-content-center align-items-center" style="gap:20px; border: none;">
                                        <a href="?p=team-delete&id=<?=$teamData['id']?>" class="remove btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="?p=team-edit&id=<?=$teamData['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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



