<?php
function rupiah($angka)
{
  return number_format($angka, 0, '.', '.');
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    <!-- <button type="button" class="mt-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahPesanan"><i class="fas fa-download fa-sm text-white-50"></i> Tambah <?= $title ?></button> -->
  </div>
  <!-- Button trigger modal -->

  <?= $this->session->flashdata('message'); ?>
  <!-- Modal -->
  <div class="modal fade" id="tambahPesanan" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah <?= $title ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?php

        ?>
        <form method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama">Nama Transaksi</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama'); ?>" placeholder="cth: LPG, Listrik, dll">
              <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="jenis">Jenis Transaksi</label>
              <select class="form-control" id="jenis" name="jenis">
                <option value="Spending">Pengeluaran</option>
                <option value="Income">Pemasukan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nominal">Nominal</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Rp. </div>
                </div>
                <input type="number" class="form-control" name="nominal" id="nominal" value="<?= set_value('nominal'); ?>">
              </div>
              <?= form_error('nominal', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data <?= $title ?></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="bg-info text-white">
              <th>#</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Nominal</th>
            </tr>
          </thead>
          <tfoot>
            <tr class="bg-success text-white">
              <th>#</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Nominal</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $no = 0;
            foreach ($transaksi as $t) :
              if ($t['arah'] == 'Spending') {
                $bg = 'table-warning';
                $txt = '';
              } else {
                $txt = 'text-success';
                $bg = 'table-info';
              }
              $no++
            ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $t['nama'] ?></td>
                <td><?= date('d F Y | H:i', $t['tanggal']) ?></td>
                <td class="<?= $txt ?>">Rp. <?= rupiah($t['nominal']) ?></td>
              </tr>
            <?php endforeach; ?>
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