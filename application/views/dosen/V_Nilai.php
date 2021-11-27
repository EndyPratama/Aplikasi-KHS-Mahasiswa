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
                <div class="card-header">
                    <?php echo anchor('mahasiswa/C_matkul/tambah_data', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>') ?>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>Kelas</th>
                                <th>SKS</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($matkul as $index => $matkul) : ?>
                                <tr>
                                    <!-- <td><?php echo $no++ ?></td> -->
                                    <td><?= $index ?></td>
                                    <td id="matkul<?= $index; ?>"><?= $matkul->nama_matkul ?></td>
                                    <td><?= $matkul->kelas ?></td>
                                    <td><?= $matkul->sks ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= base_url("Dosen/C_input_nilai/Data_Mahasiswa/" . $matkul->id_matkul); ?>">View</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>