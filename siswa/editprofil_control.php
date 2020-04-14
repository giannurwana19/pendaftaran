<?php 

$id_user = $_SESSION['id_users'];
$sql_pendaftar = "SELECT * FROM pendaftar WHERE users_id = '$id_user'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

if(mysqli_num_rows($result_pendaftar)){
  $data_pendaftar = mysqli_fetch_array($result_pendaftar);

  if(isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == "simpan_profil"){
    // echo "update";
    // die;
    $id_pendaftar = $data_pendaftar['id'];
    $nama = $_POST['nama'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir = date('Y-m-d', strtotime($_POST['tgl_lahir']));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    // cek gambar apakah diupload atau tidak
    if($_FILES['foto']['name'] != null){
      $ekstensi_boleh = ['png','jpg'];
      $nama_gambar = $_FILES['foto']['name'];
      $x = explode('.',$nama_gambar);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['foto']['size'];
      $file_tmp = $_FILES['foto']['tmp_name'];
      
      $ubah_nama = $nama . "." . $ekstensi;

      // echo $ubah_nama;
      // die;

      if(in_array($ekstensi, $ekstensi_boleh) === true){
        if($ukuran < 1000000){
          move_uploaded_file($file_tmp, '../upload/' . $ubah_nama);

          $sql_update_gambar = "UPDATE pendaftar SET foto = '$ubah_nama' WHERE id='$id_pendaftar'";
          $query_update = mysqli_query($koneksi, $sql_update_gambar);

          if($query_update){

          }else{
            echo "gagal upload"; die;
          }

        }else{
          echo "gambar terlalu besar"; die;
        }
      }else{
        echo "ekstensi tidak diperbolehkan"; die;
      }

    }

    $sql_update_profil = "UPDATE pendaftar SET
                                  nama = '$nama',
                                  tmpt_lahir = '$tmpt_lahir',
                                  tgl_lahir = '$tgl_lahir',
                                  jenis_kelamin = '$jenis_kelamin',
                                  agama = '$agama',
                                  alamat = '$alamat',
                                  email = '$email',
                                  telepon = '$telepon'
                          WHERE id = '$id_pendaftar'";
                          
    $query_update_profile = mysqli_query($koneksi, $sql_update_profil);

    if($query_update_profile){
      header("Location: dashboard.php");
    }else{
      echo "gagal update data";
      die;
    }

  }
}


?>