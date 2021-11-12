<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Dosen</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dosen</li>
                        </ol>

                        <?php 
                          if($this->session->flashdata('insert_dosen')){
                              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('insert_dosen');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }                          
                          if($this->session->flashdata('update_dosen')){
                              echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('update_dosen');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }
                          if($this->session->flashdata('hapus_dosen')){
                              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('hapus_dosen');
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
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>NIDN</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        foreach($dosen as $dosen):?>
                                        <tr>
                                            <td><img src="<?php echo base_url().'uploads/'.$dosen->foto ?>" style="width: 20%;"></td>
                                            <td><?= $dosen->nama?></td>
                                            <td><?= $dosen->nidn?></td>
                                            <td><?= $dosen->jenis_kelamin?></td>
                                            <td><?= $dosen->alamat?></td>
                                            <td><?= $dosen->no_telp?></td>

                                                <td width="20px"><?php echo anchor('C_dosen/update/'.$dosen->id_dosen, 
                                                '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>')?></td>

                                                <td width="20px"><?php echo anchor('C_dosen/delete/'.$dosen->id_dosen, 
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
                            <?php echo form_open_multipart('C_dosen/tambah_aksi'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="hidden" class="form-control" name="id_dosen">
                                <input type="text" class="form-control" name="nama">
                              </div>

                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">NIDN</label>
                                <input type="text" class="form-control" name="nidn">
                              </div>

                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin">
                              </div>

                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                              </div>

                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">No Telp</label>
                                <input type="text" class="form-control" name="no_telp">
                              </div>                              

                              <div class="mb-3">
                                <label for="foto" class="col-form-label">Foto</label>
                                <input type="file" name="foto" class="form-control">
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
