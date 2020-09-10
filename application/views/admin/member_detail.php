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
        <a href="<?= base_url('admin/member_password/'.$user['id']) ?>" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm">Edit Password</a>
    </div>
    <!-- Button trigger modal -->
    <?= $this->session->flashdata('message'); ?>
    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title"><?= $user['nama'] ?>&nbsp;(<?= $user['username'] ?>)</h5>
            <br>
            <div class="row">
                <p class="col-sm-2">Password</p>
                <div class="col-sm-10">
                    <p class="card-text"><?= $user['password'] ?></p>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Kas terbayar</p>
                <div class="col-sm-10">
                    <p class="card-text">Rp. <?= rupiah($user['kas']); ?></p>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Kas yang harus dibayar</p>
                <div class="col-sm-10">
                    <p class="card-text">Rp. <?= rupiah($user['full_kas']); ?></p>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Kontrakan terbayar</p>
                <div class="col-sm-10">
                    <p class="card-text">Rp. <?= rupiah($user['kontrakan']); ?></p>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Kontrakan yang harus dibayar</p>
                <div class="col-sm-10">
                    <p class="card-text">Rp. <?= rupiah($user['full_kontrakan']); ?></p>
                </div>
            </div>


            <br>
            <div class="row">
                <p class="col-sm-2 text-muted">Tanggal Daftar</p>
                <div class="col-sm-10">
                    <small class="card-text text-muted">Member sejak <?= date('d F Y | H:i', $user['tanggal_buat']); ?></small>
                </div>
            </div>
            <br><br>
            
            <div class="text-center">
                <a href="<?= base_url() ?>admin/member" class="btn btn-sm btn-secondary">Kembali</a>
                <a href="<?= base_url('admin/member_edit/'.$user['id']) ?>" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm">Edit</a>
                <a href="<?= base_url() ?>admin/member" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm tombol-batal">Hapus</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->