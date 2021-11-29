<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Schedule</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/C_beranda') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tahun Akademik</li>
                        </ol>
                        <h3>Pilih Tahun Akademik</h3>

                        <div class="row">
                            <?php foreach ($akademik as $akademik) : ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?php echo $akademik->thn_akademik ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/C_schedule/pilih/'.$akademik->id_akademik) ?>"><?php echo $akademik->semester ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <?php endforeach; ?>
                        </div>                                     
                    </div>
                </main>