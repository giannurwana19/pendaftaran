<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard | Aplikasi Siswa</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">APS - SISTEM</div>
      </a>

      <!-- Heading -->
      <div class="sidebar-heading">
        SISWA
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="nilai.php">
          <i class="fas fa-th-list"></i>
          <span>Nilai</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="editprofil.php">
          <i class="fas fa-user-edit"></i>
          <span>Edit Profile</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama']; ?></span>
                <img class="img-profile rounded-circle" src="../assets/img/profil1.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="editprofil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profil
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Menu Utama</h1>

          <div class="row">
            <div class="col-md-6">


              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Nilai</h6>
                </div>
                <div class="card-body">
                  <form class="user">
                    <p class="text-danger">* Masukkan nilai untuk menyelesaikan proses pendaftaran!</p>
                    <div class="form-group">
                      <label for="nama">Masukkan Nilai Ujian Nasional</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nilai">
                    </div>
                    <div class="form-group">
                      <label for="nama">Masukkan Nilai Ujian Sekolah</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nilai">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                </div>
              </div>


            </div>
            <div class="col-md-6">


              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img src="../assets/img/profil1.jpg" class="img-fluid rounded-circle" style="width: 200px" alt="salah">
                  </div>
                  <div class="text-right">
                    <a href="editprofil.php" class="btn btn-warning btn-sm">Edit Profile</a>
                  </div>
                  <h5 class="text-center card-title mt-3">Gian Nurwana</h5>

                  <ul class="list-group">
                    <li class="list-group-item">
                      <h6 class="mb-0 text-dark font-weight-bold">Tempat, Tanggal Lahir</h6>
                      <small>Tangerang, 09 Mei 2000</small>
                    </li>
                    <li class="list-group-item">
                      <h6 class="mb-0 text-dark font-weight-bold">Jenis Kelamin</h6>
                      <small>Laki-laki</small>
                    </li>
                    <li class="list-group-item">
                      <h6 class="mb-0 text-dark font-weight-bold">Agama</h6>
                      <small>Islam</small>
                    </li>
                    <li class="list-group-item">
                      <h6 class="mb-0 text-dark font-weight-bold">Alamat</h6>
                      <small>Kp. Pisangan RT 02/01 Desa Sarakan Kec. Sepatan Kab. Tangerang</small>
                    </li>
                    <li class="list-group-item">
                      <h6 class="mb-0 text-dark font-weight-bold">Email</h6>
                      <small>giannurwana19@gmail.com</small>
                    </li>
                    <li class="list-group-item">
                      <h6 class="mb-0 text-dark font-weight-bold">Telepon</h6>
                      <small>089662043519</small>
                    </li>
                  </ul>
                </div>
              </div>


            </div>

            <!-- hasil penilaian -->

            <div class="col-md-6">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Pengumuman Hasil Seleksi</h6>
                </div>
                <div class="card-body">
                  <div class="card">
                    <div class="text-center">
                      <div class="card-body">
                        <h5 class="card-title mb-3">Proses Penilaian</h5>
                        <div class="col-auto">
                          <i class="fas fa-spinner text-warning mb-3" style="font-size: 90px;"></i>
                        </div>
                        <p class="card-text">Terima kasih telah melakukan pendaftaran di SMA NEGERI 11 KAB TANGERANG. Pengumuman pada tanggal : </p>
                        <span class="badge badge-danger" style="font-size: 18px;">5 Oktober 2020</span>
                      </div>
                      <div class="card-footer">
                        <marquee>SMA NEGERI 11 KABUPATEN TANGERANG</marquee>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

            <div class="col-md-6">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Pengumuman Hasil Seleksi</h6>
                </div>
                <div class="card-body">
                  <div class="card">
                    <div class="text-center">
                      <div class="card-body">
                        <h5 class="card-title mb-3">Anda Lolos</h5>
                        <div class="col-auto">
                          <i class="fas fa-check-circle text-success mb-3" style="font-size: 90px;"></i>
                        </div>
                        <p class="card-text">Selamat! Anda lolos seleksi di SMA NEGERI 11 KABUPATEN TANGERANG. Lakukan daftar ulang pada tanggal : </p>
                        <span class="badge badge-danger" style="font-size: 18px;">20 Oktober 2020</span>
                      </div>
                      <div class="card-footer">
                        <marquee>SMA NEGERI 11 KABUPATEN TANGERANG</marquee>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

            <div class="col-md-6">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Pengumuman Hasil Seleksi</h6>
                </div>
                <div class="card-body">
                  <div class="card">
                    <div class="text-center">
                      <div class="card-body">
                        <h5 class="card-title mb-3">ANDA TIDAK LOLOS</h5>
                        <div class="col-auto">
                          <i class="fas fa-times text-danger mb-3" style="font-size: 90px;"></i>
                        </div>
                        <p class="card-text">Anda belum lolos. Terima kasih telah mengikuti seleksi dengan baik</p>
                      </div>
                      <div class="card-footer">
                        <marquee>SMA NEGERI 11 KABUPATEN TANGERANG</marquee>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

            <div class="col-md-6">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Persyaratan Daftar Ulang</h6>
                </div>
                <div class="card-body">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-text">Siswa yang telah lolos seleksi wajib melakukan daftar ulang dengan membawa berkas sebagai berikut : </p>
                      <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          1. FC AKTA 
                          <span class="badge badge-info badge-pill">3 lembar</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          2. FC Kartu Keluarga 
                          <span class="badge badge-info badge-pill">3 lembar</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          3. FC Nilai Ujian Nasional 
                          <span class="badge badge-info badge-pill">3 lembar</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          3. FC Nilai Ujian Sekolah 
                          <span class="badge badge-info badge-pill">3 lembar</span>
                        </li>
                      <p class="mt-2 text-danger font-weight-bold">* Daftar ulang pada tanggal 12 oktober 2020</p>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Aplikasi Pendaftaran Siswa 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda akan keluar dari aplikasi ini</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="../login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>