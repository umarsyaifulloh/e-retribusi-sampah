<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Detail Pelanggan</h1>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><b>NAMA : </b><?= $pelanggan['pelanggan_nama']; ?></p>
                    <p class="card-text"><b>ALAMAT : </b><?= $pelanggan['pelanggan_alamat']; ?></p>
                    <p class="card-text"><b>PROVINSI : </b><?= $pelanggan['provinsi']; ?></p>
                    <p class="card-text"><b>KECAMATAN : </b><?= $pelanggan['kecamatan']; ?></p>
                    <p class="card-text"><b>KABUPATEN : </b><?= $pelanggan['kabupaten']; ?></p>
                    <p class="card-text"><b>TELEPON : </b><?= $pelanggan['pelanggan_telp']; ?></p>
                    <p class="card-text"><b>KATEGORI NAMA : </b><?= $pelanggan['kategori_nama']; ?></p>
                    <a href="/pelanggan/edit/<?= $pelanggan['pelanggan_id']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/pelanggan/delete/<?= $pelanggan['pelanggan_id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>
                    <br><br>
                    <a href="/pelanggan">Kembali ke daftar pelanggan</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>