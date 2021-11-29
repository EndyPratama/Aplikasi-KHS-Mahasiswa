<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Tahun Akademik</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_akademik') ?>">Tahun Akademik</a></li>
                            <li class="breadcrumb-item active">Update Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Update Data Tahun Akadmik</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('Admin/C_akademik/update_aksi');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>Tahun Akademik</th>
                                                  <input type="hidden" name="id_akademik"  value="<?= $data->id_akademik ?>">
                                                  <th><input type="text" name="thn_akademik" value="<?= $data->thn_akademik ?>" class="form-control" required></th>
                                                </tr>                                                

                                                <tr>
                                                  <th>Semester</th>
                                                  <th><input type="text" name="semester" value="<?= $data->semester ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Status</th>
                                                  <th><input type="text" name="status" value="<?= $data->status ?>" class="form-control" required></th>
                                                </tr>

                                            
                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('Admin/C_akademik', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>

                    </div>
                </main>