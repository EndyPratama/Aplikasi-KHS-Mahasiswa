<div id="layoutSidenav_content">
<main>
  
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Tahun Akademik</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tahun Akadmik</li>
                        </ol>

                        <?php 
                          if($this->session->flashdata('insert_akademik')){
                              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('insert_akademik');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }                          
                          if($this->session->flashdata('update_akademik')){
                              echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('update_akademik');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }
                          if($this->session->flashdata('hapus_akademik')){
                              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('hapus_akademik');
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
                                            <th>Tahun Akademik</th>                               
                                            <th>Semester</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                         $no=1;
                                        foreach($akademik as $akademik):?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?= $akademik->thn_akademik?></td>                                           
                                            <td><?= $akademik->semester?></td>
                                            <td><?= $akademik->status?></td>


                                                <td width="20px"><?php echo anchor('Admin/C_akademik/update/'.$akademik->id_akademik, 
                                                '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>')?></td>

                                                <td width="20px"><?php echo anchor('Admin/C_akademik/delete/'.$akademik->id_akademik, 
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
                            <?php echo form_open_multipart('Admin/C_akademik/tambah_aksi'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tahun Akademik</label>
                                <input type="hidden" class="form-control" name="id_akademik">
                                <input type="text" class="form-control" name="thn_akademik" required>
                              </div>                              

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Semester</label>
                                <input type="text" class="form-control" name="semester" required>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Status</label>
                                <input type="text" class="form-control" name="status" required>
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
