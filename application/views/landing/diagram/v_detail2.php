<div id="layoutSidenav_content">
    <main>

        <h4>Diagram Detail - [<?= $nama_matkul; ?>] </h4>

        <!-- <canvas id="detailpie" width="50" height="20"></canvas> -->
        <?php
        //Inisialisasi nilai variabel awal
        $nama = "";
        $jumlah = null;
        foreach ($hasil as $item) {
            $jur = $item->nama;
            $nama .= "'$jur'" . ", ";
            $jum = $item->nilai;
            $jumlah .= "$jum" . ", ";
        }
        ?>
        <div class="row">
            <div class="col-6">
                <div style="width: 500px; height: 500px">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x = 0;
                        foreach ($hasil as $item) :
                            $x++;
                        ?>
                            <tr>
                                <th scope="row"><?= $x; ?></th>
                                <td><?= $item->nama; ?></td>
                                <td><?= $item->nilai; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        var canvas = document.getElementById("myChart");
        var ctx = canvas.getContext("2d");
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'pie',
            // The data for our dataset
            data: {
                labels: [<?php echo $nama; ?>],
                datasets: [{
                    label: 'Data Master Mahasiswa ',
                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)', 'rgb(150, 75, 0)', 'rgb(255, 255, 0)', 'rgb(128, 128, 128)'],
                    data: [<?php echo $jumlah; ?>]
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