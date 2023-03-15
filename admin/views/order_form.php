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
                    <h1 class="m-0">Buyurtmalar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy sahifa</a></li>
                        <li class="breadcrumb-item active">Buyurtmalar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Murojaatchining I.Sh.F.</th>
                            <th>Sug'urta shakli</th>
                            <th>Sanasi</th>
                            <th>Status</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($allOrders)): ?>
                            <?php foreach ($allOrders as $key => $order): ?>
                                <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$order['name']?></td>
                                    <td><?=$order['insurance_type']?></td>
                                    <td>
                                        <?php if($order['status'] == 1):?>
                                            <span class="btn btn-warning">Yangi</span>

                                            <?php elseif($order['status'] == 2): ?>
                                            <span class="btn btn-primary">Ko'rildi</span>

                                            <?php elseif($order['status'] == 3): ?>
                                            <span class="btn btn-danger">Rad qilindi</span>

                                            <?php elseif($order['status'] == 4): ?>
                                            <span class="btn btn-success">Bajarildi</span>

                                        <?php endif; ?>
                                    </td>
                                    <td><?=$order['date']?></td>
                                    <td>
                                        <a href="?p=order-view&id=<?=$order['id']?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="?p=order-sold&id=<?=$order['id']?>" class="btn btn-success"><i class="fa fa-check"></i></a>
                                        <a href="?p=order-reject&id=<?=$order['id']?>" class="btn btn-danger"><i class="far fa-window-close"></i></a>
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


