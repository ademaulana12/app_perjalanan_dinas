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
                            foreach ($get_request_data as $gpd) { ?>
                                <tr>
                                    <td><?= $gpd['nik'] ?></td>
                                    <td><?= $gpd['tanggal_perjalanan'] ?></td>
                                    <td><?= $gpd['tempat_tujuan'] ?></td>
                                    <td><?= $gpd['tanggal_pulang'] ?></td>
                                    <td>
                                        <?php
                                        if ($gpd['status'] == 'pending') { ?>
                                            <button type="button" data-toggle="modal" data-target="#modalUpdate<?= $gpd['nik'] ?>" class="btn btn-warning btn-sm btn-block"><?= $gpd['status'] ?></button>
                                        <?php } else if ($gpd['status'] == 'denied') { ?>
                                            <button type="button" class="btn btn-danger btn-sm btn-block"><?= $gpd['status'] ?></button>
                                        <?php } else if ($gpd['status'] == 'accept') { ?>
                                            <button type="button" class="btn btn-success btn-sm btn-block"><?= $gpd['status'] ?></button>
                                        <?php }
                                        ?>
                                    </td>
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

<?php
foreach ($get_request_data as $gpdm) { ?>
    <div class="modal fade" id="modalUpdate<?= $gpdm['nik'] ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <div class="modal-title">
                        <h4>Update Request</h4>
                        <span><?= $gpdm['nama'] ?></span>
                    </div>
                </div>
                <form action="<?= base_url('dashboard/update_request/' . $gpdm['nik']) ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Update Status Request</label>
                            <select name="status" id="" class="form-control">
                                <option>Pending</option>
                                <option value="denied">Denied</option>
                                <option value="accept">Accept</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-md">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }
?>


<?= $this->session->flashdata('message') ?>