<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pengaturan Akun</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dosen/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Akun</li>
                        </ol>

                        <?php 
                          if($this->session->flashdata('update_user')){
                              echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                              echo $this->session->flashdata('update_user');
                              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                          }
                          ?>
                        <div class="card mb-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        foreach($user as $user):?>
                                        <tr>
                                            <td><?= $user->username?></td>
                                            <td><?= $user->password?></td>
                                            <td><?= $user->email?></td>
                                            <td><?= $user->status?></td>
                                                <td width="20px"><?php echo anchor('dosen/C_setting/update/'.$user->id_user, 
                                                '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>')?></td>
                                                                    
                                        </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

