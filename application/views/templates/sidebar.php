<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Umum</div>
                    <a class="nav-link" href="<?php echo base_url('C_beranda') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                        Data Mahasiswa
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('C_mahasiswa') ?>">Biodata Mahasiswa</a>
                            <a class="nav-link" href="<?php echo base_url('C_nilai') ?>">Data Nilai Mahasiswa</a>
                            <a class="nav-link" href="<?php echo base_url('C_transkrip') ?>">Data Transkrip Nilai</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="<?= base_url('C_dosen') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                        Data Dosen
                    </a>


                    <a class="nav-link" href="<?php echo base_url('C_matkul') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                        Data Mata Kuliah
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLay" aria-expanded="false" aria-controls="collapseLay">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                        Digram
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLay" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('C_diagram') ?>">Batang</a>
                            <a class="nav-link" href="<?php echo base_url('C_lingkaran') ?>">Pie</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#akun" aria-expanded="false" aria-controls="akun">
                        <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                        Pengaturan Akun
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="akun" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('') ?>">Admin</a>
                            <a class="nav-link" href="<?php echo base_url('') ?>">Dosen</a>
                            <a class="nav-link" href="<?php echo base_url('') ?>">Mahasiswa</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="<?php echo base_url('Auth/logout') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                        Logout
                    </a>

                </div>
            </div>

        </nav>
    </div>