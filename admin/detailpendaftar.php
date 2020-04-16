<?php include "../config/autoload.php"; ?>
<?php include "detailpendaftar_control.php"; ?>
<?php include "../template/header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Detail Pendaftar</h1>

  <div class="row">

    <div class="col-md-6">

      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
        </div>
        <div class="card-body">
          <div class="text-center">
            <?php
            if ($data_pendaftar['foto'] == null) {
              $foto = '../assets/img/1.png';
            } else {
              $foto = '../upload/' . $data_pendaftar['foto'];
            }
            ?>
            <img src="<?= $foto; ?>" class="img-fluid rounded-circle" style="width: 200px;" alt="salah">
          </div>
          <h5 class="text-center card-title mt-3"><?= $data_pendaftar['nama']; ?></h5>

          <ul class="list-group">
            <li class="list-group-item">
              <h6 class="mb-0 text-dark font-weight-bold">Tempat, Tanggal Lahir</h6>
              <small><?= $data_pendaftar['tmpt_lahir']; ?>, <?= date('d-m-Y', strtotime($data_pendaftar['tgl_lahir'])); ?></small>
            </li>
            <li class="list-group-item">
              <?php
              if ($data_pendaftar['jenis_kelamin'] == "L") {
                $jenis_kelamin = "Laki-laki";
              } else {
                $jenis_kelamin = "Perempuan";
              }
              ?>
              <h6 class="mb-0 text-dark font-weight-bold">Jenis Kelamin</h6>
              <small><?= $jenis_kelamin; ?></small>
            </li>
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

    <div class="col-md-6">

      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Nilai Pendaftar</h6>
        </div>
        <div class="card-body">
          <div class="alert alert-info">
            Data pendaftar belum divalidasi
          </div>

          <ul class="list-group">
            <li class="list-group-item">
              <h6 class="mb-0 text-dark font-weight-bold">Nilai Ujian Nasional</h6>
              <small class="text-muted"><?= $data_nilai['nilai_un']; ?></small>
            </li>
            <li class="list-group-item">
              <h6 class="mb-0 text-dark font-weight-bold">Nilai Ujian Sekolah</h6>
              <small class="text-muted"><?= $data_nilai['nilai_us']; ?></small>
            </li>
            <li class="list-group-item">
              <h6 class="mb-0 text-dark font-weight-bold">Nilai Rata-rata</h6>
              <small class="text-muted"><?= number_format(($data_nilai['nilai_un'] + $data_nilai['nilai_us']) / 2,2); ?></small>
            </li>
          </ul>

          <button type="button" class="btn btn-primary mt-3 btn-block" data-toggle="modal" data-target="#modalvalidasi">
            Validasi Data Pendafar
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalvalidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Penilaian Data Pendaftar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <a href="" class="btn btn-success mr-3">LOLOS</a>
                  <a href="" class="btn btn-danger">TIDAK LOLOS</a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>

</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php"; ?>