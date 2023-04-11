<?= $this->extend('Layout/navbar') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>PELANGGAN</h1>
    </div>
    <div class="section-header-button">
        <a href="/pelanggan/create" class="btn btn-primary">Tambah pelanggan</a>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Pelanggan</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">PROVINSI</th>
                            <th scope="col">KECAMATAN</th>
                            <th scope="col">KABUPATEN</th>
                            <th scope="col">TELEPON</th>
                            <th scope="col">KATEGORI</th>
                            <th>ACTION</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($pelanggan as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->pelanggan_nama ?></td>
                                <td><?= $value->pelanggan_alamat ?></td>
                                <td><?= $value->provinsi ?></td>
                                <td><?= $value->kecamatan ?></td>
                                <td><?= $value->kabupaten ?></td>
                                <td><?= $value->pelanggan_telp ?></td>
                                <td>
                                    <div class="badge badge-success"><?= $value->kategori_nama ?></div>
                                </td>
                                <td>
                                    <a href="/pelanggan/detail/<?= $value->pelanggan_id ?>" class="btn btn-success"><i class="fa fa-info-circle"></i></a>
                                    <a href="/pelanggan/edit/<?= $value->pelanggan_id ?>" class="btn btn-warning"><i class='far fa-edit'></i></a>
                                    <form action="/pelanggan/delete/ <?= $value->pelanggan_id ?>" method="post" class="d-inline">
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