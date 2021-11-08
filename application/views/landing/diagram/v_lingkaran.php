<div id="layoutSidenav_content">
    <main>
        <h4>Diagram Master</h4>
        <!-- <canvas id="lingkaran" width="40" height="40"></canvas> -->
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
        <div style="width: 500px; height: 500px">
            <canvas id="myChart"></canvas>
        </div>
    </main>

    <script>
        $(document).ready(
            function() {
                var canvas = document.getElementById("myChart");
                var ctx = canvas.getContext("2d");
                var myNewchart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'pie',
                    // The data for our dataset
                    data: {
                        labels: [<?php echo $nama_matkul; ?>],
                        datasets: [{
                            label: 'Data Master Mahasiswa ',
                            backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)', 'rgb(150, 75, 0)', 'rgb(255, 255, 0)', 'rgb(128, 128, 128)', 'rgb(255, 0, 0)', 'rgb(128, 128, 0)'],
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
                canvas.onclick = function(evt) {
                    console.log("Canvas di klik");
                    var activePoints = myNewchart.getElementsAtEvent(evt);
                    console.log(activePoints);
                    if (activePoints[0]) { // active point is trusted
                        var chartData = activePoints[0]['_chart'].config.data;
                        // console.log(activePoints[0]);
                        // console.log(activePoints[0]['_chart']);
                        var idx = activePoints[0]['_index'];
                        console.log(idx);

                        var label = chartData.labels[idx];

                        var url = "<?= base_url('C_lingkaran/detail/'); ?>" + label;
                        // console.log(url);
                        // alert(url);
                        window.location.href = url;
                    }
                };
            })
    </script>