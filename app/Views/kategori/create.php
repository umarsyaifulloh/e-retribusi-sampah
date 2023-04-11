<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="section">
    <div class="section-header">
        <h1>Tambah Kategori</h1>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <form action="/kategori/save" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kategori_nama')) ? 'is-invalid' : ''; ?>" id="kategori_nama" name="kategori_nama" autofocus value="<?= old('kategori_nama'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('kategori_nama'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="besaran" class="col-sm-2 col-form-label">BESARAN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kategori_besaran')) ? 'is-invalid' : ''; ?>" id="kategori_besaran" name="kategori_besaran" autofocus value="<?= old('kategori_besaran'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('kategori_besaran'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kategori</button>
    </form>
</div>
<?= $this->endSection(); ?>