<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/users/create" class="btn btn-primary mt-3">Tambah Users</a>
            <h1 class="mt-2">
                Daftar Users
            </h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NIP</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">TELEPON</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">ROLE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $u['users_nama']; ?></td>
                            <td><?= $u['users_nip']; ?></td>
                            <td><?= $u['users_email']; ?></td>
                            <td><?= $u['users_password']; ?></td>
                            <td><?= $u['users_alamat']; ?></td>
                            <td><?= $u['users_telp']; ?></td>
                            <td><?= $u['users_status']; ?></td>
                            <td><?= $u['users_role']; ?></td>
                            <td>
                                <a href="/users/detail/<?= $u['users_id']; ?>" class="btn btn-success">detail</a>
                                <a href="/users/edit/<?= $u['users_id']; ?>" class="btn btn-warning">edit</a>
                                <form action="/users/delete/<?= $u['users_id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>