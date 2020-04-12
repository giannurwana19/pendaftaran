<?php include "../config/autoload.php"; ?>
<?php include "nilai_control.php"; ?>
<?php include "../template/header.php"; ?>

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
          <p class="text-danger">* Ubah Jika ada kesalahan!</p>
          <form class="user" method="POST" action="<?= $base_url; ?>/siswa/nilai.php">
          <?php if(isset($data_nilai)) { 
            $id_nilai  = $data_nilai['id']; ?>
            <input type="hidden" name="id_nilai" value="<?= $id_nilai; ?>">
          <?php }else{
            
          } 
          
          ?>

            <div class="form-group">
              <label for="un">Masukkan Nilai Ujian Nasional</label>
              <input type="number" name="nilai_un" class="form-control" id="un" value="<?php if(isset($data_nilai)) { echo $data_nilai['nilai_un']; } ?>" placeholder="Nilai">
            </div>
            <div class="form-group">
              <label for="us">Masukkan Nilai Ujian Sekolah</label>
              <input type="number" name="nilai_us" class="form-control" id="us" value="<?php if(isset($data_nilai)) { echo $data_nilai['nilai_us']; } ?>" placeholder="Nilai">
            </div>
            <button type="submit" name="btn_simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
            <a href="dashboard.php" class="btn btn-danger">kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php" ?>