<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Status Request</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Status Request</a></li>
                        <li class="breadcrumb-item active">Data Status </li>
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
                    <table class="table table-striped table-responsive-sm" id="tableData">
                        <thead class="thead-dark">
                            <th>Nomor Perjalanan</th>
                            <th>Tanggal Perjalanan</th>
                            <th>Tujuan</th>
                            <th>Tanggal Pulang</th>
                            <th>Status Request</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($get_status as $gs) { ?>
                                <tr>
                                    <td><?= $gs['nik'] ?></td>
                                    <td><?= $gs['tanggal_perjalanan'] ?></td>
                                    <td><?= $gs['tempat_tujuan'] ?></td>
                                    <td><?= $gs['tanggal_pulang'] ?></td>
                                    <?php
                                    if ($gs['status'] == 'pending') { ?>
                                        <td class="text-danger"><?= $gs['status'] ?></td>
                                    <?php } else if ($gs['status'] == 'accept') { ?>
                                        <td class="text-primary"><?= $gs['status'] ?></td>
                                    <?php }
                                    ?>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->