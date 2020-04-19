<?php 


include "../config/koneksi.php";

$id = $_GET['id'];

$query = "UPDATE pendaftar SET foto = '' WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if(mysqli_affected_rows($koneksi) > 0){
  header('Location: editprofil.php');
}else{
  echo mysqli_error($koneksi);
}





?>