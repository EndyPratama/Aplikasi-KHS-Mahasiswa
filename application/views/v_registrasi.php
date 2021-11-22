
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form Registrasi</title>
        <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url();?>Auth/registrasi" method="POST">

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" value="<?= set_value('nama'); ?>" />
                                                       <?= form_error('nama', ' <small class="text-danger">', '</small> '); ?>
                                                        <label for="nama">Nama</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="npm" name="npm" type="text" placeholder="NPM" value="<?= set_value('npm'); ?>" />
                                                       <?= form_error('npm', ' <small class="text-danger">', '</small> '); ?>
                                                        <label for="npm">NPM</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="email" name="email" type="text" placeholder="name@example.com" value="<?= set_value('email'); ?>" />
                                                       <?= form_error('email', ' <small class="text-danger">', '</small> '); ?>
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="username" name="username" type="text" placeholder="Create a username" value="<?= set_value('username'); ?>"  />
                                                        <?= form_error('username', ' <small class="text-danger">', '</small> '); ?>
                                                        <label for="username">Username</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="no_telp" name="no_telp" type="text" placeholder="Enter your No Hp" value="<?= set_value('no_telp'); ?>"/>
                                                        <?= form_error('no_telp', ' <small class="text-danger">', '</small> '); ?>
                                                        <label for="no_telp">No Hp</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="password1" name="password1" type="password" placeholder="Create a password" />
                                                        <?= form_error('password1', ' <small class="text-danger">', '</small> '); ?>
                                                        <label for="username">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="password2" name="password2" type="password" placeholder="Repeat a password" />
                                                        <?= form_error('password2', ' <small class="text-danger">', '</small> '); ?>
                                                        <label for="password">Repeat Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Registrasi</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo base_url("Auth") ?>">Sudah Punya Akun? Login</a></div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()?>assets/js/scripts.js"></script>
    </body>
</html>
