<?php include "../config/autoload.php"; ?>
<?php include "editprofil_control.php"; ?>
<?php include "../template/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">EDIT PROFILE</h1>
  <form class="user" method="POST" action="<?= $base_url; ?>/siswa/editprofil.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" value="<?= $data_pendaftar['nama']; ?>" placeholder="nama anda">
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="tmpt_lahir">Tempat Lahir</label>
            <input type="text" name="tmpt_lahir" class="form-control" id="tmpt_lahir" value="<?= $data_pendaftar['tmpt_lahir']; ?>" placeholder="tempat lahir">
          </div>
          <div class="col-md-6">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $data_pendaftar['tgl_lahir']; ?>" placeholder="tanggal lahir">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="jk">Jenis Kelamin</label>
            <?php
            $laki = '';
            $perempuan = '';
            if ($data_pendaftar['jenis_kelamin'] == "L") {
              $laki = "checked";
            } else {
              $perempuan = "checked";
            }

            ?>
            <div class="form-check">
              <input type="radio" name="jenis_kelamin" class="form-check-input" id="laki" value="L" <?= $laki; ?>>
              <label for="laki">Laki-Laki</label>
            </div>
            <div class="form-check">
              <input type="radio" name="jenis_kelamin" class="form-check-input" id="perempuan" value="P" <?= $perempuan; ?>>
              <label for="perempuan">perempuan</label>
            </div>
          </div>
          <div class="col-md-6">
            <label for="agama">Agama</label>
            <select name="agama" id="agama" class="form-control">
              <option value="islam" <?php if ($data_pendaftar['agama'] == 'islam') {
                                      echo "selected";
                                    }  ?>>Islam</option>
              <option value="kristen" <?php if ($data_pendaftar['agama'] == 'kristen') {
                                        echo "selected";
                                      }  ?>>Kristen</option>
              <option value="katholik" <?php if ($data_pendaftar['agama'] == 'katholik') {
                                          echo "selected";
                                        }  ?>>Katholik</option>
              <option value="hindu" <?php if ($data_pendaftar['agama'] == 'hindu') {
                                      echo "selected";
                                    }  ?>>Hindu</option>
              <option value="buddha" <?php if ($data_pendaftar['agama'] == 'buddha') {
                                        echo "selected";
                                      }  ?>>Buddha</option>
              <option value="konghucu" <?php if ($data_pendaftar['agama'] == 'konghucu') {
                                          echo "selected";
                                        }  ?>>Konghucu</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="3"><?= $data_pendaftar['alamat'] ?></textarea>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $data_pendaftar['email'] ?>" placeholder="Email Aktif">
          </div>
          <div class="col-md-6">
            <label for="telepon">No. Telp</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="<?= $data_pendaftar['telepon'] ?>" placeholder="Nomor telepon">
          </div>
        </div>
        <!-- <div class="form-group row">
          <div class="col-md-6">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          </div>
          <div class="col-md-6">
            <label for="password2">Ulangi Password</label>
            <input type="password" name="password2" id="password2" class="form-control" placeholder="password">
          </div>
        </div> -->
      </div>
      <div class="col-md-4">
        <?php
        if ($data_pendaftar['foto'] == null) {
          $foto = '../assets/img/ava.png';
        } else {
          $foto = '../upload/' . $data_pendaftar['foto'];
        }
        ?>
        <img src="<?= $foto; ?>" alt="foto profil" class="img-fluid">
        <a href="hapus_control.php?id=<?=$data_pendaftar['id']; ?>" class="btn btn-danger btn-sm my-2" onclick="return confirm('yakin hapus foto?')" >Hapus foto</a>
        <input type="file" name="foto" class="form-control mt-2">
        <small>Input foto berukuran maksimal 1 MB</small>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-success mb-5" name="btn_simpan" value="simpan_profil">Ubah</button>
        <a href="dashboard.php" class="btn btn-danger mb-5">kembali</a>
      </div>
    </div>
  </form>

</div>
<!-- /.container-fluid -->

<?php include "../template/footer.php" ?>