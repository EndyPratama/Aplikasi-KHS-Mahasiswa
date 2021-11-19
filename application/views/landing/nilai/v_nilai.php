<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Nilai</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Nilai</li>
                        </ol>

                        <?php 
                          if($this->session->flashdata('insert_nilai')){
                              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('insert_nilai');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }                          
                          if($this->session->flashdata('update_nilai')){
                              echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('update_nilai');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }
                          if($this->session->flashdata('hapus_nilai')){
                              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('hapus_nilai');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }
                          ?>
                        <div class="card mb-4">
                            <div class="card-header">  
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-plus"></i>Tambah Data</button>                                              
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NPM</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nilai</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                         $no=1;
                                        foreach($nilai as $nilai):?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?= $nilai->npm?></td>
                                            <td><?= $nilai->nama_matkul?></td>
                                            <td><?= $nilai->nilai?></td>

                                                <td width="20px"><?php echo anchor('Admin/C_nilai/update/'.$nilai->id_nilai, 
                                                '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>')?></td>

                                                <td width="20px"><?php echo anchor('Admin/C_nilai/delete/'.$nilai->id_nilai, 
                                                '<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></div>')?></td>
                                                                    
                                        </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                            <?php echo form_open_multipart('Admin/C_nilai/tambah_aksi'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">NPM</label>
                                <input type="hidden" class="form-control" name="id_nilai">
                                <select name="npm" class="form-control show-tick" required>
                                        <option value="">-- Pilih NPM --</option>
                                        <?php foreach ($mahasiswa as $key => $value) { ?>
                                        <option value="<?= $value->npm ?>"><?= $value->npm ?></option>
                                        <?php } ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Mata Kuliah</label>
                                <select name="id_matkul" class="form-control show-tick" required>
                                        <option value="">-- Pilih Mata Kuliah --</option>
                                        <?php foreach ($matkul as $key => $value) { ?>
                                        <option value="<?= $value->id_matkul ?>"><?= $value->nama_matkul ?></option>
                                        <?php } ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Nilai</label>
                                <input type="text" class="form-control" name="nilai">
                              </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <?php echo form_close() ?>
                      </div>
                    </div>
                  </div>
                </div>
