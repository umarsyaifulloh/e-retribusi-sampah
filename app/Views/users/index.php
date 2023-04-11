<?= $this->extend('Layout/navbar') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Users</h1>
    </div>
    <div class="section-header-button">
        <a href="/users/create" class="btn btn-primary">Tambah Users</a>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Users</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NIP</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">TELEPON</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">STATUS</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->users_nama ?></td>
                                <td><?= $value->users_nip ?></td>
                                <td><?= $value->users_email ?></td>
                                <td><?= $value->users_alamat ?></td>
                                <td><?= $value->users_telp ?></td>
                                <td><?= $value->role_nama ?></td>
                                <td>
                                    <div class="badge badge-success"><?= $value->users_status ?></div>
                                </td>
                                <td>
                                    <a href="/users/detail/<?= $value->users_id ?>" class="btn btn-success"><i class="fa fa-info-circle"></i></a>
                                    <a href="/users/edit/<?= $value->users_id ?>" class="btn btn-warning"><i class='far fa-edit'></i></a>
                                    <form action="/users/delete/ <?= $value->users_id ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>