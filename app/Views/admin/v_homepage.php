<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>



    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="<?php echo base_url('assets/adminlte') ?>/chart/Chart.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte') ?>/dist/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte') ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
</head>

<body>
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Logout Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('auth/logout') ?>" class="dropdown-item dropdown-footer">Logout</a>
                    </div>
                </li>
                <!-- Fullscreen -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://www.smktexar.com/" class="brand-link">
                <img src="<?php echo base_url('assets/adminlte') ?>/dist/img/logoTexar.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light">Texas Voice</span>
                <img src="<?php echo base_url('assets/adminlte') ?>/dist/img/LOGO SMKASSALAM.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <a href="https://www.instagram.com/tixar_studio/">
                            <img src="<?php echo base_url('assets/adminlte') ?>/dist/img/logoTixarnobg.png" class="brand-image" alt="User Image" style="width: 100px;">
                        </a>
                    </div>

                </div>
                <div class="user-panel mt-3 mb-4 d-flex">
                    <div class="info">
                        <p class="text-white">Welcome: <?= session()->get('nama') ?></p>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-header">Dashboard</li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Data Master</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Data Master
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/kandidat') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Kandidat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/pengguna') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Pengguna</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Outlet</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-header">Transaksi</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Transaksi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/pelanggan') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Registrasi Pelanggan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/transaksi') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Entri Transaksi</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <li class="nav-header">Upload Data Siswa</li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/uploadfile') ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Upload File
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Laporan</li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/hasilvote') ?>" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    Hasil Vote
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <?php
        if (isset($page)) {
            echo $page;
        }
        ?>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.1.0
            </div>
            <strong>Copyright © 2023 Rachardian Bagaskoro & Tim Ekstrakulikuler TIXAR. </strong> All rights reserved.

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/adminlte') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/adminlte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/adminlte') ?>/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url('assets/adminlte') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('document').ready(function() {
                <?php if (session()->getFlashdata('title')) { ?>
                    Toast.fire({
                        icon: 'success',
                        title: '<?= session()->getFlashdata('title') ?>',
                        text: '<?= session()->getFlashdata('text') ?>',
                    });
                <?php } ?>
            });
        });
    </script>

    <!-- bs-custom-file-input -->
    <script src="<?php echo base_url('assets/adminlte') ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <!-- InputMask -->
    <script src="<?php echo base_url('assets/adminlte') ?>/plugins/moment/moment.min.js"></script>
    <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap 4 -->
    <!-- <script src=plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- ChartJS -->
    <script src="<?php echo base_url('assets/adminlte') ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="/dist/js/adminlte.min.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/adminlte') ?>/dist/js/demo.js"></script>



    <script src="<?php echo base_url() ?>/assets/chart/Chart.js"></script>
    <!-- Tempusdominus Bootstrap 4 
        -->
    <script src="<?php echo base_url('assets/adminlte') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- <script>
        $(function() {
            $('#tglTransaksi').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });
            $('#batasWaktu').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });
            $('#tglBayar').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });
        })
    </script> -->
    <script>
        $(document).ready(function() {
            $('.btn-edit-pengguna').on('click', function() {

                //get edit
                const nis = $(this).data('nis');
                const nama = $(this).data('nama');
                const tingkat = $(this).data('tingkat');
                const kelas = $(this).data('kelas');
                const username = $(this).data('username');
                const password = $(this).data('password');
                const status = $(this).data('status');
                const max_time = $(this).data('max_time');
                const role = $(this).data('role');


                // set data to Form Edit
                $('.nis').val(nis);
                $('.nama').val(nama);
                $('.tingkat').val(tingkat);
                $('.kelas').val(kelas);
                $('.username').val(username);
                $('.password').val(password);
                $('.status').val(status);
                $('.max_time').val(max_time);
                $('.role').val(role);

                // call modal edit
                $('#updateData').modal('show')
            })
            $('.btn-delete-pengguna').on('click', function() {
                const nis = $(this).data('nis');

                $('.nis').val(nis);

                $('#deleteData').modal('show');
            })

            // kandidat
            $('.btn-delete-kandidat').on('click', function() {
                //
                const id = $(this).data('id');
                const foto = $(this).data('foto');

                $('.id_kandidat').val(id);
                $('.foto').val(foto);


                $('#deleteData').modal('show');
            })

            $('.btn-edit-kandidat').on('click', function() {

                //get edit
                const id = $(this).data('id');
                const nis = $(this).data('nis');
                const nama = $(this).data('nama');
                const visi = $(this).data('visi');
                const misi = $(this).data('misi');
                const foto = $(this).data('foto');


                // set data to Form Edit
                $('.id_kandidat').val(id);
                $('.nis').val(nis);
                $('.nama_kandidat').val(nama);
                $('.visi').val(visi);
                $('.misi').val(misi);
                $('.foto').val(foto);

                // call modal edit
                $('#updateData').modal('show')
            })
        })
    </script>

    <?php
    // $nama_kandidat = "";
    // $value = null;
    // foreach ($hasil as $item) {
    //     $kandidat = $item->nama;
    //     $nama_kandidat .= "'$kandidat'" . ", ";
    //     $jum = $item->total_value;
    //     $value .= "$jum" . ", ";
    // }
    ?>

</body>

</html>