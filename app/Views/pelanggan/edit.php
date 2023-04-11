<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Form Ubah Data pelanggan</h1>
    </div>
    <form action="/pelanggan/update/<?= $pelanggan['pelanggan_id']; ?>" method="post">
        <div class="card-body table-responsive">
            <?= csrf_field(); ?>
            <input type="hidden" name="pelanggan_id=" value="<?= $pelanggan['pelanggan_id']; ?>">
            <div class="row mb-3">
                <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('pelanggan_nama')) ? 'is-invalid' : ''; ?>" id="pelanggan_nama" name="pelanggan_nama" autofocus value=<?= $pelanggan['pelanggan_nama']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('pelanggan_nama'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('pelanggan_alamat')) ? 'is-invalid' : ''; ?>" id="pelanggan_alamat" name="pelanggan_alamat" autofocus value=<?= $pelanggan['pelanggan_alamat']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('pelanggan_alamat'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Provinsi" class="col-sm-2 col-form-label">PROVINSI</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" id="provinsi" name="provinsi" autofocus value=<?= $pelanggan['provinsi']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('provinsi'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Kecamatan" class="col-sm-2 col-form-label">KECAMATAN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" id="kecamatan" name="kecamatan" autofocus value=<?= $pelanggan['kecamatan']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('kecamatan'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Kabupaten" class="col-sm-2 col-form-label">KABUPATEN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" id="kabupaten" name="kabupaten" autofocus value=<?= $pelanggan['kabupaten']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('kabupaten'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="telepon" class="col-sm-2 col-form-label">TELEPON</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('pelanggan_telp')) ? 'is-invalid' : ''; ?>" id="pelanggan_telp" name="pelanggan_telp" autofocus value=<?= $pelanggan['pelanggan_telp']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('pelanggan_telp'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Kategori" class="col-sm-2 col-form-label">KATEGORI</label>
                <div class="col-sm-10">
                    <select class="selectpicker col-12" data-live-search="true" <?= ($validation->hasError('pelanggan_kategori')) ? 'is-invalid' : ''; ?> name="pelanggan_kategori">
                        <option value="">Pilih Sesuai Kategori</option>
                        <?php foreach ($kategori as $kategori) : ?>
                            <option value="<?= $kategori['kategori_id']; ?>" <?= $pelanggan['pelanggan_kategori'] == $kategori['kategori_id'] ? 'selected' : ''; ?>>
                                <?= $kategori['kategori_nama']; ?></option>
                        <?php endforeach ?>
                    </select>
                    <?= $validation->getError('pelanggan_role'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ubah Data</button>
        </div>
    </form>
</section>
<?= $this->endSection(); ?>