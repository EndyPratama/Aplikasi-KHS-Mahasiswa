<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jadwal Kuliah <?= $data->thn_akademik ?> <?= $data->semester ?></h1>
                        <input type="hidden" name="id_akademik" value="<?= $data->id_akademik ?>">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Update Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Update Jadwal</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('Admin/C_schedule/update_aksi');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>Mata Kuliah</th>
                                                  <input type="hidden" name="id"  value="<?= $data->id ?>">
                                                  <input type="hidden" name="id_akademik"  value="<?= $data->id_akademik ?>">
                                                  <th><select name="id_matkul" class="form-control show-tick" required>
                                                      <option value="<?= $data->id_matkul ?>"><?= $data->nama_matkul ?></option>
                                                      <?php foreach ($matkul as $key => $value) { ?>
                                                      <option value="<?= $value->id_matkul ?>"><?= $value->nama_matkul ?></option>
                                                      <?php } ?>
                                                  </select></th>
                                                </tr>

                                                <tr>
                                                  <th>Nama Dosen</th>                                              
                                                  <th><select name="dosen" class="form-control show-tick" required>
                                                      <option value="<?= $data->dosen ?>"><?= $data->dosen ?></option>
                                                      <?php foreach ($dosen as $key => $value) { ?>
                                                      <option value="<?= $value->nama ?>"><?= $value->nama ?></option>
                                                      <?php } ?>
                                                  </select></th>
                                                </tr>                                                

                                                <tr>
                                                  <th>Kelas</th>
                                                  <th><input type="text" name="kelas" value="<?= $data->kelas ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Hari</th>
                                                  <th><input type="text" name="hari" value="<?= $data->hari ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Jam Mulai</th>
                                                  <th><input type="text" name="mulai" value="<?= $data->mulai ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Jam Selesai</th>
                                                  <th><input type="text" name="selesai" value="<?= $data->selesai ?>" class="form-control" required></th>
                                                </tr>

                                            
                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('Admin/C_schedule/pilih/'.$data->id_akademik, '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>

                    </div>
                </main>