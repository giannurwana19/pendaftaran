<?php include "../config/autoload.php"; ?>
<?php include "laporan_control.php"; ?>
<?php include "../template/header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Laporan Pendaftaran</h1>

  <a href="<?= $base_url ?>/cetak/data_pendaftar.php" target="_blank" class="btn btn-warning btn-sm mb-3">Cetak Data Pendaftar</a>

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
          <th>Action</th>
        </thead>
        <tbody>
          <?php
          $no = 1;
          while ($p = mysqli_fetch_assoc($all_pendaftar)) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $p['nama']; ?></td>
              <td><?= $p['alamat']; ?></td>
              <td><?= $p['nilai_un']; ?></td>
              <td><?= $p['nilai_us']; ?></td>
              <td><?= number_format(($p['nilai_un'] + $p['nilai_us']) / 2, 2) ?></td>
              <?php
              if ($p['status'] == 0) { ?>
                <td class="text-center"><span class="badge badge-info">BARU</span></td>
              <?php } elseif ($p['status'] == 1) { ?>
                <td class="text-center"><span class="badge badge-success">LOLOS</span></td>
              <?php } else { ?>
                <td class="text-center"><span class="badge badge-danger">TIDAK LOLOS</span></td>
              <?php } ?>
              <td class="text-center">
                <a href="" class="btn btn-warning btn-sm">Cetak</a>
              </td>
            </tr>
            <?php $no++; ?>
          <?php endwhile; ?>
          <?php if (mysqli_num_rows($all_pendaftar) == 0) { ?>
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