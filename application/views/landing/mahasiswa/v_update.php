<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_mahasiswa') ?>">Mahasiswa</a></li>
                            <li class="breadcrumb-item active">Update Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Update Data Mahasiswa</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('C_mahasiswa/update_aksi');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>Nama Lengkap</th>
                                                  <input type="hidden" name="id_mhs"  value="<?= $data->id_mhs ?>">
                                                  <th colspan="6"><input type="text" name="nama" value="<?= $data->nama ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>NPM</th>
                                                  <th colspan="2"><input type="text" name="npm" value="<?= $data->npm ?>" class="form-control" required></th>

                                                  <th>Dosen Wali</th>
                                                  <th colspan="3"><input type="text" name="dosen_wali" value="<?= $data->dosen_wali ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Alamat</th>
                                                  <th colspan="6"><input type="text" name="alamat" value="<?= $data->alamat ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Jenis Kelamin</th>
                                                  <th><input type="text" name="jenis_kelamin" value="<?= $data->jenis_kelamin ?>" class="form-control" required></th>

                                                  <th>Tempat Lahir</th>
                                                  <th><input type="text" name="tempat_lahir" value="<?= $data->tempat_lahir ?>" class="form-control" required></th>

                                                  <th>Tanggal Lahir</th>
                                                  <th><input type="date" name="tgl_lahir" value="<?= $data->tgl_lahir ?>" class="form-control" required></th>
                                                </tr>                                         

                                                <tr>
                                                  <th>No Telp</th>
                                                  <th colspan="6"><input type="text" name="no_telp" value="<?= $data->no_telp ?>" class="form-control"></th>                                                  
                                                </tr>

                                                <tr>
                                                  <th>Ganti Foto</th>
                                                  <th colspan="6"><input type="file" name="userfile"  class="form-control"></th>
                                                </tr>

                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('C_mahasiswa', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>