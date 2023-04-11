<?= $this->extend('Layout/navbar') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Petugas</h1>
    </div>
    <div class="section-header-button">
        <a href="/petugas/create" class="btn btn-primary">Tambah Petugas</a>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Petugas</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>NO</th>
                            <th>Nama Petugas</th>
                            <th>Telepon Petugas</th>
                            <th>Wilayah Petugas</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($petugas as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['petugas_nama']; ?></td>
                                <td><?= $p['petugas_no']; ?></td>
                                <td><?= $p['petugas_wilayah']; ?></td>
                                <td>
                                    <a href="/petugas/detail/ <?= $p['petugas_id']; ?>" class="btn btn-success "><i class="fas fa-info-circle"></i></a>
                                    <a href="/petugas/edit/ <?= $p['petugas_id']; ?>" class="btn btn-warning "><i class="far fa-edit"></i></a>
                                    <a href="/petugas/delete/<?= $p['petugas_id']; ?>" class="btn btn-danger "><i class="fas fa-trash"></i></a>
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