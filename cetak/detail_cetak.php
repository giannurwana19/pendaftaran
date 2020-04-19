<?php

require "../config/koneksi.php";

require '../vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '
  <style>
  table,
  th,
  td {
    font-family: Arial, Helvetica, sans-serif;
    padding : 5px;
    vertical-align: top;
  }

  .judul{
    margin-bottom: 0;
    font-size: 16px;
    font-weight: bold;
  }
</style>

<img src="../assets/img/logo.png" style="float: left; margin-right: 20px; height: 60px;>

<div>
  <div style="font-size: 18px;">Data Pendaftaran Siswa Baru | Tahun 2019/2020</div>
  <div style="font-size: 20px;">SMA NEGERI 11 KABUPATEN TANGERANG</div>
  <div style="font-size: 12px;">Jl. Raya K.H. Hasyim Ashari Km. 1 Sepatan (15520) Kab. Tangerang Prov. Banten</div>
</div>

<hr>' . '<div style="font-size: 12px;">Tanggal Cetak : ' . date('d-m-Y') . ' </div>';



$id_pendaftar = $_GET['id'];

// echo $id_pendaftar;die;

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

if (!$result_nilai) {
  die("QUERY ERROR " . mysqli_error($koneksi));
}

if($data_pendaftar['foto'] != ''){
  $gambar = '../upload/' . $data_pendaftar['foto'];
}else{
  $gambar = '../assets/img/1.png';
}

if($data_pendaftar['jenis_kelamin'] == 'L'){
  $jk = 'Laki-laki';
}else{
  $jk = 'Perempuan';
}

if($data_nilai['status'] == 0){
  $status = "Pendaftaran Belum Dinilai";
}elseif($data_nilai['status'] == 1){
  $status = "LOLOS PENDAFTARAN";
}else{
  $status = "TIDAK LOLOS PENDAFTARAN";
}


$html .= '

<h3 class="judul">A. DETAIL PENDAFTAR</h3>
<table width="100%">
    <tr>
      <td width="20%">Nama</td>
      <td width="1%">:</td>
      <td width="60%">'. $data_pendaftar['nama'] .'</td>
      <td rowspan="7" align="right"><img src="' . $gambar . '" width="130px" height="150px" alt=""></td>
    </tr>
    <tr>
      <td>TTL</td>
      <td>:</td>
      <td>'. $data_pendaftar['tmpt_lahir'] . ', ' . date('d-m-Y', strtotime($data_pendaftar['tgl_lahir'])) . '</td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>'. $jk .'</td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td>'. $data_pendaftar['agama'] .'</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>'. $data_pendaftar['alamat'] .'</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td>'. $data_pendaftar['email'] .'</td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>:</td>
      <td>'. $data_pendaftar['telepon'] .'</td>
    </tr>
</table>


<h3 class="judul">B. DATA NILAI PENDAFTAR</h3>
<table>
  <tr>
    <td width="125px">Nilai UN</td>
    <td>:</td>
    <td>'. $data_nilai['nilai_un'] . '</td>
  </tr>
  <tr>
    <td>Nilai US</td>
    <td>:</td>
    <td>' . $data_nilai['nilai_us'] . '</td>
  </tr>
  <tr>
    <td>Rata-rata</td>
    <td>:</td>
    <td>' . number_format(($data_nilai['nilai_un'] + $data_nilai['nilai_us']) / 2, 2) . '</td>
  </tr>
  <tr>
    <td>Hasil</td>
    <td>:</td>
    <td>'. $status .'</td>
  </tr>
</table>


';










$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
// $dompdf->stream();

// agar membuka tab baru
$dompdf->stream("data pendaftar.pdf", ['Attachment'=>0]);

?>



