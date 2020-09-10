<?php
function total_kas($transaksi)
{
  $hasil = null;
  foreach ($transaksi as $t) :
    if ($t['arah'] == 'Income') {
      $hasil = $hasil + $t['nominal'];
    } else {
      $hasil = $hasil - $t['nominal'];
    }
  endforeach;
  return $hasil;
}
function pemasukan($transaksi)
{
  $hasil = null;
  foreach ($transaksi as $t) :
    if ($t['arah'] == 'Income') {
      $hasil = $hasil + $t['nominal'];
    }
  endforeach;
  return $hasil;
}
function pengeluaran($transaksi)
{
  $hasil = null;
  foreach ($transaksi as $t) :
    if ($t['arah'] == 'Spending') {
      $hasil = $hasil + $t['nominal'];
    }
  endforeach;
  return $hasil;
}
function total_kontrakan($member)
{
  $hasil = null;
  foreach ($member as $m) :
    $hasil = $hasil + $m['kontrakan'];
  endforeach;
  return $hasil;
}
function rupiah($angka)
{
  return number_format($angka, 0, '.', '.');
}
for ($i = 0; $i < 3; $i++) :
  $data[$i] = file_get_contents('https://api.banghasan.com/sholat/format/json/jadwal/kota/777/tanggal/' . date("o-m-d", time() + (60 * 60 * 24 * $i)));
  $jadwal[$i] = json_decode($data[$i], true);
  $jadwal[$i] = $jadwal[$i]['jadwal']['data'];
  $arr[$i] = date("o-m-d", time() + (60 * 60 * 24 * $i));
  $array[$i] = date("l", strtotime($arr[$i]));
  $arr[$i] = date("j M Y", strtotime($arr[$i]));
// var_dump($array[$i]);
endfor;
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Sholat</h6>
    </div>
    <div class="card-body">
      <p class="text-muted">3 Hari ke depan area Kota Pasuruan (WIB)</p>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Tanggal</th>
              <th>Imsak</th>
              <th>Subuh</th>
              <th>Terbit</th>
              <th>Dhuha</th>
              <th>Dzuhur</th>
              <th>Ashar</th>
              <th>Maghrib</th>
              <th>Isya</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Tanggal</th>
              <th>Imsak</th>
              <th>Subuh</th>
              <th>Terbit</th>
              <th>Dhuha</th>
              <th>Dzuhur</th>
              <th>Ashar</th>
              <th>Maghrib</th>
              <th>Isya</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $no = 0;
            for ($i = 0; $i < 3; $i++) :
              $no++;
            ?>
              <tr>
                <td scope="row">
                  <?= $no ?>
                </td>
                <!-- <td><?= $array[$i]; ?>, <?= $arr[$i]; ?></td> -->
                <td><?= $jadwal[$i]['tanggal']; ?></td>
                <td><?= $jadwal[$i]['imsak']; ?></td>
                <td><?= $jadwal[$i]['subuh']; ?></td>
                <td><?= $jadwal[$i]['terbit']; ?></td>
                <td><?= $jadwal[$i]['dhuha']; ?></td>
                <td><?= $jadwal[$i]['dzuhur']; ?></td>
                <td><?= $jadwal[$i]['ashar']; ?></td>
                <td><?= $jadwal[$i]['maghrib']; ?></td>
                <td><?= $jadwal[$i]['isya']; ?></td>
              </tr>
            <?php
            endfor;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->