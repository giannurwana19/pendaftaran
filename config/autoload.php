<?php
session_start();

include "koneksi.php";

$base_url = "http://localhost/pendaftaran";

$uri_segment = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// var_dump($uri_segment);

if(isset($_SESSION['status']) && $_SESSION['status'] == 'login'){
  // lanjut 
  if($uri_segment[2] == $_SESSION['level']){
    // lanjut
  }else{
    echo "error : forbidden";
    echo "<br><br> <button type='button' onclick='history.back()'>kembali<?/button>";
    die;
  }

}else{
  $_SESSION['login_error'] = "Silahka Login untuk masuk kedalam sistem";
  header("Location: " . $base_url . "/login.php");
}

// echo $base_url;
// die;

?>
