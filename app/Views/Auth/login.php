<div id="app">
  <section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="login-brand">
            <!-- <h5>DINAS LINGKUNGAN HIDUP</h5> -->
            <!-- <p class="lead"></p>
						<h6>
							<p>Kota Tegal</p>
						</h6> -->
          </div>
          <?= $this->session->flashdata('pesan'); ?>
          <div class="card card-primary">
            <div class="card-header">
              <h4>Login</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="#" action="<?= base_url('auth'); ?>">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" tabindex="1" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                      <a href="<?= base_url('auth/forgotPassword') ?>" class="text-small">
                        Forgot Password?
                      </a>
                    </div>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2">
                  <input type="checkbox" style="margin-top: 10px;" onclick="myFunction()"> Lihat Password
                  <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="simple-footer">
            Copyright &copy; Magangers Wonogiri <?= date('Y'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>