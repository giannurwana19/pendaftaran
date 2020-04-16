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


?>