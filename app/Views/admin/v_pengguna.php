<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $header; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Homepage</a></li>
                        <li class="breadcrumb-item active"><?= $header; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $cardtitle; ?></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>

                <div class="mt-4">
                    <button type="button" class="btn-info btn-sm" data-toggle="modal" data-target="#inputData">
                        <i class="fa fa-plus" aria-hidden="true"></i> Create New One
                    </button>
                </div>
            </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-bordered table-head-fixed text-nowrap">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Pengguna</th>
                            <th>Tingkat</th>
                            <th>Kelas</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Max Time</th>
                            <th>Role</th>
                            <th class="bg-secondary">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($pengguna as $item) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $item->nis; ?></td>
                                <td><?= $item->nama; ?></td>
                                <td><?= $item->tingkat; ?></td>
                                <td><?= $item->kelas; ?></td>
                                <td><?= $item->username; ?></td>
                                <td><?= $item->password; ?></td>
                                <td><?= $item->status; ?></td>
                                <td><?= $item->max_time; ?></td>
                                <td><?= $item->role; ?></td>
                                <td class="text-center">
                                    <button class="btn-warning btn-edit-pengguna" data-nis="<?= $item->nis; ?>" data-nama="<?= $item->nama; ?>" data-tingkat="<?= $item->tingkat; ?>" data-kelas="<?= $item->kelas; ?>" data-username="<?= $item->username; ?>" data-password="<?= $item->password; ?>" data-status="<?= $item->status; ?>" data-max_time="<?= $item->max_time; ?>" data-role="<?= $item->role; ?>">
                                        <i class="nav-icon fas fa-pen" aria-hidden="true"></i>
                                    </button>

                                    <button class="btn-danger btn-delete-pengguna" data-nis="<?= $item->nis; ?>">
                                        <i class="nav-icon fas fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <?= $penggunacount; ?> Total Data
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        <!-- Modal Create Data -->
        <form class="form-horizontal" action="<?php echo base_url('admin/pengguna/save') ?>" method="post">
            <div class="modal fade" id="inputData">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><?= $inputtitle; ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Card Body Input -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nis" placeholder="nis" name="nis" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-4 col-form-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="passWord" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="passWord" placeholder="Password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-sm-4 col-form-label">Max Time</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="time" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <input type="time" class="form-control" id="time" name="time" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tingkat" class="col-sm-4 col-form-label">Tingkat</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="tingkat" name="tingkat" required>
                                            <option value="">- Pilih Tingkat -</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                            <!-- <option value="Owner">Owner</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="kelas" name="kelas" required>
                                            <option value="">- Pilih Kelas -</option>
                                            <option value="RPL 1">RPL 1</option>
                                            <option value="RPL 2">RPL 2</option>
                                            <option value="RPL 3">RPL 3</option>
                                            <option value="RPL 4">RPL 4</option>
                                            <option value="RPL ASSALAM">RPL ASSALAM</option>
                                            <option value="TKRO 1">TKRO 1</option>
                                            <option value="TKRO 2">TKRO 2</option>
                                            <option value="TKRO 3">TKRO 3</option>
                                            <option value="TKRO 4">TKRO 4</option>
                                            <option value="TKRO ASSALAM">TKRO ASSALAM</option>
                                            <option value="TMI 1">TMI 1</option>
                                            <option value="TMI 2">TMI 2</option>
                                            <option value="TMI 3">TMI 3</option>
                                            <option value="TMI 4">TMI 4</option>
                                            <option value="TMI ASSALAM">TMI ASSALAM</option>
                                            <option value="TM 1">TM 1</option>
                                            <option value="TM 2">TM 2</option>
                                            <option value="TM 3">TM 3</option>
                                            <option value="TM 4">TM 4</option>
                                            <option value="TM ASSALAM">TM ASSALAM</option>
                                            <option value="TBO 1">TBO 1</option>
                                            <option value="TBO 2">TBO 2</option>
                                            <option value="TBO 3">TBO 3</option>
                                            <option value="TBO 4">TBO 4</option>
                                            <option value="TATA BOGA ASSALAM">TATA BOGA ASSALAM</option>
                                            <!-- <option value="Owner">Owner</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-4 col-form-label">Role</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="role" name="role" required>
                                            <option value="">- Pilih Role -</option>
                                            <option value="admin">Admin</option>
                                            <option value="voter">Voter</option>
                                            <!-- <option value="Owner">Owner</option> -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </form>
        <!-- /.modal -->

        <!-- Modal Update Data -->
        <form class="form-horizontal" action="<?php echo base_url('admin/pengguna/update') ?>" method="post">
            <div class="modal fade" id="updateData">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><?= $updatetitle; ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Card Body Input -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control nis" id="nis" placeholder="NIS" name="nis" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control nama" id="nama" placeholder="Nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="userName" class="col-sm-4 col-form-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control username" id="userName" placeholder="Username" name="username" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control password" id="password" placeholder="Password" name="password" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tingkat" class="col-sm-4 col-form-label">Tingkat</label>
                                    <div class="col-sm-8">
                                        <select class="form-control tingkat" id="tingkat" name="tingkat" required>
                                            <option value="">- Pilih Tingkat -</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                            <!-- <option value="Owner">Owner</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="max_time" class="col-sm-4 col-form-label">Max Time</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control max_time" id="max_time" placeholder="Max Time" name="max_time" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                                    <div class="col-sm-8">
                                        <select class="form-control kelas" id="kelas" name="kelas" required>
                                            <option value="">- Pilih Kelas -</option>
                                            <option value="RPL 1">RPL 1</option>
                                            <option value="RPL 2">RPL 2</option>
                                            <option value="RPL 3">RPL 3</option>
                                            <option value="RPL 4">RPL 4</option>
                                            <option value="RPL ASSALAM">RPL ASSALAM</option>
                                            <option value="TKRO 1">TKRO 1</option>
                                            <option value="TKRO 2">TKRO 2</option>
                                            <option value="TKRO 3">TKRO 3</option>
                                            <option value="TKRO 4">TKRO 4</option>
                                            <option value="TKRO ASSALAM">TKRO ASSALAM</option>
                                            <option value="TMI 1">TMI 1</option>
                                            <option value="TMI 2">TMI 2</option>
                                            <option value="TMI 3">TMI 3</option>
                                            <option value="TMI 4">TMI 4</option>
                                            <option value="TMI ASSALAM">TMI ASSALAM</option>
                                            <option value="TM 1">TM 1</option>
                                            <option value="TM 2">TM 2</option>
                                            <option value="TM 3">TM 3</option>
                                            <option value="TM 4">TM 4</option>
                                            <option value="TM ASSALAM">TM ASSALAM</option>
                                            <option value="TBO 1">TBO 1</option>
                                            <option value="TBO 2">TBO 2</option>
                                            <option value="TBO 3">TBO 3</option>
                                            <option value="TBO 4">TBO 4</option>
                                            <option value="TATA BOGA ASSALAM">TATA BOGA ASSALAM</option>
                                            <!-- <option value="Owner">Owner</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-4 col-form-label">Role</label>
                                    <div class="col-sm-8">
                                        <select class="form-control role" id="role" name="role" required>
                                            <option value="">- Pilih Role -</option>
                                            <option value="admin">Admin</option>
                                            <option value="voter">voter</option>
                                            <!-- <option value="Owner">Owner</option> -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <input type="hidden" name="id_user" class="id_user">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </form>
        <!-- /.modal -->

        <!-- Modal Delete Data -->
        <form class="form-horizontal" action="<?php echo base_url('admin/pengguna/delete'); ?>" method="post">
            <div class="modal fade" id="deleteData">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><?= $deletetitle; ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Card Body Verification -->
                            <div class="card-body">
                                <h6>Are you sure want to delete this data?</h6>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <input type="hidden" name="nis" class="nis">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </form>
        <!-- /.modal -->

    </section>
    <!-- /.content -->
</div>