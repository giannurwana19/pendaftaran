<?php include "../config/autoload.php"; ?>
<?php include "../template/header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">EDIT PROFILE</h1>

  <div class="row">
    <div class="col-md-8">
      <form class="user">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="nama anda">
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="Tempat_lahir" class="form-control" id="tempat_lahir" placeholder="tempat lahir">
          </div>
          <div class="col-md-6">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="tanggal lahir">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="jk">Jenis Kelamin</label>
            <div class="form-check">
              <input type="radio" name="jk" class="form-check-input" id="laki" value="laki-laki" checked>
              <label for="laki">Laki-Laki</label>
            </div>
            <div class="form-check">
              <input type="radio" name="jk" class="form-check-input" id="perempuan" value="perempuan">
              <label for="perempuan">perempuan</label>
            </div>
          </div>
          <div class="col-md-6">
            <label for="agama">Agama</label>
            <select name="agama" id="agama" class="form-control">
              <option value="islam" selected>Islam</option>
              <option value="kristen">Kristen</option>
              <option value="katholik">Katholik</option>
              <option value="hindu">Hindu</option>
              <option value="buddha">Buddha</option>
              <option value="konghucu">Konghucu</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="3"></textarea>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email Aktif">
          </div>
          <div class="col-md-6">
            <label for="no.telp">No. Telp</label>
            <input type="text" name="no.telp" id="no.telp" class="form-control" placeholder="Nomor telepon">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          </div>
          <div class="col-md-6">
            <label for="password2">Ulangi Password</label>
            <input type="password" name="password2" id="password2" class="form-control" placeholder="password">
          </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5" name="simpan">Ubah</button>
        <a href="dashboard.php" class="btn btn-danger mb-5">kembali</a>
      </form>
    </div>
    <div class="col-md-4">
      <img src="../assets/img/profil1.jpg" alt="foto profil" class="img-fluid">
      <input type="file" name="gambar" class="form-control mt-2">
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php" ?>