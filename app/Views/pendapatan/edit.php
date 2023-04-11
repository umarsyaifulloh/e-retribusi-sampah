<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="section">
    <div class="section-header">
        <h1>Form Ubah Data Petugas</h1>
    </div>
    <form action="/pendapatan/update/<?= $pendapatan['pendapatan_id']; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="pendapatan_id=" value="<?= $pendapatan['pendapatan_id']; ?>">
        <div class="row mb">
            <label for="Tahun" class="col-sm-2 col-form-label">TAHUN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pendapatan_tahun')) ? 'is-invalid' : ''; ?>" id="pendapatan_tahun" name="pendapatan_tahun" autofocus value=<?= $pendapatan['pendapatan_tahun']; ?>>
                <div class=" invalid-feedback">
                    <?= $validation->getError('pendapatan_tahun'); ?>
                </div>
            </div>
        </div>
        <div class="row mb">
            <label for="Target" class="col-sm-2 col-form-label">BESARAN TARGET</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pendapatan_besar_target')) ? 'is-invalid' : ''; ?>" id="pendapatan_besar_target" name="pendapatan_besar_target" autofocus value=<?= $pendapatan['pendapatan_besar_target']; ?>>
                <div class=" invalid-feedback">
                    <?= $validation->getError('pendapatan_besar_target'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
<?= $this->endSection(); ?>