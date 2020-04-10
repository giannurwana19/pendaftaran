<?php

session_start();
include "config/koneksi.php";

if(isset($_POST['btn_login'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql_user = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
  $result = mysqli_query($koneksi, $sql_user);

  if(mysqli_num_rows($result) > 0){
    // jika data ada, simpan data user ke dalam session
    while($data_user = mysqli_fetch_array($result)){
      $_SESSION['status'] = 'login';
      $_SESSION['nama'] = $data_user['nama'];
      $_SESSION['level'] = $data_user['level'];
      
      if($data_user['level'] == 'admin') {
        header("Location: admin/dashboard.php");
      }else{
        header('Location: siswa/dashboard.php');
      }

    }
  }else{
    // jika tidak, tampilkan pesan error
    $_SESSION['login_error'] = "Username atau Password salah";
    header('Location: login.php');
  }

}else{
  header('Location: login.php');
}