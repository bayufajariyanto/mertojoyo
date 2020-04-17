<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    <!-- <button type="button" class="mt-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahMember"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Member</button> -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
      Launch static backdrop modal
    </button> -->
  </div>
  <!-- Button trigger modal -->
  <?= $this->session->flashdata('message'); ?>

  <div class="card w-100">
    <div class="card-body">
      <h5 class="card-title">Data Member</h5>
      <form method="post">
        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
            <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>">
            <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="tkas" class="col-sm-2 col-form-label">Kas terbayar</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="tkas" name="tkas" value="<?= $user['kas'] ?>">
            <?= form_error('tkas', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="kas" class="col-sm-2 col-form-label">Kas (Batas Akhir)</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="kas" name="kas" value="<?= $user['full_kas'] ?>">
            <?= form_error('kas', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="tkontrakan" class="col-sm-2 col-form-label">Kontrakan terbayar</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="tkontrakan" name="tkontrakan" value="<?= $user['kontrakan'] ?>">
            <?= form_error('tkontrakan', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="kontrakan" class="col-sm-2 col-form-label">Kontrakan (1 Tahun)</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="kontrakan" name="kontrakan" value="<?= $user['full_kontrakan'] ?>">
            <?= form_error('kontrakan', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
        </div>

        <a href="<?= base_url('admin/member') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->