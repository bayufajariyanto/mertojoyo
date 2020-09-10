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

function member_kas($member){
  $hasil = null;
  foreach($member as $m) :
    $hasil = $hasil + $m['kas'];
  endforeach;
  return $hasil;
}

function full_kas($member){
  $hasil = null;
  foreach($member as $t):
    $hasil = $hasil +$t['full_kas'];
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
function full_kontrakan($member){
  $hasil = null;
  foreach($member as $t):
    $hasil = $hasil +$t['full_kontrakan'];
  endforeach;
  return $hasil;
}
function persen($awal, $akhir)
{
    return floor(($awal * 100) / $akhir);
}
function rupiah($angka)
{
  return number_format($angka, 0, '.', '.');
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
  <?= $this->session->flashdata('message'); ?>
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kas (Sekarang)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= rupiah(total_kas($transaksi)) ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pemasukan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= rupiah(pemasukan($transaksi)) ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-arrow-alt-circle-up fa-2x text-gray-300"></i>
              <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengeluaran</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp <?= rupiah(pengeluaran($transaksi)) ?></div>
                </div>
                <!-- <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-arrow-alt-circle-down fa-2x text-gray-300"></i>
              <!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kontrakan (sekarang)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= rupiah(total_kontrakan($member)) ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Project Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Progress</h6>
    </div>
    <div class="card-body">
      <h4 class="small font-weight-bold">Kas <span class="float-right"><?= persen(member_kas($member),full_kas($member)) ?>%</span></h4>
      <div class="progress mb-4">
        <div class="progress-bar bg-info" role="progressbar" style="width: <?= persen(member_kas($member),full_kas($member)) ?>%" aria-valuenow="<?= persen(member_kas($member),full_kas($member)) ?>" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <h4 class="small font-weight-bold">Kontrakan <span class="float-right"><?= persen(total_kontrakan($member),full_kontrakan($member)) ?>%</span></h4>
      <div class="progress mb-4">
        <div class="progress-bar bg-success" role="progressbar" style="width: <?= persen(total_kontrakan($member),full_kontrakan($member)) ?>%" aria-valuenow="<?= persen(total_kontrakan($member),full_kontrakan($member)) ?>" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
  <!-- Pie Chart -->
  <!-- <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4"> -->
  <!-- Card Header - Dropdown -->
  <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Dropdown Header:</div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div> -->
  <!-- Card Body -->
  <!-- <div class="card-body">
        <div class="chart-pie pt-4 pb-2">
          <canvas id="myPieChart"></canvas>
        </div>
        <div class="mt-4 text-center small">
          <span class="mr-2">
            <i class="fas fa-circle text-primary"></i> Direct
          </span>
          <span class="mr-2">
            <i class="fas fa-circle text-success"></i> Social
          </span>
          <span class="mr-2">
            <i class="fas fa-circle text-info"></i> Referral
          </span>
        </div>
      </div>
    </div>
  </div> -->


  <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
<script type="text/javascript">
  // Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';
  // Pie Chart Example
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Direct", "Referral", "Social"],
      datasets: [{
        data: [50, 35, 15],
        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false
      },
      cutoutPercentage: 80,
    },
  });
</script>