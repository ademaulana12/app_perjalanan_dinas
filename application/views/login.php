<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App perjalanan dinas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page bg-dark mb-0">
    <?= $this->session->flashdata('message') ?>
    <div class="login-box rounded">
        <div class="login-logo">
            <img src="<?= base_url('dist/img/logo.png') ?>" alt="">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body rounded shadow">
                <p class="login-box-msg text-bold" style="font-size: 20px;">Aplikasi Perjalanan Dinas</p>
                <form action="<?= base_url('login/login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukan nik anda" name="nik">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Massukan password anda" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <div class="col-md-4 offset-md-4">
                            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modalRegister">Register</button>

                        </div>
                    </div>

                </form>

                <p class="mb-1 mt-3">
                    <a href="#" class="text-bold text-secondary">Lupa Password ?</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="modalRegistered" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <div class="modal-title text-white">
                        <h4>Register Form</h4>
                    </div>
                </div>
                <form action="<?= base_url('registered/insert_register') ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail" class="text-dark">NIK<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nik" id="" placeholder="Masukan nik anda" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail" class="text-dark">Nama<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama" id="" placeholder="Masukan nama anda" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail" class="text-dark">Password<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password" id="" placeholder="Masukan password anda" require>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-md">Registered</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Berikan pesan error -->
    <script type="text/javascript">
        <?= $this->session->flashdata('error') ?>
    </script>
    <!-- Akhir baris pesan error -->

    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
</body>

</html>