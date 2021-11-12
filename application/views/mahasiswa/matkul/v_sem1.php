<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Mata Kuliah</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa/C_matkul') ?>">Mata Kuliah</a></li>
                            <li class="breadcrumb-item active">Tambah Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Tambah Data Mata Kuliah</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('mahasiswa/C_matkul/tambah_matkul');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>Mata Kuliah</th>
                                                  <input type="hidden" name="id_matkulmhs">
                                                  <th><select name="id_matkul" class="form-control show-tick" required>
                                                        <option value="">-- Pilih Mata Kuliah --</option>
                                                        <?php foreach ($matkul as $key => $value) { ?>
                                                        <option value="<?= $value->id_matkul ?>"><?= $value->nama_matkul ?></option>
                                                        <?php } ?>
                                                    </select></th>
                                                </tr>
                                             

                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('mahasiswa/C_matkul/tambah_data', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>