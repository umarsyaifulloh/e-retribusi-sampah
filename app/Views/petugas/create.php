<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h2>Form Tambah Data Petugas</h2>
    </div>
    <form action="/petugas/save" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('petugas_nama')) ? 'is-invalid' : ''; ?>" id="petugas_nama" name="petugas_nama" autofocus value="<?= old('petugas_nama'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('petugas_nama'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('petugas_no')) ? 'is-invalid' : ''; ?>" id="petugas_no" name="petugas_no" autofocus value="<?= old('petugas_no'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('petugas_no'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Wilayah" class="col-sm-2 col-form-label">Wilayah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('petugas_wilayah')) ? 'is-invalid' : ''; ?>" id="petugas_wilayah" name="petugas_wilayah" autofocus value="<?= old('petugas_wilayah'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('petugas_wilayah'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</section>
<?= $this->endSection(); ?>