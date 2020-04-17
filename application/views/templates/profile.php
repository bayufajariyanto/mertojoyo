<?php
if ($this->session->userdata('role_id') == 2) {
    $sesi = 'member';
} else if ($this->session->userdata('role_id') == 1) {
    $sesi = 'admin';
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
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="<?= base_url($sesi . '/member_password/' . $user['id']) ?>" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm">Edit Password</a>
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
                <p class="col-sm-2">Kas</p>
                <div class="col-sm-10">
                    <p class="card-text">Rp <?= rupiah($user['kas']) ?></p>
                </div>
            </div>
            <div class="row">
                <p class="col-sm-2">Kontrakan</p>
                <div class="col-sm-10">
                    <p class="card-text">Rp <?= rupiah($user['kontrakan']) ?></p>
                </div>
            </div>


            <br>
            <div class="row">
                <p class="col-sm-2 text-muted">Tanggal Daftar</p>
                <div class="col-sm-10">
                    <p class="card-text text-muted">Member sejak <?= date('d F Y, H:i', $user['tanggal_buat']); ?></p>
                </div>
            </div>
            <br>
            <a href="<?= base_url($sesi) ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->