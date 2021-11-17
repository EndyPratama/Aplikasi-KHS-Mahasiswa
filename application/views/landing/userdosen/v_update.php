<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pengaturan Akun</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_userdosen') ?>">Akun Dosen</a></li>
                            <li class="breadcrumb-item active">Update Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Update Data Akun Dosen</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('C_userdosen/update_aksi');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>Username</th>
                                                  <input type="hidden" name="id_user"  value="<?= $data->id_user ?>">
                                                  <th><input type="text" name="username" value="<?= $data->username ?>" class="form-control" readonly></th>
                                                </tr>

                                                <tr>
                                                  <th>Password</th>
                                                  <th><input type="text" name="password" value="<?= $data->password ?>" class="form-control" readonly></th>
                                                </tr>

                                                <tr>
                                                  <th>Email</th>
                                                  <th><input type="text" name="email" value="<?= $data->email ?>" class="form-control" readonly></th>
                                                </tr>

                                                <tr>
                                                  <th>Status</th>
                                                  <th><select name="keterangan" class="form-control show-tick" required>
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Tidak">Tidak</option>
                                                    </select></th>
                                                </tr>
                                            
                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('C_userdosen', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>

                    </div>
                </main>