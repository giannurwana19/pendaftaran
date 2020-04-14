<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi pendaftaran siswa secara online">
  <meta name="author" content="Gian Nurwana">

  <title>Registrasi | Aplikasi Pendaftaran Siswa</title>

  <!-- <link rel="icon" type="image/png" href="assets/img/logo.png"> -->
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="py-4 px-5">
                  <div class="text-center">
                    <h1 class="h5 font-weight-bold text-gray-900 mb-4">Registrasi Siswa Baru</h1>
                  </div>
                  <form class="user" action="registrasi_control.php" method="POST">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="nama anda">
                    </div>
                    <div class="form-group row">
                    <div class="col-md-6">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" name="tmpt_lahir" class="form-control" id="tempat_lahir" placeholder="tempat lahir">
                    </div>
                    <div class="col-md-6">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="tanggal lahir">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-6">                    
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <div class="form-check">
                        <input type="radio" name="jenis_kelamin" class="form-check-input" id="laki" value="L" checked>
                        <label for="laki">Laki-Laki</label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="jenis_kelamin" class="form-check-input" id="perempuan" value="P">
                        <label for="perempuan">perempuan</label>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                          <option value="Islam" selected>Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Buddha">Buddha</option>
                          <option value="Konghucu">Konghucu</option>
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
                        <label for="telepon">No. Telp</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Nomor telepon">
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
                    <button value="simpan" name="btn_registrasi" class="btn btn-primary btn-user btn-block">
                      Daftar
                    </button>
                  </form>
                  <hr>
                  <div class="text-center small">
                    <p>Sudah Punya Akun? <a href="login.php">Login Disini!</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <?php

  require "footer.php";

  ?>