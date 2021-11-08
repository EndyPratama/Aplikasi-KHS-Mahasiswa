<div id="layoutSidenav_content">
<main>

	<h4>Diagram Detail</h4>

<canvas id="detailbar" width="50" height="20"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama= "";
    $jumlah=null;
    foreach ($hasil as $item)
    {
        $jur=$item->nama;
        $nama .= "'$jur'". ", ";
        $jum=$item->nilai;
        $jumlah .= "$jum". ", ";
    }
    ?>


</main>

<script>
    var ctx = document.getElementById('detailbar').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama;?>],
            datasets: [{
                label:'Data Master Mahasiswa ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)', 'rgb(150, 75, 0)', 'rgb(255, 255, 0)', 'rgb(128, 128, 128)'],
                borderColor: ['rgb(148, 0, 211)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
