<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Vote</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Homepage</a></li>
                        <li class="breadcrumb-item active">Hasil Vote</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <!-- <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
        </div> -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Hasil Vote</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>

    <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Tidak Vote</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
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
                            <th>Status</th>
                            <th>Max Time</th>
                            <th>Role</th>
                            <!-- <th class="bg-secondary">Option</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($belumvote as $row) :
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row->nis; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->tingkat; ?></td>
                                <td><?= $row->kelas; ?></td>
                                <td><?= $row->status; ?></td>
                                <td><?= $row->max_time; ?></td>
                                <td><?= $row->role; ?></td>
                            </tr>
                        <?php
                            $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
           <!--  <div class="card-footer">
                Total Data Belum Vote
            </div>   -->          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
</div>

<script>
    //barchart
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php

                        $nama_kandidat = "";
                        $value = null;
                        foreach ($hasil as $item) {
                            # code...

                            $kandidat = $item->nama;
                            $nama_kandidat .= "'$kandidat'" . ", ";
                            $jum = $item->total_value;
                            $value = "$jum" . ", ";
                        }
                        echo $nama_kandidat;

                        ?>],
            datasets: [{
                label: 'Data Hasil Vote ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php
                        $nama_kandidat = "";
                        $value = null;
                        foreach ($hasil as $item) {
                            # code...

                            $kandidat = $item->nama;
                            $nama_kandidat .= "'$kandidat'" . ", ";
                            $jum = $item->total_value;
                            $value = "$jum" . ", ";
                            echo $value;
                        }

                        ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

     
</script>