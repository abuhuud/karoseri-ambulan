<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center h-100">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang, Yuk Login !</h1>
                  </div>
                  <?= $this->session->flashdata('pesan'); ?>

                  <form method="post" action="<?= base_url('auth/login') ?>" class="user">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Input Username" name="username">
                      <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Input Password" name="password">
                      <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

                  </form>
                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


</body>

</html>