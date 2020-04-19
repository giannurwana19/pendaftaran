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
    font-size: 12px;
    border: 1px solid black;
    border-collapse: collapse;
    padding : 5px;
  }
</style>

<img src="../assets/img/logo.png" style="float: left; margin-right: 20px; height: 60px;>

<div>
  <div style="font-size: 18px;">Data Pendaftaran Siswa Baru | Tahun 2019/2020</div>
  <div style="font-size: 20px;">SMA NEGERI 11 KABUPATEN TANGERANG</div>
  <div style="font-size: 12px;">Jl. Raya K.H. Hasyim Ashari Km. 1 Sepatan (15520) Kab. Tangerang Prov. Banten</div>
</div>

<hr>
<div style="font-size: 12px;">Tanggal Cetak : ' . date('d-m-Y') . ' </div>

<table width="100%">
  <thead>
    <tr>
      <th width="5%">No.</th>
      <th width="13%">Nama</th>
      <th width="20%">TTL</th>
      <th width="5%">JK</th>
      <th>Alamat</th>
      <th width="7%">Telepon</th>
      <th width="5%">Nilai</th>
      <th width="10%">Status</th>
    </tr>
  </thead>

  <tbody>';

    $all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, nilai.nilai_un, nilai.nilai_us, nilai.status FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id ORDER BY status, nama");

    $no = 1;
    while ($p = mysqli_fetch_assoc($all_pendaftar)) {
      if($p['status'] == 0){
        $status = "Baru";
      }elseif($p['status'] == 1){
        $status = "Lolos";
      }else{
        $status = "Tidak Lolos";
      }

      $html .= '
      <tr>
        <td align="center">' . $no++ . '</td>
        <td>' . $p['nama'] . '</td>
        <td>' . $p['tmpt_lahir'] . ', ' . date('d-m-Y', strtotime($p['tgl_lahir'])) . '</td>
        <td align="center">' . $p['jenis_kelamin'] . '</td>
        <td>' . $p['alamat'] . '</td>
        <td>' . $p['telepon'] . '</td>
        <td align="center">' . ($p['nilai_un'] + $p['nilai_us']) / 2 . '</td>
        <td align="center">' . $status . '</td>
      </tr>';

    }

    $html .= '
  </tbody>
</table>';







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


