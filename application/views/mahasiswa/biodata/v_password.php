<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Form Ganti Password</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa/C_biodata') ?>">Biodata</a></li>
                            <li class="breadcrumb-item active">Ganti Password</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Ganti Password</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('mahasiswa/C_biodata/update_user');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>Password Lama</th>
                                                  <input type="hidden" name="id_user"  value="<?= $data->id_user ?>">
                                                  <th><input type="password" name="lama" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Password Baru</th>
                                                  <th><input type="password" name="password1" class="form-control" required></th>
                                                  <?= form_error('password1', ' <small class="text-danger">', '</small> '); ?>
                                                </tr>

                                                <tr>
                                                  <th>Konfirmasi Password</th>
                                                  <th><input type="password" name="password2" class="form-control" required></th>
                                                  <?= form_error('password2', ' <small class="text-danger">', '</small> '); ?>
                                                </tr>

                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('mahasiswa/C_biodata/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Ganti</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>