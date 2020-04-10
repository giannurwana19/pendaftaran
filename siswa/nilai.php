<?php include "../config/autoload.php"; ?>
<?php include "../template/header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">EDIT NILAI</h1>

  <div class="row">
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Data Nilai</h6>
        </div>
        <div class="card-body">
          <form class="user">
            <p class="text-danger">* Ubah Jika ada kesalahan!</p>
            <div class="form-group">
              <label for="nama">Masukkan Nilai Ujian Nasional</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nilai">
            </div>
            <div class="form-group">
              <label for="nama">Masukkan Nilai Ujian Sekolah</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nilai">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="dashboard.php" class="btn btn-danger">kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php" ?>