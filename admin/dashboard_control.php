<?php

$id_user = $_SESSION['id_users'];
$sql_pendaftar = "SELECT * FROM pendaftar WHERE users_id = '$id_user'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

if (mysqli_num_rows($result_pendaftar)) {
  $data_pendaftar = mysqli_fetch_array($result_pendaftar);
}

$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id AND nilai.status = 0");

// foreach($all_pendaftar as $p){
//   print_r($p['nama']);
// }

if(!$all_pendaftar){
  die("QUERY ERROR " . mysqli_error($koneksi));
}

// jumlah pendaftar
$jml_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar,nilai WHERE pendaftar.id = nilai.pendaftar_id");

if (!$jml_pendaftar) {
  die("QUERY ERROR " . mysqli_error($koneksi));
}

$jml_lolos = mysqli_query($koneksi, "SELECT * FROM pendaftar,nilai WHERE pendaftar.id = nilai.pendaftar_id AND nilai.status = 1 ");

if (!$jml_lolos) {
  die("QUERY ERROR " . mysqli_error($koneksi));
}


?>