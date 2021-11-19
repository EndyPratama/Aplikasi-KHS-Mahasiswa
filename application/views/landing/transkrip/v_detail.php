<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Transkrip Nilai Mahasiswa</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo base_url('C_beranda') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('C_transkrip') ?>">Transkrip Nilai Mahasiswa</a></li>
        <li class="breadcrumb-item active">Detail Data</li>
      </ol>


      <div class="col-md-12">
        <div class="card card-warning">
          <div class="card-header">
            <div class="text-center"><br>
              <h3 class="card-title">Transkrip Nilai Mahasiswa</h3><br>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
              <thead>

                <th class="table-primary">Nama Lengkap</th>
                <th colspan="6"><?php echo $nama; ?></th>
                </tr>

                <tr>
                  <th class="table-primary">NPM</th>
                  <th colspan="6"><?php echo $npm; ?></th>
                </tr>

                <?php foreach ($matkul as $row) : ?>

                  <tr>
                    <th class="table-primary">Nama Mata Kuliah</th>
                    <th><?php echo $row->nama_matkul; ?></th>

                    <th class="table-primary">Nilai</th>
                    <th>
                      <?php
                      if ($row->nilai == 4) {
                        $nilai = "A";
                      } else if ($row->nilai = 3.75) {
                        $nilai = "A-";
                      } else if ($row->nilai = 3.5) {
                        $nilai = "B+";
                      } else if ($row->nilai = 3.25) {
                        $nilai = "B";
                      } else if ($row->nilai = 3) {
                        $nilai = "B-";
                      } else if ($row->nilai = 2.75) {
                        $nilai = "C+";
                      } else if ($row->nilai = 2.5) {
                        $nilai = "C";
                      } else if ($row->nilai = 2.25) {
                        $nilai = "C-";
                      } else if ($row->nilai = 2) {
                        $nilai = "D+";
                      } else if ($row->nilai = 1.75) {
                        $nilai = "D";
                      } else if ($row->nilai = 1.5) {
                        $nilai = "K";
                      }
                      echo $nilai; ?>
                    </th>
                  </tr>

                <?php endforeach; ?>
              </thead>
            </table>

          </div>

          <div class="card-footer">
            <div class="modal-footer justify-content-between">
              <?php echo anchor('C_transkrip', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
            </div>
          </div>
          </form>
        </div>
      </div>


    </div>
  </main>