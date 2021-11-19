<div id="layoutSidenav_content">
<main>
  
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Infromasi Akun</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Akun</li>
                        </ol>

                        <?php
                          if ($this->session->flashdata('update_akun')) {
                            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                            echo $this->session->flashdata('update_akun');
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>';
                          }
                         ?>

            <div class="col-md-12">
            <div class="card card-warning">
          
              <div class="card-body">
                <table class="table table-hover table-bordered table-striped">
                    <?php foreach($admin as $data):?>

                    <tr>
                        <td>Nama</td>
                        <td><?= $data->nama ?></td>
                    </tr>

                    <tr>
                        <td>No Telp</td>
                        <td><?= $data->no_telp ?></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><?= $data->alamat ?></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td><?= $data->email ?></td>
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td><?= $data->username ?></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><?= $data->password ?></td>
                    </tr>

                    
            </table>

            </div>
            <div class="modal-footer justify-content-between">

                <?php echo anchor('Admin/C_info/update/'.$data->id_admin, 
                                                                  '<div class="btn btn-sm btn-warning">Edit Data</i></div>')?>  
                <?php echo anchor('Admin/C_info/update_password/'.$data->id_user, 
                                                                  '<div class="btn btn-sm btn-success">Ganti Password</i></div>')?>                                              
                <?php endforeach;?>
            </div>
            </div>
          </div>
        </div>


</main>