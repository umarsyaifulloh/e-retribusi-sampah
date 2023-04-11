<?= $this->extend('Layout/navbar') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Retribusi</h1>
    </div>
    <div class="section-header-button">
        <a href="/kategori/create" class="btn btn-primary">Tambah Retribusi</a>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Retribusi</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">KATEGORI NAMA</th>
                            <th scope="col">BESARAN</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($kategori as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $k['kategori_nama']; ?></td>
                                <td><?= $k['kategori_besaran']; ?></td>
                                <td>
                                    <a href="/kategori/detail/ <?= $k['kategori_id']; ?>" class="btn btn-success "><i class="fas fa-info-circle"></i></a>
                                    <a href="/kategori/edit/ <?= $k['kategori_id']; ?>" class="btn btn-warning "><i class="far fa-edit"></i></a>
                                    <form action="/kategori/delete/<?= $k['kategori_id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');"><i class="fas fa-trash"></i>
                                            <Delete< /button>
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