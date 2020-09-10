<?php
function rupiah($angka)
{
    return number_format($angka, 0, '.', '.');
}
function persen($awal, $akhir)
{
    return ($awal * 100) / $akhir;
}
function lunas($angka){
    if($angka == 100){
        $lunas = 'Lunas';
    }else{
        $lunas = $angka . '%';
    }
    return $lunas;
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1><small class="text-muted">*mulai <?= date('d F Y', mktime(0, 0, 0, 8, 1, 2019)); ?> sampai sekarang</small>
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
                <form method="post" action="<?= base_url('admin/transaksi'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama Transaksi</label>
                            <input type="text" class="form-control" value="<?= set_value('nama'); ?>" placeholder="cth: LPG, Listrik, dll">
                            <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Transaksi</label>
                            <select class="form-control" id="jenis" name="jenis">
                                <option value="0">Pengeluaran</option>
                                <option value="1">Pemasukan</option>
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
                            <?= form_error('stok', '<small class="text-danger pl-2">', '</small>') ?>
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

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Progress</h6>
        </div>
        <div class="card-body">
            <?php
            foreach ($member as $m) :

                if (persen($m['kas'], $m['full_kas']) < 40) {
                    $bg = 'bg-danger';
                } else if (persen($m['kas'], $m['full_kas']) < 60) {
                    $bg = 'bg-warning';
                } else if (persen($m['kas'], $m['full_kas']) < 80) {
                    $bg = '';
                } else if (persen($m['kas'], $m['full_kas']) < 100) {
                    $bg = 'bg-info';
                } else if (persen($m['kas'], $m['full_kas']) >= 100) {
                    $bg = 'bg-success';
                }

            ?>
                <h4 class="small font-weight-bold"><?= $m['nama'] ?> <span class="float-right"><?= rupiah($m['kas']) ?>/<?= rupiah($m['full_kas']) ?></span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar <?= $bg ?>" role="progressbar" style="width: <?= persen($m['kas'], $m['full_kas']) ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?= lunas(floor(persen($m['kas'], $m['full_kas']))) ?></div>
                </div>
            <?php
            endforeach;
            ?>
            <!-- <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div> -->
        </div>
    </div>
    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->