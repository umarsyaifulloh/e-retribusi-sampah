<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="section">
    <div class="section-header">
        <h1>Detail Petugas</h1>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><b>NAMA : </b><?= $petugas['petugas_nama']; ?></p>
                    <p class="card-text"><b>WILAYAH : </b><?= $petugas['petugas_wilayah']; ?></p>
                    <p class="card-text"><b>TELEPON : </b><?= $petugas['petugas_no']; ?></p>

                    <a href="/petugas/edit/<?= $petugas['petugas_id']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/petugas/delete/<?= $petugas['petugas_id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>
                    <br><br>
                    <a href="/petugas">Kembali ke daftar Petugas</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>