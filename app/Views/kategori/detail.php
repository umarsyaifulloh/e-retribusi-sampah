<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="section">
    <div class="section-header">
        <h2>Detail Kategori</h2>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><b>NAMA : </b><?= $kategori['kategori_nama']; ?></p>
                    <p class="card-text"><b>BESARAN : </b><?= $kategori['kategori_besaran']; ?></p>
                    <a href="/kategori/edit/<?= $kategori['kategori_id']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/kategori/delete/<?= $kategori['kategori_id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>
                    <br><br>
                    <a href="/kategori">Kembali ke daftar Kategori</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>