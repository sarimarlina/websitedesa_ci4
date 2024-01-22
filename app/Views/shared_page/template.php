<?php
$session = \Config\Services::session();
?>
<?= $this->include('shared_page/header'); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-orange navbar-light">
            <!-- Left navbar links -->
            <?= $this->include('shared_page/left_navbar'); ?>
            <!-- Right navbar links -->
            <?= $this->include('shared_page/right_navbar'); ?>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('shared_page/sidebar_menu'); ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="m-0 text-dark"><?= $nama_menu; ?></h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"><?= $session->nama_level ?></a></li>
                                <li class="breadcrumb-item active"><?= $nama_menu; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="ml-2 mb-3"></h5>
                                <h3 class="card-title"> Hallo <b><?= $session->nama; ?></b>, Selamat datang di program <b>Kelola </b> Gaji Karyawan </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>

                            <!-- Halaman dinamins disini -->
                            <?= $this->renderSection('content'); ?>
                            <!-- End halaman dinamis -->

                            <div class="card-footer">
                                <b>Ilmu adalah jendela pengetahuan</b>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?= $this->include('shared_page/footer') ?>
    </div>
    <!-- Bundle javascript -->
    <?= $this->include('shared_page/js') ?>
    <?= $this->include('shared_page/myscript') ?>

</body>

</html>