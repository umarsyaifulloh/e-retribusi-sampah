<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h2>Form Tambah Data Target</h2>
    </div>
    <form action="/pendapatan/save" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="Tahun" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pendapatan_tahun')) ? 'is-invalid' : ''; ?>" id="pendapatan_tahun" name="pendapatan_tahun" autofocus value="<?= old('pendapatan_tahun'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('pendapatan_tahun'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Besaran" class="col-sm-2 col-form-label">Besaran Target</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pendapatan_besar_target')) ? 'is-invalid' : ''; ?>" id="pendapatan_besar_target" name="pendapatan_besar_target" autofocus value="<?= old('pendapatan_besar_target'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('pendapatan_besar_target'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</section>
<?= $this->endSection(); ?>