<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <h3>Daftar Mahasiswa</h3>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col-1">#</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">No_HP</th>
                        <th scope="col">Status</th>
                        <th scope="col-1">View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $x = 0;
                    foreach ($mahasiswa as $m) :
                        $x++;
                    ?>
                        <tr>
                            <th scope="row"><?= $x; ?></th>
                            <td>
                                <img src="<?= base_url('uploads/') . $m->foto ?>" alt="" width="50">
                            </td>
                            <td><?= $m->nama; ?></td>
                            <td><?= $m->npm; ?></td>
                            <td><?= $m->no_telp; ?></td>
                            <td><?= $m->status; ?></td>
                            <td>
                                <a class="btn btn-success" href="<?= base_url("Dosen/C_perwalian/detailMahasiswa/" . $m->id_mhs); ?>">
                                    <i class='bx bx-show'></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>