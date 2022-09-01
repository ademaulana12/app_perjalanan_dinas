    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="<?= base_url('dist/img/logo.png') ?>" alt="logo" class="brand-image img-circle mt-0">
            <span class="brand-text text-bold">Perjalanan Dinas</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url('dist/img/avatar2.png') ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info text-white text-bold"><?= $nama ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                    <?php
                    if ($hak_akses == '1') { ?>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/dashboard_admin'); ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') {
                                                                                                        echo 'active';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    }  ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/request_perjalanan'); ?>" class="nav-link <?php if ($this->uri->segment(1) == 'request') {
                                                                                                            echo 'active';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }  ?>">
                                <i class="nav-icon fas fa-pen-alt"></i>
                                <p>Request Perjalanan</p>
                            </a>
                        </li>
                    <?php } else if ($hak_akses == '9') { ?>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard'); ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') {
                                                                                        echo 'active';
                                                                                    } else {
                                                                                        echo '';
                                                                                    }  ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('request'); ?>" class="nav-link <?php if ($this->uri->segment(1) == 'request') {
                                                                                        echo 'active';
                                                                                    } else {
                                                                                        echo '';
                                                                                    }  ?>">
                                <i class="nav-icon fas fa-pen-alt"></i>
                                <p>Request Perjalanan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('status_request'); ?>" class="nav-link <?php if ($this->uri->segment(1) == 'status_request') {
                                                                                                echo 'active';
                                                                                            } else {
                                                                                                echo '';
                                                                                            }  ?>">
                                <i class="nav-icon fas fa-exclamation"></i>
                                <p>Status Request</p>
                            </a>
                        </li>
                    <?php }
                    ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>