<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data Petugas</h2>
            <form action="/kategori/update/<?= $kategori['kategori_id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="kategori_id=" value="<?= $kategori['kategori_id']; ?>">
                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kategori_nama')) ? 'is-invalid' : ''; ?>" id="kategori_nama" name="kategori_nama" autofocus value=<?= $kategori['kategori_nama']; ?>>
                        <div class=" invalid-feedback">
                            <?= $validation->getError('kategori_nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Besaran" class="col-sm-2 col-form-label">BESARAN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kategori_besaran')) ? 'is-invalid' : ''; ?>" id="kategori_besaran" name="kategori_besaran" autofocus value=<?= $kategori['kategori_besaran']; ?>>
                        <div class=" invalid-feedback">
                            <?= $validation->getError('kategori_besaran'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>