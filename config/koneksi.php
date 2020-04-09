<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'pendaftaran'; 

$koneksi = mysqli_connect($host,$username,$password,$db);

// if($koneksi->connect_error){
//   echo 'koneksi database gagal' . mysqli_connect_error();
//   die();
// }else{
//   echo 'koneksi berhasil';
// }


?>