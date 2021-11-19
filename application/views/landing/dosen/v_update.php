<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Dosen</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_dosen') ?>">Data Dosen</a></li>
                            <li class="breadcrumb-item active">Edit Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Edit Data</h3><br>
                                </div>
                              </div>
                              <?php echo form_open_multipart('Admin/C_dosen/update_aksi');?>  
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <tr>
                                                  <th>NIDN</th>
                                                  <input type="hidden" name="id_dosen"  value="<?= $data->id_dosen ?>">
                                                  <th><input type="text" name="nidn" value="<?= $data->nidn ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Nama</th>
                                                  <th><input type="text" name="nama" value="<?= $data->nama ?>" class="form-control" required></th>
                                                </tr>

                                                <tr>
                                                  <th>Jenis Kelamin</th>
                                                  <th><input type="text" name="jenis_kelamin" value="<?= $data->jenis_kelamin ?>" class="form-control" required></th>
                                                </tr>     

                                                <tr>
                                                  <th>Alamat</th>
                                                  <th><input type="text" name="alamat" value="<?= $data->alamat ?>" class="form-control" required></th>
                                                </tr>   

                                                <tr>
                                                  <th>No Telp</th>
                                                  <th><input type="text" name="no_telp" value="<?= $data->no_telp ?>" class="form-control" required></th>
                                                </tr>         

                                                <tr>
                                                  <th>Ganti Foto</th>
                                                  <th><input type="file" name="userfile"  class="form-control"></th>
                                                </tr>                    
                                            
                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('Admin/C_dosen', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>

                    </div>
                </main>