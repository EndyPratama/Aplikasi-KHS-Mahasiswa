
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Reset Password</h3></div>
                                    <?php echo $this->session->flashdata('notif') ?>
                                    <h5 class="text-center font-weight-light my-4"> Silakan isi password baru anda</h5>
                                    <?php echo form_open('Lupa_password/reset_password/token/' . $token); ?>

                                    <div class="card-body">

                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" type="password"/>
                                                <?= form_error('password', ' <small class="text-danger">', '</small> '); ?>
                                                <label for="username">Password</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="passconf" type="password"/>
                                                <?= form_error('passconf', ' <small class="text-danger">', '</small> '); ?>
                                                <label for="username">Konfirmasi Password</label>
                                            </div>

                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                        <?php echo form_close(); ?>
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
                            <div class="text-muted">Copyright &copy; Sisfo 2021</div>
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
