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
                          <h3>Jika akan menambahkan dosen harus melalui tambah akun dosen terlebih dahulu</h3>
                        <div class="card mb-4">
                            <div class="card-header">  
                                                                           
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

              