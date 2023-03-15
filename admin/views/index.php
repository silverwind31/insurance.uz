<!--HEADER-->
<?php require_once "sections/header.php";?>

<!--NAVBAR-->
<?php require_once "sections/navbar.php";?>

<!--SIDEBAR-->
<?php require_once "sections/sidebar.php";?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Boshqaruv paneli</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Asosiy sahifa</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?=getTableCounts('menu')?></h3>

                                <p>Menyu</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <a href="?p=menu" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?=getTableCounts('socialLinks')?><sup style="font-size: 20px"></sup></h3>

                                <p>Ijtimoiy tarmoqlar</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-share-square"></i>
                            </div>
                            <a href="?p=social" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?=getTableCounts('slider')?></h3>

                                <p>Slayder</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-sliders-h"></i>
                            </div>
                            <a href="?p=slider" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?=getTableCounts('news')?></h3>

                                <p>Yangiliklar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="?p=slider" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?=getTableCounts('services')?></h3>

                                <p>Xizmatlar</p>
                            </div>
                            <div class="icon">
                                <i class="fab fa-servicestack"></i>
                            </div>
                            <a href="?p=services" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-success">
                            <div class="inner">
                                <h3><?=getTableCounts('order_form')?><sup style="font-size: 20px"></sup></h3>

                                <p>Buyurtmalar</p>
                            </div>
                            <div class="icon">
                                <i class="fab fa-first-order"></i>
                            </div>
                            <a href="?p=order-form" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-cyan">
                            <div class="inner">
                                <h3><?=getTableCounts('settings')?><sup style="font-size: 20px"></sup></h3>

                                <p>Sozlanmalar</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <a href="?p=settings" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3><?=getTableCounts('team')?><sup style="font-size: 20px"></sup></h3>

                                <p>Jamoa a'zolari</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <a href="?p=team" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?=getTableCounts('project')?><sup style="font-size: 20px"></sup></h3>

                                <p>Loyihalar</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <a href="?p=projects" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3><?=getTableCounts('brands')?><sup style="font-size: 20px"></sup></h3>

                                <p>Hamkorlar</p>
                            </div>
                            <div class="icon">
                                <i class="fab fa-bandcamp"></i>
                            </div>
                            <a href="?p=brands" class="small-box-footer d-flex justify-content-center align-items-center" style="gap: 15px">Batafsil<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<!--FOOTER-->
<?php require_once "sections/footer.php";?>
