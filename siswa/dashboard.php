<?php include "../config/autoload.php"; ?>
<?php include "dashboard_control.php"; ?>
<?php include "../template/header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Menu Utama</h1>

  <div class="row">

    <div class="col-md-12">
      <?php if (isset($_SESSION['pesan_sukses'])) { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          <?= $_SESSION['pesan_sukses']; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php }
      unset($_SESSION['pesan_sukses']);
      ?>
    </div>
    <div class="col-md-6">
      <div class="row">
        <?php if (!isset($status)) { ?>
          <div class="col-md-12">


            <!-- Illustrations -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Nilai</h6>
              </div>
              <div class="card-body">
                <p class="text-danger">* Masukkan nilai untuk menyelesaikan proses pendaftaran!</p>
                <form class="user" method="POST" action="<?= $base_url ?>/siswa/dashboard.php">
                  <div class="form-group">
                    <label for="un">Masukkan Nilai Ujian Nasional</label>
                    <input type="number" name="nilai_un" class="form-control" id="un" placeholder="Nilai">
                  </div>
                  <div class="form-group">
                    <label for="us">Masukkan Nilai Ujian Sekolah</label>
                    <input type="number" name="nilai_us" class="form-control" id="us" placeholder="Nilai">
                  </div>
                  <div class="text-right">
                    <button type="submit" name="btn_simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                    <a href="dashboard.php" class="btn btn-danger">Kembali</a>
                  </div>
                </form>
              </div>
            </div>


          </div>

        <?php } else if (isset($status) && $status == 0) { ?>
          <div class="col-md-12">

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pengumuman Hasil Seleksi</h6>
              </div>
              <div class="card-body">
                <div class="card">
                  <div class="text-center">
                    <div class="card-body">
                      <h5 class="card-title mb-3">Proses Penilaian</h5>
                      <div class="col-auto">
                        <i class="fas fa-spinner text-warning mb-3" style="font-size: 90px;"></i>
                      </div>
                      <p class="card-text">Terima kasih telah melakukan pendaftaran di SMA NEGERI 11 KAB TANGERANG. Pengumuman pada tanggal : </p>
                      <span class="badge badge-danger" style="font-size: 18px;">5 Oktober 2020</span>
                    </div>
                    <div class="card-footer">
                      <marquee>SMA NEGERI 11 KABUPATEN TANGERANG</marquee>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        <?php } else if (isset($status) && $status == 1) { ?>
          <div class="col-md-12">

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pengumuman Hasil Seleksi</h6>
              </div>
              <div class="card-body">
                <div class="card">
                  <div class="text-center">
                    <div class="card-body">
                      <h5 class="card-title mb-3">Anda Lolos</h5>
                      <div class="col-auto">
                        <i class="fas fa-check-circle text-success mb-3" style="font-size: 90px;"></i>
                      </div>
                      <p class="card-text">Selamat! Anda lolos seleksi di SMA NEGERI 11 KABUPATEN TANGERANG. Lakukan daftar ulang pada tanggal : </p>
                      <span class="badge badge-danger" style="font-size: 18px;">20 Oktober 2020</span>
                    </div>
                    <div class="card-footer">
                      <marquee>SMA NEGERI 11 KABUPATEN TANGERANG</marquee>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>


        <?php } else if (isset($status) && $status == 2) { ?>
          <div class="col-md-12">

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pengumuman Hasil Seleksi</h6>
              </div>
              <div class="card-body">
                <div class="card">
                  <div class="text-center">
                    <div class="card-body">
                      <h5 class="card-title mb-3">ANDA TIDAK LOLOS</h5>
                      <div class="col-auto">
                        <i class="fas fa-times text-danger mb-3" style="font-size: 90px;"></i>
                      </div>
                      <p class="card-text">Anda belum lolos. Terima kasih telah mengikuti seleksi dengan baik</p>
                    </div>
                    <div class="card-footer">
                      <marquee>SMA NEGERI 11 KABUPATEN TANGERANG</marquee>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>

        <?php } ?>

        <div class="col-md-12">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Persyaratan Daftar Ulang</h6>
            </div>
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                  <p class="card-text">Siswa yang telah lolos seleksi wajib melakukan daftar ulang dengan membawa berkas sebagai berikut : </p>
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      1. FC AKTA
                      <span class="badge badge-info badge-pill">3 lembar</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      2. FC Kartu Keluarga
                      <span class="badge badge-info badge-pill">3 lembar</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      3. FC Nilai Ujian Nasional
                      <span class="badge badge-info badge-pill">3 lembar</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      3. FC Nilai Ujian Sekolah
                      <span class="badge badge-info badge-pill">3 lembar</span>
                    </li>
                    <p class="mt-2 text-danger font-weight-bold">* Daftar ulang pada tanggal 12 oktober 2020</p>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
            </div>
            <div class="card-body">
              <div class="col-auto mt-3 text-center">
                <?php
                if ($data_pendaftar['foto'] == null) {
                  $foto = '../assets/img/ava.png';
                } else {
                  $foto = '../upload/' . $data_pendaftar['foto'];
                }
                ?>
                <img src="<?= $foto; ?>" class="img-fluid rounded-circle" width="200" alt="salah">
              </div>
              <div class="text-right">
                <a href="editprofil.php" class="btn btn-warning btn-sm">Edit Profile</a>
                <a href="<?= $base_url ?>/cetak/detail_cetak.php?id=<?= $id_pendaftar; ?>" target="_blank" class="mb-3 btn btn-success float-left  btn-sm">Cetak Data Diri</a>
              </div>
              <h5 class="text-center card-title mt-3"><?= $data_pendaftar['nama']; ?></h5>

              <ul class="list-group">
                <li class="list-group-item">
                  <h6 class="mb-0 text-dark font-weight-bold">Tempat, Tanggal lahir</h6>
                  <small><?= $data_pendaftar['tmpt_lahir']; ?>, <?= date('d-m-Y', strtotime($data_pendaftar['tgl_lahir'])); ?></small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0 text-dark font-weight-bold">Jenis Kelamin</h6>
                  <?php if ($data_pendaftar['jenis_kelamin'] == 'L') {
                    $kelamin = "Laki - laki";
                  } else {
                    $kelamin = "Perempuan";
                  }
                  ?>
                  <small><?= $kelamin; ?></small>
                </li>
                <?php
                if ($data_pendaftar['agama'] == 'Islam') {
                  $data_pendaftar['agama'] = 'Islam';
                } elseif ($data_pendaftar['agama'] == 'Kristen') {
                  $data_pendaftar['agama'] = 'Kristen';
                } else if ($data_pendaftar['agama'] == 'Katholik') {
                  $data_pendaftar['agama'] = 'Katholik';
                } elseif ($data_pendaftar['agama'] == 'Hindu') {
                  $data_pendaftar['agama'] = 'Hindu';
                } elseif ($data_pendaftar['agama'] == 'Buddha') {
                  $data_pendaftar['agama'] = 'Buddha';
                } else {
                  $data_pendaftar['agama'] = 'Konghucu';
                }
                ?>
                <li class="list-group-item">
                  <h6 class="mb-0 text-dark font-weight-bold">Agama</h6>
                  <small><?= $data_pendaftar['agama']; ?></small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0 text-dark font-weight-bold">Alamat</h6>
                  <small><?= $data_pendaftar['alamat']; ?></small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0 text-dark font-weight-bold">Email</h6>
                  <small><?= $data_pendaftar['email']; ?></small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0 text-dark font-weight-bold">Telepon</h6>
                  <small><?= $data_pendaftar['telepon']; ?></small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php" ?>