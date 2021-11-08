<div id="layoutSidenav_content">
    <main>

        <form action="<?= base_url('C_diagram/detail/'); ?>" method="POST">
            <select name="nama_matkul" id="nama_matkul" class="form-control">
                <option selected>-- Pilih Data --</option>
                <?php foreach ($hasil as $item) : ?>
                    <option value="<?php echo $item->nama_matkul ?>"><?php echo $item->nama_matkul ?></option>
                <?php endforeach; ?>
            </select>
            <button class="btn btn-outline-primary" type="submit">Tampilkan</button>
        </form>

        <h4>Diagram Master</h4>

        <canvas id="myChart" width="50" height="20"></canvas>
        <?php
        //Inisialisasi nilai variabel awal
        $nama_matkul = "";
        $jumlah = null;
        foreach ($hasil as $item) {
            $jur = $item->nama_matkul;
            $nama_matkul .= "'$jur'" . ", ";
            $jum = $item->total;
            $jumlah .= "$jum" . ", ";
        }
        ?>

    </main>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                labels: [<?php echo $nama_matkul; ?>],
                datasets: [{
                    label: 'Data Master Mata Kuliah ',
                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)', 'rgb(150, 75, 0)', 'rgb(255, 255, 0)', 'rgb(128, 128, 128)'],
                    borderColor: ['rgb(148, 0, 211)'],
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

        function clickHandler(click) {
            const points = pieChart.getElementsAtEventForMode(click, 'nearest', {
                intersect: true
            }, true);

            const nama_matkul = <?= json_encode($nama_matkul); ?>;
            if (points.length) {
                const firstPoint = points[0];
                console.log(firstPoint.index);

                // membuka link
                window.location.href = 'detailbar.php?nama_matkul=' + nama_matkul[firstPoint.index];
            }
        }
    </script>