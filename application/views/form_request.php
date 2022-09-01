<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Request</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Request Perjalanan</a></li>
                        <li class="breadcrumb-item active">Form Request </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?= base_url('request/insert_request') ?>" method="post">

                        <div class="form-group">
                            <label for="nomorPerjalanan">Nomor Perjalanan</label>
                            <input type="text" class="form-control" id="nomorPerjalanan" name="nomor_perjalanan" value="<?= $nomor_perjalanan ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="nik" class="form-control" id="nik" name="nik" value="<?= $nik ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="tanggalPerjalanan">Tanggal Perjalanan</label>
                            <input type="date" class="form-control" id="tanggalPerjalanan" name="tanggal_perjalanan">
                        </div>

                        <div class="form-group">
                            <label for="tempatTujuan">Tempat Tujuan</label>
                            <input type="text" class="form-control" id="tempatTujuan" name="tempat_tujuan">
                        </div>

                        <div class="form-group">
                            <label for="tanggalPulang">Tanggal Pulang</label>
                            <input type="date" class="form-control" id="tanggalPulang" name="tanggal_pulang">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->