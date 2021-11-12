<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Biodata </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Biodata</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Detail Biodata Mahasiswa</h3><br>
                                </div>
                              </div>
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <?php foreach ($mahasiswa as $row) : ?>

                                                  <div class="modal-footer justify-content-between">
                                                  <?php echo anchor('mahasiswa/C_biodata/update/'.$row->id_mhs, 
                                                          '<div class="btn btn-sm btn-primary">Edit Data</i></div>')?>        
                                                  <?php echo anchor('mahasiswa/C_biodata/password/'.$row->id_user, 
                                                          '<div class="btn btn-sm btn-warning">Ganti Password</i></div>')?>                      
                                                                                             
                                              </div>

                                                <center><img src="<?php echo base_url().'uploads/'.$row->foto ?>" style="width: 20%;"></center>
                                                <tr>
                                                  <th class="table-primary">Nama Lengkap</th>
                                                  <th><?php echo $row->nama; ?></th>
                                                </tr>

                                                <tr>
                                                  <th class="table-primary">NPM</th>
                                                  <th colspan="2"><?php echo $row->npm; ?></th>

                                                  <th class="table-primary">Dosen Wali</th>
                                                  <th colspan="3"><?php echo $row->dosen_wali; ?></th>
                                                </tr>

                                                <tr>
                                                  <th class="table-primary">Alamat</th>
                                                  <th colspan="6"><?php echo $row->alamat; ?></th>
                                                </tr>

                                                <tr>
                                                  <th class="table-primary">Jenis Kelamin</th>
                                                  <th><?php echo $row->jenis_kelamin; ?></th>

                                                  <th class="table-primary">Tempat Lahir</th>
                                                  <th><?php echo $row->tempat_lahir; ?></th>

                                                  <th class="table-primary">Tanggal Lahir</th>
                                                  <th><?php echo $row->tgl_lahir; ?></th>
                                                </tr>

                                                <tr>
                                                  <th class="table-primary">No Telp</th>
                                                  <th colspan="6"><?php echo $row->no_telp; ?></th>
                                                </tr>

                                                 <?php endforeach; ?>                              
                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>