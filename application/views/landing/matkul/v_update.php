<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Mata Kuliah</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_matkul') ?>">Mata Kuliah</a></li>
                            <li class="breadcrumb-item active">Update Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Update Data Mata Kuliah</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('C_matkul/update_aksi');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>Mata Kuliah</th>
                                                  <input type="hidden" name="id_matkul"  value="<?= $data->id_matkul ?>">
                                                  <th><input type="text" name="nama_matkul" value="<?= $data->nama_matkul ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>SKS</th>
                                                  <th><input type="text" name="sks" value="<?= $data->sks ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Semester</th>
                                                  <th><input type="text" name="semester" value="<?= $data->semester ?>" class="form-control" required></th>
                                                </tr>

                                                 <tr>
                                                  <th>Dosen</th>
                                                  <th><select name="id_dosen" class="form-control show-tick" required>
                                                        <option value="<?= $data->id_dosen ?>"><?= $data->nama ?></option>
                                                        <?php foreach ($dosen as $key => $value) { ?>
                                                        <option value="<?= $value->id_dosen ?>"><?= $value->nama ?></option>
                                                        <?php } ?>
                                                    </select></th>
                                                </tr>

                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('C_matkul', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>