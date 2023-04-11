<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="section">
    <div class="section-header">
        <h1>Form Ubah Data Petugas</h1>
    </div>
    <form action="/petugas/update/<?= $petugas['petugas_id']; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="petugas_id=" value="<?= $petugas['petugas_id']; ?>">
        <div class="row mb">
            <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('petugas_nama')) ? 'is-invalid' : ''; ?>" id="petugas_nama" name="petugas_nama" autofocus value=<?= $petugas['petugas_nama']; ?>>
                <div class=" invalid-feedback">
                    <?= $validation->getError('petugas_nama'); ?>
                </div>
            </div>
        </div>
        <div class="row mb">
            <label for="Telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('petugas_no')) ? 'is-invalid' : ''; ?>" id="petugas_no" name="petugas_no" autofocus value=<?= $petugas['petugas_no']; ?>>
                <div class=" invalid-feedback">
                    <?= $validation->getError('petugas_no'); ?>
                </div>
            </div>
        </div>
        <div class="row mb">
            <label for="Wilayah" class="col-sm-2 col-form-label">WILAYAH</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('petugas_wilayah')) ? 'is-invalid' : ''; ?>" id="petugas_wilayah" name="petugas_wilayah" autofocus value=<?= $petugas['petugas_wilayah']; ?>>
                <div class=" invalid-feedback">
                    <?= $validation->getError('petugas_wilayah'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ubah Data</button>
    </form>
</div>
<?= $this->endSection(); ?>