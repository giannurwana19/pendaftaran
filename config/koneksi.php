<?php 


$koneksi = mysqli_connect('localhost','root','','pendaftaran');

if($koneksi->connect_error){
  echo 'koneksi database gagal' . mysqli_connect_error();
}else{
  echo 'koneksi berhasil';
}


?>