<?php include "../config/autoload.php"; ?>
<?php include "../template/header.php"; ?>

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
              <div class="h5 mt-2 font-weight-bold">22 Orang</div>
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
              <div class="h5 mt-2 font-weight-bold">10 Orang</div>
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
  <h2 class="text-gray-800">Data Pendaftar</h2>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
        <thead class="bg-info text-white">
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nilai</th>
          <th>Status</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Gian Nurwana</td>
            <td>Kp. Pisangan RT 02/01</td>
            <td>90</td>
            <td class="text-center"><span class="badge badge-info">BARU</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>M. Hendri</td>
            <td>Kp. Pisangan RT 02/01</td>
            <td>90</td>
            <td class="text-center"><span class="badge badge-info">BARU</span></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Wawan Kurniawan</td>
            <td>Kp. Pisangan RT 02/01</td>
            <td>85</td>
            <td class="text-center"><span class="badge badge-info">BARU</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php"; ?>