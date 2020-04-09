<?php

session_start();

include "config/koneksi.php";

if($_POST['btn_registrasi']){
  $nama = $_POST['nama'];
  $tmpt_lahir = date('Y-m-d', strtotime($_POST['tmpt_lahir']));
  $tgl_lahir = $_POST['tgl_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $password = md5($_POST['password']);
  $password2 = md5($_POST['password2']);

  if($password != $password2){
    echo "error : password tidak sama ";
    echo "<br><br> <button type='button' onclick='history.back();'>kembali</button>";
    die;
  }

  // insert table users
  $sql = "INSERT INTO users (nama, username, password, level) VALUES ('$nama','$email','$password','siswa')";
  $result = mysqli_query($koneksi, $sql);

  if($result){
    $data_user = mysqli_query($koneksi,"SELECT LAST_INSERT_ID()");
    while($u = mysqli_fetch_array($data_user)){
      $users_id = $u[0];
    }

    // insert table pendaftar
    $sql_pd = "INSERT INTO pendaftar (nama, tmpt_lahir, tgl_lahir, jenis_kelamin, agama, alamat, email, telepon, users_id ) VALUES ('$nama', '$tmpt_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama', '$alamat', '$email', '$telepon', '$users_id')";

    $result_pd = mysqli_query($koneksi, $sql_pd);
    if($result_pd){
      $_SESSION['pesan_regis'] = "Registrasi berhasil, Login menggunakan email dan password anda!";
      header('Location: login.php');
    }else{
      echo "error insert pendaftar : " . mysqli_error($koneksi);
      echo "<br><br> <button type='button' onclick='history.back();'>kembali</button>";
      die;
    }
    
  }else{
    // jika gagal
    echo "error insert user : " . mysqli_error($koneksi);
    echo "<br><br> <button type='button' onclick='history.back();'>kembali</button>";
    die;
  }

}else{
  echo "tidak ada";
}