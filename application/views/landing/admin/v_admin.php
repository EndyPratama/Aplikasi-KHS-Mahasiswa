<div id="layoutSidenav_content">
<main>
  
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pengaturan Akun</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Akun Admin</li>
                        </ol>

                        <?php 
                          if($this->session->flashdata('insert_admin')){
                              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('insert_admin');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }                          
                          if($this->session->flashdata('update_admin')){
                              echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('update_admin');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }
                          if($this->session->flashdata('hapus_admin')){
                              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('hapus_admin');
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
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        foreach($admin as $admin):?>
                                        <tr>
                                            <td><?= $admin->nama?></td>
                                            <td><?= $admin->username?></td>
                                            <td><?= $admin->password?></td>
                                            <td><?= $admin->email?></td>
                                            <td><?= $admin->keterangan?></td>

                                                <td width="20px"><?php echo anchor('C_admin/delete/'.$admin->id_user, 
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
                            <?php echo form_open_multipart('C_admin/tambah_aksi'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="hidden" class="form-control" name="id_admin">
                                <input type="text" class="form-control" name="nama" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">No Telp</label>
                                <input type="text" class="form-control" name="no_telp" >
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" >
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Username</label>
                                <input type="text" class="form-control" name="username" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" name="email">
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


              