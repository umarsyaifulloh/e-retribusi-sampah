<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h2>Form Tambah Data Pelanggan</h2>
    </div>
    <form action="/pelanggan/save" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pelanggan_nama')) ? 'is-invalid' : ''; ?>" id="pelanggan_nama" name="pelanggan_nama" autofocus value="<?= old('pelanggan_nama'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('pelanggan_nama'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pelanggan_alamat')) ? 'is-invalid' : ''; ?>" id="pelanggan_alamat" name="pelanggan_alamat" autofocus value="<?= old('pelanggan_alamat'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('pelanggan_alamat'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Provinsi" class="col-sm-2 col-form-label">Provinsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" id="provinsi" name="provinsi" autofocus value="<?= old('provinsi'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('provinsi'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" id="kecamatan" name="kecamatan" autofocus value="<?= old('kecamatan'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('kecamatan'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" id="kabupaten" name="kabupaten" autofocus value="<?= old('kabupaten'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('kabupaten'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pelanggan_telp')) ? 'is-invalid' : ''; ?>" id="pelanggan_telp" name="pelanggan_telp" autofocus value="<?= old('pelanggan_telp'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('pelanggan_telp'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-select <?= ($validation->hasError('pelanggan_kategori')) ? 'is-invalid' : ''; ?>" id="pelanggan_kategori" name="pelanggan_kategori" autofocus value="<?= old('pelanggan_kategori'); ?>">
                    <option selected>Pilih Sesuai Kategori</option>
                    <?php foreach ($kategori as $kategori) : ?>
                        <option value="<?= $kategori['kategori_id']; ?>"><?= $kategori['kategori_nama']; ?></option>
                    <?php endforeach ?>
                </select>
                <?= $validation->getError('pelanggan_kategori'); ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</section>
<?= $this->endSection(); ?>