<div id="layoutSidenav_content">
    <main>
        <a href="<?= base_url("Dosen/C_perwalian"); ?>">
            <i class='bx bx-left-arrow-alt' style="font-size: 32px;"></i>
        </a>
        <div class="container-fluid px-4">
            <h1 class="mt-2">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <h3>Detail Mahasiswa</h3>
            <div class="row">
                <?php foreach ($mahasiswa as $m) : ?>
                    <div class="col-4">
                        <img src="<?= base_url('uploads/') . $m->foto ?>" alt="" width="350">
                    </div>
                    <div class="col">
                        <H4>Data Diri Mahasiswa</H4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $m->nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Npm</td>
                                    <td>:</td>
                                    <td><?= $m->npm; ?></td>
                                </tr>
                                <tr>
                                    <td>No.HP</td>
                                    <td>:</td>
                                    <td><?= $m->no_telp; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $m->alamat; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 class="mt-5">Transkrip Sementara</h4>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Matkul</th>
                                    <th scope="col">SKS</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $x = 0;
                                foreach ($transkrip as $t) :
                                    $x++;
                                ?>
                                    <tr>
                                        <th scope="row"><?= $x; ?></th>
                                        <td><?= $t->nama_matkul; ?></td>
                                        <td><?= $t->sks; ?></td>
                                        <td><?= $t->nilai; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="ipk">
                            Index Prestasi : <?= round($ipk, 3);; ?>
                        </div>
                        <div class="totalSKS">
                            Total SKS : <?= $total_sks; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>
    </main>