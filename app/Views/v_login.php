<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tittle; ?></title>
    <!-- Memasukkan link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Note
    Pembuatan front end tidak melalui frame work CI maupun laravel jadi pastikan untuk merubah settingan link css, boostrap maupun gambar
    Ganti Background Image Ada Di Style Css Di bawah
    hanya ada internal css dan tidak ada external
    Dilarang mengotak atik style kecuali value/isinya contoh "username" atau memang dibutuhkan
    Tag yang di comand boleh dibuka sesuai kebutuhan-->

    <style>
        /* Mengatur tampilan layar */
        body {
            margin: 0;
        }

        .body {
            margin: 0;
            height: 100vh;

        }

        .size {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Ganti Background Image Disini */
        .image {
            background-image: url('texar01.jpg');
            /* Ganti 'background.jpg' dengan nama file gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            color: #ffffff;
            background-size: 100%;
            background-size: cover;
            color: white;
            background-repeat: no-repeat;
        }

        .bg {
            padding: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: rgb(225, 225, 255);
            border-left: 0px;
            border-right: 0px;
            border-top: 0px;
            max-width: 450px;
        }

        .pdn {
            padding: 50px;
        }

        @media (max-width: 576px) {
            .pdn {
                padding: 30px;
            }
        }

        .teks {
            text-decoration: none;
            font-weight: normal;
        }

        .mrg2 {
            margin-bottom: 10px;
        }

        .log {
            width: 100%;
            margin-bottom: 20px;
        }

        .rounded-bos {
            border-radius: 10px;
            border: solid 1px;
            box-sizing: border-box;
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.5);
            /* Warna latar belakang footer dengan opacity */
            color: #fff;
            /* Warna teks footer */
            padding: 20px;
            /* Ruang padding di dalam footer */
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .navmrg {
            margin-left: 10px;
        }
    </style>

</head>

<body>
    <!-- jangan otak atik style -->
    <div class="body image">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- logo texar -->
                <a class="navbar-brand" href="https://www.smktexarkarawang.com/"><img src="logoTexar.png" style="width:50px; object-fit: cover;" alt=""><img src="LOGO SMKASSALAM.png" style="width:50px; object-fit: cover;" alt=""></a>
                <a class="navbar-brand" href="https://www.instagram.com/tixar_studio/">Texas Voice</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item navmrg">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item navmrg">
                            <a class="nav-link" href="#">Terms of Service</a>
                        </li> -->
                        <li class="nav-item navmrg">
                            <a class="nav-link" href="https://www.instagram.com/tixar_studio/">About Us</a>
                        </li>
                        <!-- <li class="nav-item navmrg">
                            <a class="nav-link" href="">Contact</a>
                        </li> -->
                    </ul>
                    <!-- <ul class="navbar-nav ms-auto">
                        <li><a href="#"><img src="texar.png" style="width:50px;" alt=""></a></li>
                    </ul> -->
                </div>
            </div>
        </nav>

        <!-- form -->
        <div class="size">
            <div class="container pdn">
                <div class="card custom-form bg rounded-bos">
                    <div class="card-header">
                        <h1 class="teks" style="font-size: 30px; text-align: center;">Login</h1>
                    </div>
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                    <p style="text-align: center; margin-right: 20px; margin-left: 20px; margin-bottom: 0px; margin-top: 10px;">Silahkan Login Untuk Melakukan Voting Osis SMK TEXAR</p>
                    <div class="card-body">

                        <form action="<?php echo base_url('/auth/login') ?>" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label mrg2">Username</label>
                                <input type="text" class="form-control bg border-bottom" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label mrg2">Password</label>
                                <input type="password" class="form-control bg border-bottom" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary mrg log rounded-pill" style="padding: 10px; margin-top: 20px;">Login</button>
                        </form>
                        <div class="alert alert-danger fade in" id="loginError" style="display:none;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            Username atau Password Salah.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Copyright &copy; 2023 Rachardian Bagaskoro & Tim Extrakulikuler Tixar All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Memasukkan script Bootstrap JS (dan dependency Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Cek apakah ada pesan error yang ingin ditampilkan
    </script>
</body>

</html>