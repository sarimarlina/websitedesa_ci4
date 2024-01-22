<?= $this->include('shared_page/header'); ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><b>Silahkan Login Dahulu</b></p>
              
                <?= $this->include('shared_page/alert'); ?>

                
                <?= csrf_field(); ?>
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control " autofocus required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                      
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control " required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                   
                </div>
                <div class="social-auth-links text-center">
                    <small class="text-danger">Belum punya akun ?, Silahkan <a href="/user/login/register">Registrasi</a></small>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="/assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/assets/dist/js/adminlte.min.js"></script>

</body>

</html>