<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Nilai</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_nilai') ?>">Nilai</a></li>
                            <li class="breadcrumb-item active">Update Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Update Data Nilai</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('C_nilai/update_aksi');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>

                                                <tr>
                                                  <th>NPM</th>
                                                  <input type="hidden" name="id_nilai"  value="<?= $data->id_nilai ?>">
                                                  <th><select name="npm" class="form-control show-tick" required>
                                                      <option value="<?= $data->npm ?>"><?= $data->npm ?></option>
                                                      <?php foreach ($mahasiswa as $key => $value) { ?>
                                                      <option value="<?= $value->npm ?>"><?= $value->npm ?></option>
                                                      <?php } ?>
                                                  </select></th>
                                                </tr>

                                                <tr>
                                                  <th>Mata Kuliah</th>
                                                  <th><select name="id_matkul" class="form-control show-tick" required>
                                                      <option value="<?= $data->id_matkul ?>"><?= $data->nama_matkul ?></option>
                                                      <?php foreach ($matkul as $key => $value) { ?>
                                                      <option value="<?= $value->id_matkul ?>"><?= $value->nama_matkul ?></option>
                                                      <?php } ?>
                                                  </select></th>
                                                </tr>

                                                <tr>
                                                  <th>Nilai</th>
                                                  <th><input type="text" name="nilai" value="<?= $data->nilai ?>" class="form-control" required></th>
                                                </tr>

                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('C_nilai', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>