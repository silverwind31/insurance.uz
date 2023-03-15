<?php require_once "sections/login_header.php"?>

<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <?php if(!empty($errorMessage)): ?>
                <div class="alert alert-danger text-center">
                    <?=$errorMessage;?>
                </div>
            <?php endif; ?>
            <p class="login-box-msg">Tizimga kiring</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Eslab qolish
                            </label>
                        </div>
                    </div>
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block">Tizimga kirish</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<?php require_once "sections/login_footer.php"?>


