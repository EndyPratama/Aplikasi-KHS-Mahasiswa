<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Jadwal Kuliah <?= $data->thn_akademik ?> <?= $data->semester ?></h1>
            <input type="hidden" name="id_akademik" value="<?= $data->id_akademik ?>">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/C_beranda') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Jadwal Kuliah</li>
            </ol>

            <?php
            if ($this->session->flashdata('insert_jadwal')) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo $this->session->flashdata('insert_jadwal');
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
            }
            if ($this->session->flashdata('update_jadwal')) {
                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                echo $this->session->flashdata('update_jadwal');
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
            }
            if ($this->session->flashdata('hapus_jadwal')) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo $this->session->flashdata('hapus_jadwal');
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
            }
            ?>
            <div class="card mb-4">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-plus"></i>Tambah Data</button>   
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>Nama Dosen</th>
                                <th>Kelas</th>
                                <th>SKS</th>
                                <th>Hari</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($jadwal as $jadwal) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?= $jadwal->nama_matkul ?></td>
                                    <td><?= $jadwal->nama ?></td>
                                    <td><?= $jadwal->kelas ?></td>
                                    <td><?= $jadwal->sks ?></td>
                                    <td><?= $jadwal->hari ?></td>
                                    <td><?= $jadwal->mulai ?></td>
                                    <td><?= $jadwal->selesai ?></td>
                                    <td><?= $jadwal->thn_akademik ?></td>
                                    <td><?= $jadwal->semester ?></td>

                                        <td width="20px"><?php echo anchor('Admin/C_schedule/update/'.$jadwal->id, 
                                                '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>')?></td>

                                        <td width="20px"><?php echo anchor('Admin/C_schedule/delete/'.$jadwal->id, 
                                                '<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></div>')?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php echo anchor('Admin/C_schedule/','<div class="btn btn-sm btn-danger">Kembali</div>')?>

                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                            <?php echo form_open_multipart('Admin/C_schedule/tambah_aksi'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Mata Kuliah</label>
                                <input type="hidden" class="form-control" name="id">
                                <input type="hidden" class="form-control" name="id_akademik" value="<?= $data->id_akademik ?>">
                                <select name="id_matkul" class="form-control show-tick" required>
                                        <option value="">-- Pilih Mata Kuliah --</option>
                                        <?php foreach ($matkul as $key => $value) { ?>
                                        <option value="<?= $value->id_matkul ?>"><?= $value->nama_matkul ?></option>
                                        <?php } ?>
                                    </select>
                              </div>                              

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Dosen</label>
                                <select name="dosen" class="form-control show-tick" required>
                                        <option value="">-- Pilih Dosen --</option>
                                        <?php foreach ($dosen as $key => $value) { ?>
                                        <option value="<?= $value->nama ?>"><?= $value->nama ?></option>
                                        <?php } ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Jumlah Mahasiswa</label>
                                <input type="text" class="form-control" name="jmlh_mhs" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Hari</label>
                                <input type="text" class="form-control" name="hari" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Mulai</label>
                                <input type="timezones" class="form-control" name="mulai" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Selesai</label>
                                <input type="timezones" class="form-control" name="selesai" required>
                              </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <?php echo form_close() ?>
                      </div>
                    </div>
                  </div>
                </div>