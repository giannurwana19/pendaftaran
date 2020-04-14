<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi pendaftaran siswa secara online">
  <meta name="author" content="Gian Nurwana">

  <title>Login | Aplikasi Pendaftaran Siswa</title>

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
                    <img src="assets/img/logo.png" class="mb-3" width="100" alt="">
                    <h1 class="h5 font-weight-bold text-gray-900 mb-4">SMA NEGERI 11 KAB. TANGERANG</h1>
                    <h1 class="h5 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php session_start(); ?>
                  <?php if (isset($_SESSION['pesan_regis'])) : ?>
                    <div class="alert alert-success"><?= $_SESSION['pesan_regis']; ?></div>
                  <?php endif; ?>

                  <?php if (isset($_SESSION['login_error'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <?= $_SESSION['login_error']; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                  <?php session_destroy(); ?>
                  <form class="user" action="login_control.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                    <button type="submit" name="btn_login" class="btn btn-primary btn-user btn-block" value="login">Login</button>
                  </form>
                  <hr>
                  <div class="text-center small">
                    <p>Belum Punya Akun? <a href="registrasi.php">Daftar Disini!</a></p>
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