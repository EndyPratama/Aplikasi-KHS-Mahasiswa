<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Umum</div>
                    <a class="nav-link" href="<?php echo base_url('admin/C_beranda') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                        Data Perwalian
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= base_url('Dosen/C_perwalian') ?>">Data Mahasiswa</a>
                            <a class="nav-link" href="<?= base_url('Dosen/C_perwalian') ?>">Konsultasi Mahasiswa</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="<?php echo base_url('Dosen/C_matkul') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                        Data Mata Kuliah
                    </a>

                    <a class="nav-link" href="<?php echo base_url('Dosen/C_input_nilai') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                        Input Nilai
                    </a>

                    <a class="nav-link" href="<?php echo base_url('Dosen/C_Schedule') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                        Schedule
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLay" aria-expanded="false" aria-controls="collapseLay">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                        Digram
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLay" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('Dosen/C_Graph/bar') ?>">Bar</a>
                            <a class="nav-link" href="<?php echo base_url('Dosen/C_Graph/pie') ?>">Pie</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="<?php echo base_url('Dosen/C_Setting') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                        Pengaturan Akun
                    </a>

                    <a class="nav-link" href="<?php echo base_url('Auth/logout') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                        Logout
                    </a>

                </div>
            </div>

        </nav>
    </div>