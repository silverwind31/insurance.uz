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
                    <h1 class="m-0">Slayder</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item active">Slayder</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="add_slider">
                <a href="?p=slider-add" class="btn btn-secondary mb-4">Yangi slayder qo'shish</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID raqami</th>
                            <th>Video sarlavhasi</th>
                            <th>Video havolasi</th>
                            <th>Ikkilamchi sarlavha</th>
                            <th>Asosiy sarlavha</th>
                            <th>Tugma sarlavhasi</th>
                            <th>Tugma havolasi</th>
                            <th>Rasm</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allSliders)): ?>
                            <?php foreach ($allSliders as $key => $slider): ?>

                            <?php $sliderImage = getImage('slider', $slider, 'image') ?>
                                <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$slider['video_btn']?></td>
                                    <td><?=$slider['video_link']?></td>
                                    <td><?=$slider['subtitle']?></td>
                                    <td><?=$slider['title']?></td>
                                    <td><?=$slider['button_text']?></td>
                                    <td><?=$slider['button_link']?></td>
                                    <td><img src="<?=$sliderImage?>" alt="" height="150px" width="150px"></td>
                                    <td class="d-flex justify-content-center align-items-center" style="gap:20px; border: none;">
                                        <a href="?p=slider-delete&id=<?=$slider['id']?>" class="remove btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="?p=slider-edit&id=<?=$slider['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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


