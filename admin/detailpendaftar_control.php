<?php 

$id_pendaftar = $_GET['id'];

// var_dump($id_pendaftar); die;

$sql_pendaftar = "SELECT * FROM pendaftar WHERE id = '$id_pendaftar'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);
$data_pendaftar = mysqli_fetch_assoc($result_pendaftar);


// cek hasil
if (!$result_pendaftar) {
  die("QUERY ERROR " . mysqli_error($koneksi));
}

  $sql_nilai = "SELECT * FROM nilai  WHERE pendaftar_id = '$id_pendaftar'";
  $result_nilai = mysqli_query($koneksi, $sql_nilai);
  $data_nilai = mysqli_fetch_assoc($result_nilai);

  if(!$result_nilai){
    die("QUERY ERROR " . mysqli_error($koneksi));
  }


  // ubah status
  if(isset($_POST['simpan']) && $_POST['simpan'] == 'simpan_nilai'){
    $nilai = $_POST['nilai'];
    $sql_nilai = "UPDATE nilai set status = $nilai WHERE pendaftar_id = $id_pendaftar";
    $query_nilai = mysqli_query($koneksi, $sql_nilai);

    if($query_nilai){
      $_SESSION['pesan_sukses'] = 'Status pendaftar berhasil diubah';
      header("Location: pendaftaran.php");
    }else{
      echo "gagal update status pendaftar";die;
    }
  } 

?>