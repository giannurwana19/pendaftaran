<?php include "../config/autoload.php"; ?>
<?php include "../template/header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Pendaftar</h1>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
        <thead class="bg-info text-white text-center">
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nilai</th>
          <th>Status</th>
          <th colspan="2">Action</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Gian Nurwana</td>
            <td>Kp. Pisangan RT 02/01</td>
            <td>90</td>
            <td class="text-center"><span class="badge badge-info">BARU</span></td>
            <td class="text-center">
              <a href="detailpendaftar.php" class="btn btn-success btn-sm">Cek</a>
            </td>
            <td class="text-center">
              <a href="" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>M. Hendri</td>
            <td>Kp. Pisangan RT 02/01</td>
            <td>90</td>
            <td class="text-center"><span class="badge badge-info">BARU</span></td>
            <td class="text-center">
              <a href="detailpendaftar.php" class="btn btn-success btn-sm">Cek</a>
            </td>
            <td class="text-center">
              <a href="" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Wawan Kurniawan</td>
            <td>Kp. Pisangan RT 02/01</td>
            <td>85</td>
            <td class="text-center"><span class="badge badge-info">BARU</span></td>
            <td class="text-center">
              <a href="detailpendaftar.php" class="btn btn-success btn-sm">Cek</a>
            </td>
            <td class="text-center">
              <a href="" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php"; ?>