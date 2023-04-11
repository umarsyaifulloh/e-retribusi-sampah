<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="section">
    <div class="section-header">
        <h1>Detail Pendapatan</h1>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><b>TAHUN : </b><?= $pendapatan['pendapatan_tahun']; ?></p>
                    <p class="card-text"><b>BESARAN TARGET : </b><?= $pendapatan['pendapatan_besar_target']; ?></p>

                    <a href="/pendapatan/edit/<?= $pendapatan['pendapatan_id']; ?>" class="btn btn-warning">Edit</a>
                    <br><br>
                    <a href="/pendapatan">Kembali ke daftar Target</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>