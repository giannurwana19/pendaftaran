<?php 

// export ke excel
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=Data Pendaftar.xlsx');


include "../config/koneksi.php";


  $all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, nilai.nilai_un, nilai.nilai_us, nilai.status FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id ORDER BY status, nama");

  $html = '
  <table width="100%" border="1">
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
    </thead>';

  $no = 1;
  while ($p = mysqli_fetch_assoc($all_pendaftar)) {
    if ($p['status'] == 0) {
      $status = "Baru";
    } elseif ($p['status'] == 1) {
      $status = "Lolos";
    } else {
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

  echo $html;














?>