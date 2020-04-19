<?php include "../config/autoload.php"; ?>
<?php include "pendaftaran_control.php"; ?>
<?php include "../template/header_admin.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Pendaftar</h1>

  <div class="row">
    <div class="col-12">
      <?php if (isset($_SESSION['pesan_sukses'])) { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          <?= $_SESSION['pesan_sukses']; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
      <?php unset($_SESSION['pesan_sukses']); ?>
    </div>
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
          <th colspan="2">Action</th>
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
                <a href="detailpendaftar.php?id=<?= $p['id']; ?>" class="btn btn-success btn-sm">Cek</a>
              </td>
              <td class="text-center">
                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus_<?= $p['id']; ?>">Hapus</a>
              </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="modalHapus_<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Anda akan menghapus data pendaftar dengan nama <?= $p['nama']; ?>! <br>
                      <b>DATA AKAN DIHAPUS SECARA PERMANEN</b></p>
                  </div>
                    <div class="modal-footer">
                      <a href="<?= $base_url ?>/admin/pendaftaran.php?action=hapus&id=<?= $p['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                      <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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