<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Form Ubah Data Users</h1>
    </div>
    <form action="/users/update/<?= $users['users_id']; ?>" method="post">
        <div class="card-body table-responsive">
            <?= csrf_field(); ?>
            <input type="hidden" name="users_id=" value="<?= $users['users_id']; ?>">
            <div class="row mb-3">
                <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('users_nama')) ? 'is-invalid' : ''; ?>" id="users_nama" name="users_nama" autofocus value=<?= $users['users_nama']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('users_nama'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('users_nip')) ? 'is-invalid' : ''; ?>" id="users_nip" name="users_nip" autofocus value=<?= $users['users_nip']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('users_nip'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Email" class="col-sm-2 col-form-label">EMAIL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('users_email')) ? 'is-invalid' : ''; ?>" id="users_email" name="users_email" autofocus value=<?= $users['users_email']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('users_email'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Password" class="col-sm-2 col-form-label">PASSWORD</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('users_password')) ? 'is-invalid' : ''; ?>" id="users_password" name="users_password" autofocus value=<?= $users['users_password']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('users_password'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('users_alamat')) ? 'is-invalid' : ''; ?>" id="users_alamat" name="users_alamat" autofocus value=<?= $users['users_alamat']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('users_alamat'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="telepon" class="col-sm-2 col-form-label">TELEPON</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('users_telp')) ? 'is-invalid' : ''; ?>" id="users_telp" name="users_telp" autofocus value=<?= $users['users_telp']; ?>>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('users_telp'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10 mt-2">
                    <input type="radio" id="users_status" name="users_status" value="Aktif"> Aktif
                    <input type="radio" id="users_status" name="users_status" value="Tidak Aktif"> Tidak Aktif
                </div>
            </div>
            <div class="row mb-3">
                <label for="role" class="col-sm-2 col-form-label">ROLE</label>
                <div class="col-sm-10">
                    <select class="selectpicker col-12" data-live-search="true" <?= ($validation->hasError('users_role')) ? 'is-invalid' : ''; ?> name="users_role">
                        <option value="">Pilih ROLE</option>
                        <?php foreach ($roles as $role) : ?>
                            <option value="<?= $role['role_id']; ?>" <?= $users['users_role'] == $role['role_id'] ? 'selected' : ''; ?>>
                                <?= $role['role_nama']; ?></option>
                        <?php endforeach ?>
                    </select>
                    <?= $validation->getError('users_role'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ubah Data</button>
        </div>
    </form>
</section>
<?= $this->endSection(); ?>