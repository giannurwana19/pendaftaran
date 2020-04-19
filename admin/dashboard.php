<?php include "../config/autoload.php"; ?>
<?php include "dashboard_control.php"; ?>
<?php include "../template/header_admin.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

  <div class="row">
    <div class="col-md-6">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h4 font-weight-bold text-info text-uppercase mb-1">Pendaftar Masuk</div>
              <div class="h5 mt-2 font-weight-bold">
                <?= mysqli_num_rows($jml_pendaftar); ?>  Orang
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300" style="font-size: 90px"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h4 font-weight-bold text-success text-uppercase mb-1">Lolos Seleksi</div>
              <div class="h5 mt-2 font-weight-bold">
                <?= mysqli_num_rows($jml_lolos); ?> Orang
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300" style="font-size: 90px"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="mt-3">
  <h4 class="text-gray-800">Data Pendaftar Baru</h4>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
        <thead class="bg-info text-white text-center">
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nilai UN</th>
          <th>Nilai US</th>
          <th>Rata-Rata</th>
          <th>Status</th>
        </thead>
        <tbody>
        <?php 
          $no = 1;
          while($p = mysqli_fetch_assoc($all_pendaftar)): ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $p['nama']; ?></td>
            <td><?= $p['alamat']; ?></td>
            <td><?= $p['nilai_un']; ?></td>
            <td><?= $p['nilai_us']; ?></td>
            <td><?= ($p['nilai_un'] + $p['nilai_us'])/2; ?></td>
            <td class="text-center"><span class="badge badge-info">BARU</span></td>
          </tr>
          <?php endwhile; ?>
          <?php if(mysqli_num_rows($all_pendaftar) == 0){ ?>
              <tr class="text-center font-weight-bold">
                <td colspan="7">Belum ada data pendaftar baru</td>
              </tr>
          <?php } ?>
          
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php"; ?>