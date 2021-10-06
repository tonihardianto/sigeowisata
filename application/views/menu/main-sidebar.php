<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo base_url() . 'asset/images/img/logo.png' ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SiGeo Wisata</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() . 'asset/images/img/avatar5.png" class="img-circle elevation-2" alt="User Image' ?>">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url() . 'Admin/dashboard'; ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-server"></i>
                        <p>
                            Wisata
                            <i class="fas fa-plus right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Admin/wisata'; ?>" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Data Wisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Admin/kategori'; ?>" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Kategori Wisata</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-route"></i>
                        <p>
                        Lokasi
                        <i class="fas fa-plus right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-angle-right nav-icon"></i>
                            <p>Data Kabupaten</p>
                        </a>
                        </li>
                    </ul>
                    </li> -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pengguna
                            <i class="fas fa-plus right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Admin/user'; ?>" class="nav-link">
                                <i class="nav-icon fas fa-angle-right"></i>
                                <p> Data Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Admin/member'; ?>" class="nav-link">
                                <i class="nav-icon fas fa-angle-right"></i>
                                <p> Data Member</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?php echo base_url() . 'Admin/Tamu'; ?>" class="nav-link">
                                <i class="nav-icon fas fa-angle-right"></i>
                                <p> Data Tamu</p>
                            </a>
                            </li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() . 'Admin/penginapan'; ?>" class="nav-link">
                        <i class="nav-icon fas fa-hotel"></i>
                        <p>
                            Penginapan
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() . 'Admin/Event'; ?>" class="nav-link">
                        <i class="nav-icon fas fa-calendar-week"></i>
                        <p>
                            Event
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>