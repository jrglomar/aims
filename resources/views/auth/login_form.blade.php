<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><img src="{{ asset('/images/schoolLogo.png') }}" width="100" height="100">
            </a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Assets Information Management System</p>

            <form id="loginForm">
                <div class="input-group mb-3 col-12">
                    <input type="email" name="email" id="name" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3 col-12">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="shadow-none btn btn-primary btn-block" id="create_btn"
                            tabindex="4">
                            Login <i class="fas fa-sign-in-alt"></i>
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="row">
                <div class="col-12 d-flex justify-content-center pt-2">
                    <a href="/register" class="text-center">New here? Click here to register</a>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
