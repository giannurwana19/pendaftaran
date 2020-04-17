<?php

$id_user = $_SESSION['id_users'];
$sql_pendaftar = "SELECT * FROM pendaftar WHERE users_id = '$id_user'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

if (mysqli_num_rows($result_pendaftar)) {
  $data_pendaftar = mysqli_fetch_array($result_pendaftar);
}

$all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, nilai.nilai_un, nilai.nilai_us, nilai.status FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id");

if (!$all_pendaftar) {
  die("QUERY ERROR " . mysqli_error($koneksi));
}

if(isset($_GET['action']) && $_GET['action'] == 'hapus'){
  $id_pendaftar = $_GET['id'];
  $query_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE id = $id_pendaftar");

  if(mysqli_num_rows($query_pendaftar)){
    $data_pendaftar = mysqli_fetch_assoc($query_pendaftar);
    $id_user = $data_pendaftar['users_id'];

    // hapus data pendaftar
    
    // hapus foto pendaftar
    unlink('../upload/' . $data_pendaftar['foto']);
    $sql_hapus_pendaftar = mysqli_query($koneksi, "DELETE FROM pendaftar WHERE id = $id_pendaftar");
    
    // hapus users
    $sql_hapus_user = mysqli_query($koneksi, "DELETE FROM users WHERE id = $id_user");

    if(!$sql_hapus_pendaftar || !$sql_hapus_user){
      die("query error" . mysqli_error($koneksi));
    }

    // jika berhasil, simpan session
    $_SESSION['pesan_sukses'] = "data berhasil dihapus";
    header("Location: pendaftaran.php");

  }else{
    die('data tidak ditemukan');
  }
}


?>