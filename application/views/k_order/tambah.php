<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('konsumen/index') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-business-time"></i>
        </div>
        <div class="sidebar-brand-text mx-3">P P M </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Konsumen
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('konsumen/index') ?>">

            <i class="fas fa-cash-register"></i>
            <span>Kelola Data Order</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('k_estimasi/index') ?>">
            <i class="fas fa-donate"></i>
            <span>Kelola Estimasi</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('k_pembayaran/index') ?>">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Kelola Pembayaran</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">




    <!-- Heading -->
    <div class="sidebar-heading">
        Logout
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <div class="container">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <?php endif; ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> Kelola Data Order</h1>

                <!-- Data Tabel Order -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('konsumen'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="card-header text-center">
                            <h3>Form Tambah Data Order</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="no_order">Nomor Order : </label>
                                    <input type="text" name="no_order" class="form-control" id="no_order">
                                    <small class="form-text text-danger"><?= form_error('no_order'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_order">Tanggal Order : </label>
                                    <input type="date" name="tgl_order" class="form-control" id="tgl_order">
                                    <small class="form-text text-danger"><?= form_error('tgl_order'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat : </label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="nama_konsumen">Nama Konsumen : </label>
                                    <input type="text" name="nama_konsumen" class="form-control" id="nama_konsumen">
                                    <small class="form-text text-danger"><?= form_error('nama_konsumen'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="nama_project">Nama Project : </label>
                                    <input type="text" name="nama_project" class="form-control" id="nama_project">
                                    <small class="form-text text-danger"><?= form_error('nama_project'); ?></small>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Perencanaan Modal <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>
</div>