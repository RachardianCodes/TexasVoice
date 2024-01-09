<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote | Texas Voice</title>
    <!-- Tambahkan link ke file CSS Bootstrap -->
    <link href="<?php echo base_url('bootstrap-utama') ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan link ke file CSS kustom Anda -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Gaya kustom Anda */
        .body {
            font-family: Arial, sans-serif;
        }

        .menu-item {
            text-align: center;
        }

        .card {
            border: none;
        }

        /* Gaya tambahan untuk navbar yang sticky */
        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 100;
            background-color: #fff;
            /* Warna latar belakang navbar saat sticky */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: #f4f4f4;
        }

        .container4 {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .card-text {
            color: black;
        }

        .card-title {
            color: black;
        }

        .image {
            background-image: url('ayaka.jpeg');
            /* Ganti 'background.jpg' dengan nama file gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            color: #ffffff;
            text-align: center;
            /* background-image: url("jingliu.jpg");
            background-size: 100%;
            background-size: cover;
            color: white;
            top: 30px;
        background-repeat: no-repeat; Do not repeat the image */
        }

        @media (min-width: 768px) {
            .mrg {
                padding: 120px;
            }
        }

        /* Padding untuk mobile (lebar layar < 768px) */
        @media (max-width: 767px) {
            .mrg {
                padding: 20px;
            }
        }

        .bod {
            border: 5px solid white;
        }

        .crop {
            height: 200px;
            object-fit: cover;
        }

        @media (max-width: 576px) {
            .card-text {
                font-size: 8px;
                /* Ukuran teks saat tampilan <576px */
            }

            .card-img-top {
                max-width: 100%;
                /* Ukuran gambar saat tampilan <576px */
                height: auto;
                /* Menjaga aspek ratio gambar */
            }

            .card-button {
                font-size: 8px;
                /* Ukuran tombol saat tampilan <576px */
                padding: 2px 10px;
                margin-top: -5px;
            }
        }

        @media (min-width: 576px) and (max-width: 768px) {
            .card-text {
                font-size: 12px;
                /* Ukuran teks saat tampilan antara 576px dan 768px */
            }

            .card-img-top {
                max-width: 100%;
                /* Ukuran gambar saat tampilan <576px */
                height: 100px;
                /* Menjaga aspek ratio gambar */
            }

            .card-button {
                font-size: 12px;
                /* Ukuran tombol saat tampilan <576px */
                padding: 4px 14px;
            }
        }

        @media (max-width: 576px) {
            .card-title {
                font-size: 12px;
                /* Ukuran teks saat tampilan <576px */
            }

            .card-body {
                padding: 10px;
            }
        }

        @media (min-width: 576px) and (max-width: 768px) {
            .card-title {
                font-size: 14px;
                /* Ukuran teks saat tampilan antara 576px dan 768px */
            }

            .card-body {
                padding: 10px;
            }
        }

        .right-button {
            float: right;
            /* Menempatkan tombol di sebelah kanan */
        }

        .left {
            float: left;
            margin-top: -10px;
        }

        .navmrg {
            margin-left: 10px;
        }

        /* Modal Style */
        /* .modal-dialog {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .modal-content {
            max-width: 100%;
            text-align: center;
        } */

        /* CSS kustom untuk gambar profil */
        .profile-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .mrg0 {
            margin: 5px;
        }

        .con {
            margin: 14px;
        }

        .btn-size {
            width: 100%;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('logoTexar.png') ?>" style="width:50px; object-fit: cover;" alt=""><img src="<?php echo base_url('LOGO SMKASSALAM.png') ?>" style="width:50px; object-fit: cover;" alt=""></a>
            <a class="navbar-brand" href="#">TexasVoice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item navmrg">
                        <a class="nav-link" href="https://www.instagram.com/tixar_studio/">About Us</a>
                    </li>
                    <li class="nav-item navmrg">
                        <a class="nav-link" href="<?php echo base_url('/auth/logout') ?>">Log Out</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li><a href="#"><img src="texar.png" style="width:50px;" alt=""></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->

    <!-- Menu -->
    <section class="menu py-5">
        <div class="container">
            <h2>Pilih Kandidat</h2>
            <div class="row">
                <?php
                foreach ($kandidat as $item) :
                ?>
                    <div class="col-md-4 col-sm-4 col-6">
                        <div class="card mb-4">
                            <img src="/img/<?= $item->foto; ?>" class="card-img-top crop" alt="Kopi 1" width="85">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item->nama; ?></h5>
                                <p class="card-text"><?= $item->nis; ?></p>
                                <a href="<?php echo base_url('voters/vote/' . $item->id_kandidat) ?>" class="btn btn-primary right-button card-button detail">Vote</a>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php
                endforeach;
                ?>

                <!-- Tambahkan lebih banyak item menu jika diperlukan -->
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="about py-5">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Sistem Voting Pemilihan Ketua Osis 2024/2025 secara online atau melalui web adalah suatu platform atau sistem yang memungkinkan siswa atau guru untuk memilih ketua Osis berikutnya secara elektronik melalui internet.</p>
        </div>
    </section>

    <!-- Kontak -->
    <section class="contact bg-light py-5">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p>Silakan hubungi kami untuk pertanyaan atau reservasi.</p>
            <p>Instagram: @tixar_studio</p>
            <p>Telepon: 0857-8004-7821</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-3">
        <div class="col-md-12 text-center">
            Copyright &copy; 2023 Rachardian Bagaskoro & Tim Extrakulikuler Tixar All rights reserved.
        </div>
    </footer>

    <!-- Modal -->
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Memilih Calon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda Yakin Memilih Calon Ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- modal profil -->
    <!-- <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profil Kandidat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body table-responsive">
                    <table class="table table-no-bordered no-margin">
                        <tbody>
                            <tr>
                                <th style="">Nama</th>
                                <td><span id="modal-nama" name="modal-nama" class="modal-nama"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                 <div class="modal-body">
                    <img id="modal-foto" alt="Foto Profil" class="profile-image">
                    <p class="mrg0"><strong>Nama:</strong> <span id="modal-nama"></span></p>
                    <p class="mrg0"><strong>NIS:</strong> <span id="modal-nis"></span></p>
                    <p class="mrg0"><strong>Visi:</strong> <span id="modal-visi"></span></p>
                    <p class="mrg0"><strong>Misi:</strong> <span id="modal-misi"></span></p>
                </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Vote</button>
    </div>
    </div>
    </div>
    </div> -->

    <!-- Codingan PHP -->

    <!-- Menghubungkan file JS jQuery (pastikan sudah ada) -->
    <script src="<?php echo base_url('bootstrap-utama') ?>/js/jquery.min.js"></script>
    <!-- Menghubungkan file JS Bootstrap 5 dengan path relatif -->
    <script src="<?php echo base_url('bootstrap-utama') ?>/js/bootstrap.min.js"></script>


    <!-- <script>
        $(document).ready(function() {
            $('.detail').on('click', function() {
                const id = $(this).data('id');
                const nama = $(this).data('nama');
                const nis = $(this).data('nis');
                const visi = $(this).data('visi');
                const misi = $(this).data('misi');
                const foto = $(this).data('foto');

                // Menyisipkan data ke dalam modal
                $('#modal-id').text(id);
                $('.modal-nama').text(nama);
                $('#modal-nis').text(nis);
                $('#modal-visi').text(visi);
                $('#modal-misi').text(misi);
                $('#modal-foto').attr('src', '/img/' + foto);
                alert(nama);
            });

        });
    </script> -->

</body>



</html>