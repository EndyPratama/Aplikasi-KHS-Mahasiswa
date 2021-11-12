<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Transkrip Nilai Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Detail Data</li>
                        </ol>


                        <div class="col-md-12">
                            <div class="card card-warning">
                              <div class="card-header">
                                <div class="text-center"><br>
                                <h3 class="card-title">Transkrip Nilai Mahasiswa</h3><br>
                                </div>
                              </div>
                                <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover">
                                              <thead>
                                                <?php foreach ($mahasiswa as $row) : ?> 
                                                  <th class="table-primary">Nama Lengkap</th>
                                                  <th colspan="6"><?php echo $row->nama; ?></th>
                                                </tr>

                                                <tr>
                                                  <th class="table-primary">NPM</th>
                                                  <th colspan="6"><?php echo $row->npm; ?></th>
                                                </tr>
                                                <?php endforeach; ?>
                                                  <?php foreach ($nilai as $row) : ?>                                              

                                                <tr>
                                                  <th class="table-primary">Nama Mata Kuliah</th>
                                                  <th><?php echo $row->nama_matkul; ?></th>

                                                  <th class="table-primary">Nilai</th>
                                                  <th><?php echo $row->nilai; ?></th>
                                                </tr>
                                           
                                                <?php endforeach; ?>
                                              </thead>
                                            </table>

                              </div>

                                <div class="card-footer">
                                 <div class="modal-footer justify-content-between">
                                        
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>


                    </div>
                </main>