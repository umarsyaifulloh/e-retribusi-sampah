<?= $this->extend('Layout/navbar') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>PENDAPATAN</h1>
    </div>
    <div class="section-header-button">
        <a href="/pendapatan/create" class="btn btn-primary">Tambah Target</a>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Pendapatan</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">TAHUN </th>
                            <th scope="col">BESARAN TARGET</th>
                            <th>ACTION</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($pendapatan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['pendapatan_tahun']; ?></td>
                                <td><?= $p['pendapatan_besar_target']; ?></td>
                                <td>
                                    <a href="/pendapatan/detail/ <?= $p['pendapatan_id']; ?>" class="btn btn-success "><i class="fas fa-info-circle"></i></a>
                                    <a href="/pendapatan/edit/ <?= $p['pendapatan_id']; ?>" class="btn btn-warning "><i class="far fa-edit"></i></a>
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