<?php
if ($peminjaman['selesai'] == 0) {
  $status = 'Berjalan';
} else if ($peminjaman['selesai'] == 1) {
  $status = 'Selesai';
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail <?= $title ?></h1>
  </div>
  <!-- Button trigger modal -->
  <?= $this->session->flashdata('message'); ?>

  <div class="card w-100">
    <div class="card-body">
      <br>
      <div class="row">
        <p class="col-sm-2">Kode Transaksi</p>
        <div class="col-sm">
          <h5 class="card-title"><?= $peminjaman['kode_transaksi'] ?></h5>
        </div>
      </div>
      <div class="row">
        <p class="col-sm-2">Nama</p>
        <div class="col-sm">
          <p class="card-text"><?= $nama['nama'] ?></p>
        </div>
      </div>
      <div class="row">
        <p class="col-sm-2">Tanggal Order</p>
        <div class="col-sm">
          <p class="card-text"><?= date('d F Y, H:i', $peminjaman['tanggal_order']) ?></p>
        </div>
      </div>
      <div class="row">
        <p class="col-sm-2">Total Pembayaran</p>
        <div class="col-sm">
          <p class="card-text">Rp. <?= $peminjaman['total'] ?></p>
        </div>
      </div>
      <div class="row">
        <p class="col-sm-2">Tanggal Pembayaran</p>
        <div class="col-sm">
          <p class="card-text"><?= date('d F Y, H:i', $peminjaman['tanggal_bayar']) ?></p>
        </div>
      </div>
      <div class="row">
        <p class="col-sm-2">Status Transaksi</p>
        <div class="col-sm">
          <p class="card-text"><?= $status ?></p>
        </div>
      </div>
      <br><br>
      <div class="text-center">
        <a href="<?= base_url('admin/peminjaman') ?>" class="d-sm-inline-block btn btn-sm btn-secondary shadow-sm">Kembali</a>
        <button type="submit" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">Selesai</button>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->