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
                    <h1 class="m-0">Buyurtmalar haqida ma'lumot</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item"><a href="?p=order-form">Buyurtmalar</a></li>
                        <li class="breadcrumb-item active"><?=$orderItem['name']?></li>
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
                        <tbody>
                        <tr>
                            <th>Ismi</th>
                            <th><?=$orderItem['name']?></th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th><?=$orderItem['email']?></th>
                        </tr>
                        <tr>
                            <th>Sa'nasi</th>
                            <th><?=$orderItem['date']?></th>
                        </tr>
                        <tr>
                            <th>Amallar</th>
                            <th>
                                <a href="?p=order-sold&id=<?=$orderItem['id']?>" class="btn btn-success"><i class="fa fa-check"></i></a>
                                <a href="?p=order-reject&id=<?=$orderItem['id']?>" class="btn btn-danger"><i class="far fa-window-close"></i></a>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>

<!--FOOTER-->
<?php require_once "sections/footer.php";?>


