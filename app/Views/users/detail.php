<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Detail Users</h1>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><b>NAMA : </b><?= $users['users_nama']; ?></p>
                    <p class="card-text"><b>NIP : </b><?= $users['users_nip']; ?></p>
                    <p class="card-text"><b>EMAIL : </b><?= $users['users_email']; ?></p>
                    <p class="card-text"><b>PASSWORD : </b><?= $users['users_password']; ?></p>
                    <p class="card-text"><b>ALAMAT : </b><?= $users['users_alamat']; ?></p>
                    <p class="card-text"><b>TELEPON : </b><?= $users['users_telp']; ?></p>
                    <p class="card-text"><b>STATUS : </b><?= $users['users_status']; ?></p>
                    <p class="card-text"><b>ROLE NAMA : </b><?= $users['role_nama']; ?></p>
                    <a href="/users/edit/<?= $users['users_id']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/users/delete/<?= $users['users_id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>
                    <br><br>
                    <a href="/users">Kembali ke daftar users</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>