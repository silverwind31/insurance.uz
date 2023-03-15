<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="<?=ADMIN_ASSETS?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=ADMIN_ASSETS?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">User</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Jadvallar</li>
                <li class="nav-item">
                    <a href="?p=menu" class="nav-link">
                        <i class="nav-icon fas fa-share-alt"></i>
                        <p>
                            Menyu
                            <span class="badge badge-info right"><?=getTableCounts('menu')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=social" class="nav-link">
                        <i class="nav-icon fas fa-share-square"></i>
                        <p>
                            Ijtimoiy tarmoqlar
                            <span class="badge badge-info right"><?=getTableCounts('socialLinks')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=slider" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Slayder
                            <span class="badge badge-info right"><?=getTableCounts('slider')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=testimonial" class="nav-link">
                        <i class="nav-icon far fa-comment-alt"></i>
                        <p>
                            Izohlar
                            <span class="badge badge-info right"><?=getTableCounts('testimonial')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=order-form" class="nav-link">
                        <i class="nav-icon fab fa-first-order"></i>
                        <p>
                            Buyurtmalar
                            <span class="badge badge-info right"><?=getTableCounts('order_form')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=settings" class="nav-link">
                        <i class="fas fa-cog nav-icon"></i>
                        <p>
                            Sozlanmalar
                            <span class="badge badge-info right"><?=getTableCounts('settings')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=team" class="nav-link">
                        <i class="fas fa-users-cog nav-icon"></i>
                        <p>
                            Jamoa a'zolari
                            <span class="badge badge-info right"><?=getTableCounts('team')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=projects" class="nav-link">
                        <i class="fas fa-project-diagram nav-icon"></i>
                        <p>
                            Loyihalar
                            <span class="badge badge-info right"><?=getTableCounts('project')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=brands" class="nav-link">
                        <i class="fab fa-bandcamp nav-icon"></i>
                        <p>
                            Hamkorlar
                            <span class="badge badge-info right"><?=getTableCounts('brands')?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=news" class="nav-link">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>
                            Yangiliklar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?p=news" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Yangiliklar
                                    <span class="badge badge-info right"><?=getTableCounts('news')?></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?p=news-category" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Yangilik kategoriyasi
                                    <span class="badge badge-info right"><?=getTableCounts('news_category')?></span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="?p=services" class="nav-link">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>
                            Xizmatlar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?p=services" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Xizmatlar
                                    <span class="badge badge-info right"><?=getTableCounts('services')?></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?p=services-category" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Xizmatlar kategoriyasi
                                    <span class="badge badge-info right"><?=getTableCounts('services_category')?></span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

