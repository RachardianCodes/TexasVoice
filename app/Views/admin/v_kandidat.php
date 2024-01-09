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
                            <th>Nama Kandidat</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>foto</th>
                            <th class="bg-secondary">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($kandidat as $item) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $item->nis; ?></td>
                                <td><?= $item->nama; ?></td>
                                <td><?= $item->visi; ?></td>
                                <td><?= $item->misi; ?></td>
                                <td style="text-align: center;">
                                    <img src="/img/<?= $item->foto; ?>" width="85">
                                    <!-- <img src=" //base_url('img/' . $item['foto']); " width="100"> -->
                                </td>
                                <td class="text-center">
                                    <button class="btn-warning btn-edit-kandidat" data-id="<?= $item->id_kandidat; ?>" data-nis="<?= $item->nis; ?>" data-nama="<?= $item->nama; ?>" data-visi="<?= $item->visi; ?>" data-misi="<?= $item->misi; ?>" data-foto="<?= $item->foto; ?>">
                                        <i class="nav-icon fas fa-pen" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn-danger btn-delete-kandidat" data-id="<?= $item->id_kandidat; ?>" data-foto="<?= $item->foto; ?>">
                                        <i class="nav-icon fas fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php $i++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <?= $kandidatcount; ?> Total Data
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        <!-- Modal Create Data -->
        <form class="form-horizontal" action="<?php echo base_url('admin/kandidat/save') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
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
                                        <input type="text" class="form-control" id="nis" placeholder="NIS" name="nis" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="namaKandidat" class="col-sm-4 col-form-label">Nama Kandidat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Kandidat" name="nama_kandidat" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="visi" class="col-sm-4 col-form-label">Visi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="visi" placeholder="Visi" name="visi" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="misi" class="col-sm-4 col-form-label">Misi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="misi" placeholder="Misi" name="misi" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="upload_file" class="col-sm-4 col-form-label">Foto</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-file-input" id="upload_file" name="upload_file" required>
                                        <br>
                                        <label for="upload_file" class="text text-danger">(Format harus .jpg .png .jpeg)</label>
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
        <form class="form-horizontal" action="<?php echo base_url('admin/kandidat/update') ?>" method="post" enctype="multipart/form-data">
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
                                        <input type="hidden" class="form-control id_kandidat" id="id_kandidat" name="id_kandidat" required>
                                        <input type="text" class="form-control nis" id="nis" placeholder="NIS" name="nis" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="namaKandidat" class="col-sm-4 col-form-label">Nama Kandidat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control nama_kandidat" id="namaKandidat" placeholder="Nama Kandidat" name="nama_kandidat" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="visi" class="col-sm-4 col-form-label">Visi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control visi" id="visi" placeholder="Visi" name="visi" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="misi" class="col-sm-4 col-form-label">Misi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control misi" id="misi" placeholder="Misi" name="misi" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="hidden" class="form-control foto" id="foto" name="foto" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="upload_file_update" class="col-sm-4 col-form-label">Foto</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-file-input" id="upload_file_update" name="upload_file_update">
                                        <br>
                                        <label for="upload_file_update" class="text text-danger">(Format harus .jpg .png .jpeg)</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <input type="hidden" name="id_kandidat" class="id_kandidat">
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
        <form class="form-horizontal" action="<?php echo base_url('admin/kandidat/delete') ?>" method="post">
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
                            <input type="hidden" name="id_kandidat" class="id_kandidat">
                            <input type="hidden" name="foto" class="foto">
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