<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Transkrip Nilai Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Transkrip Nilai Mahasiswa</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>NPM</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        foreach($mahasiswa as $row):?>
                                        <tr>
                                            <td><img src="<?php echo base_url().'uploads/'.$row->foto ?>" style="width: 20%;"></td>
                                            <td><?= $row->nama?></td>
                                            <td><?= $row->npm?></td>

                                                <td width="20px"><?php echo anchor('C_transkrip/detail/'.$row->npm, 
                                                '<div class="btn btn-sm btn-success"><i class="fas fa-eye"></i>Lihat Data</div>')?></td>
                                                                    
                                        </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

               