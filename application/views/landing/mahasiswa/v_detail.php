<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_mahasiswa') ?>">Mahasiswa</a></li>
                            <li class="breadcrumb-item active">Detail Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Detail Data Mahasiswa</h3><br>
                                </div>
                              </div>
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <?php foreach ($mahasiswa as $row) : ?>

                                                <center><img src="<?php echo base_url().'uploads/'.$row->foto ?>" style="width: 20%;"></center>

                                                  <th class="table-primary">Nama Lengkap</th>
                                                  <th colspan="6"><?php echo $row->nama; ?></th>
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
                                 <div class="modal-footer justify-content-between">
                                        <?php echo anchor('Admin/C_mahasiswa', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>