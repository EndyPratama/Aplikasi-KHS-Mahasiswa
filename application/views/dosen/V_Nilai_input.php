<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Mata Kuliah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa/C_beranda') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Mata Kuliah</li>
            </ol>

            <?php
            if ($this->session->flashdata('insert_matkul')) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo $this->session->flashdata('insert_matkul');
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
            }
            if ($this->session->flashdata('update_matkul')) {
                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                echo $this->session->flashdata('update_matkul');
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
            }
            if ($this->session->flashdata('hapus_matkul')) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo $this->session->flashdata('hapus_matkul');
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
            }
            ?>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-1">No</div>
                        <div class="col-3">NPM</div>
                        <div class="col-4">Nama</div>
                        <div class="col-1">UTS</div>
                        <div class="col-1">UAS</div>
                        <div class="col-1">Hasil</div>
                        <div class="col-1">Action</div>
                    </div>
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $index => $mahasiswa) : ?>
                        <form action="<?= base_url('Dosen/C_input_nilai/inputNilaiMahasiswa/'); ?>" method="POST">
                            <div class="row">
                                <input type="hidden" value="<?= $mahasiswa->id; ?>" name="transkrip">
                                <input type="hidden" name="idMatkul" value="<?= $idMatkul; ?>">
                                <div class="col-1"><?= $no++; ?></div>
                                <div class="col-3">
                                    <?= $mahasiswa->npm; ?>
                                    <input type="hidden" value="<?= $mahasiswa->npm; ?>" name="npm">
                                </div>
                                <div class="col-4"><?= $mahasiswa->nama; ?></div>
                                <div class="col-1">
                                    <input id="UTS<?= $no; ?>" type="text" class="form-control" value="<?= $mahasiswa->nilai_uts; ?>" onchange="nilaiAkhir(<?= $no; ?>)" name="uts" style="width: 50;">
                                </div>
                                <div class="col-1">
                                    <input id="UAS<?= $no; ?>" type="text" class="form-control" value="<?= $mahasiswa->nilai_uas; ?>" onchange="nilaiAkhir(<?= $no; ?>)" name="uas" style="width: 50;">
                                </div>
                                <div class="col-1">
                                    <input id="rating<?= $no; ?>" type="text" class="form-control" value="<?= $mahasiswa->nilai; ?>" name="nilai" style="width: 50;" readonly>
                                    <input id="nilai<?= $no; ?>" type="hidden" class="form-control" value="<?= $mahasiswa->nilai; ?>" name="nilai" style="width: 50;" readonly>
                                </div>
                                <div class="col-1">
                                    <button type="submit" class="btn btn-outline-primary">Send</button>
                                </div>
                            </div>
                        </form>
                        <script>
                            cekNilai(<?= $no; ?>);

                            function cekNilai(index) {
                                var uts = document.getElementById("UTS" + index).value;
                                var uas = document.getElementById("UAS" + index).value;
                                var nilai = document.getElementById("rating" + index).value;
                                console.log(uts);
                                console.log(uas);
                                console.log(nilai);
                                if (uts != 0) {
                                    $('#UTS' + index).prop('readonly', true);
                                }
                                if (uas != 0) {
                                    $('#UAS' + index).prop('readonly', true);
                                }
                                if (nilai == 4) {
                                    document.getElementById("rating" + index).value = "A"; //A
                                } else if (nilai < 4 && nilai >= 3.75) {
                                    document.getElementById("rating" + index).value = "A-"; //A
                                } else if (nilai < 3.75 && nilai >= 3.5) {
                                    document.getElementById("rating" + index).value = "B+"; //A
                                } else if (nilai < 3.5 && nilai >= 3) {
                                    document.getElementById("rating" + index).value = "B"; //A
                                } else if (nilai < 3 && nilai >= 2.75) {
                                    document.getElementById("rating" + index).value = "B-"; //A
                                } else if (nilai < 2.75 && nilai >= 2.5) {
                                    document.getElementById("rating" + index).value = "C+"; //A
                                } else {
                                    document.getElementById("rating" + index).value = "K"; //A
                                }
                            }
                        </script>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <script>
        // $(document).ready(function() {
        //     $("button").click(function() {
        //         $("p").slideToggle();
        //     });
        // });


        function nilaiAkhir(index) {
            var uts = document.getElementById("UTS" + index).value;
            var uas = document.getElementById("UAS" + index).value;
            console.log(uts);
            console.log(uas);
            var hasil = ((uts * 1) + (uas * 1)) / 2;
            console.log(hasil);
            if (hasil >= 80) {
                document.getElementById("nilai" + index).value = "4"; //A
                document.getElementById("rating" + index).value = "A"; //A
            } else if (hasil >= 76 && hasil < 80) {
                document.getElementById("nilai" + index).value = "3.75"; //A-
                document.getElementById("rating" + index).value = "A-"; //A-
            } else if (hasil >= 72 && hasil < 76) {
                document.getElementById("nilai" + index).value = "3.5"; //B+
                document.getElementById("rating" + index).value = "B+"; //B+
            } else if (hasil < 72 && hasil >= 68) {
                document.getElementById("nilai" + index).value = "3"; //B
                document.getElementById("rating" + index).value = "B"; //B
            } else if (hasil < 68 && hasil >= 64) {
                document.getElementById("nilai" + index).value = "2.75"; //B-
                document.getElementById("rating" + index).value = "B-"; //B-
            } else if (hasil < 64 && hasil >= 60) {
                document.getElementById("nilai" + index).value = "2.5"; //C+
                document.getElementById("rating" + index).value = "C+"; //C+
            } else if (hasil < 60 && hasil >= 56) {
                document.getElementById("nilai" + index).value = "2"; //C
                document.getElementById("rating" + index).value = "C"; //C
            } else {
                document.getElementById("nilai" + index).value = "1"; //C
                document.getElementById("rating" + index).value = "D"; //C
            }
        }
    </script>