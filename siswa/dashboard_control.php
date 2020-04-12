<?php 

$id_user = $_SESSION['id_users'];
$sql_pendaftar = "SELECT * FROM pendaftar WHERE users_id = '$id_user'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

if(mysqli_num_rows($result_pendaftar)){
  $data_pendaftar = mysqli_fetch_array($result_pendaftar);
  $id_pendaftar = $data_pendaftar['id'];

  $sql_nilai = "SELECT * FROM nilai WHERE pendaftar_id = '$id_pendaftar'";
  $result_nilai = mysqli_query($koneksi, $sql_nilai);
  if(mysqli_num_rows($result_nilai)){
    $data_nilai = mysqli_fetch_assoc($result_nilai);
    $status = $data_nilai['status'];

    // echo "status" . $status;
    // die;

  }else{
    // jika belum ada data nilai / status, maka kosong
    // echo "error" . mysqli_error($koneksi);
    // die;
  }

  // echo $id_pendaftar;


  if (isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == 'simpan_nilai') {
    $un = $_POST['nilai_un'];
    $us = $_POST['nilai_us'];

    $sql_insert_nilai = "INSERT INTO nilai (nilai_un, nilai_us, status, pendaftar_id)
                        VALUES ('$un', '$us', 0 , '$id_pendaftar' ) ";
    $query_insert_nilai = mysqli_query($koneksi, $sql_insert_nilai);

    if($query_insert_nilai){
      // berhasil
      header("Location: dashboard.php");
    }else{
      echo "error" . mysqli_error($koneksi);die;
    }


  }

}





// die;

?>