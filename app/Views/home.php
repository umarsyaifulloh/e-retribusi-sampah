<?= $this->extend('Layout/navbar') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Pelanggan</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right text-primary">Now</div>
                            <div class="media-title">Farhan A Mujib</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right">12m</div>
                            <div class="media-title">Ujang Maman</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right">17m</div>
                            <div class="media-title">Rizal Fakhri</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right">21m</div>
                            <div class="media-title">Alfa Zulkarnain</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                </ul>
                <div class="text-center pt-1 pb-1">
                    <a href="/users/detail/" class="btn btn-primary btn-lg btn-round">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>