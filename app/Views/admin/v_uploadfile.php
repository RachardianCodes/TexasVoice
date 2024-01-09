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
        <form class="form-horizontal" action="<?php echo base_url('admin/uploadfile/upload') ?>" method="post" enctype="multipart/form-data">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $cardtitle; ?></h3>
                    <div class="form-group">
                        <br>
                        <br>
                        <?= csrf_field(); ?>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="xlsx_file" type="file" class="custom-file-input" id="exampleInputFile" accept=".xlsx" required>
                                <label class="custom-file-label" for="exampleInputFile">Choose file (Format Harus .xlsx)</label>
                            </div>
                            <!-- <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div> -->
                        </div>
                    </div>
                    <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                    <!-- /.card-body -->
                    <!-- <div class="card-footer">
                    Total Data
                </div> -->
                    <!-- /.card-footer-->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
                <!-- /.card -->
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>