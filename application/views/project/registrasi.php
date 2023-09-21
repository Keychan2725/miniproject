<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Halaman Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="https://o.remove.bg/downloads/ca693045-48f8-4764-9294-314968e5f315/png-transparent-computer-icons-button-login-image-file-formats-logo-monochrome-removebg-preview.png"
                            alt="" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <?php echo $this->session->flashdata('message'); ?>
                            <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                            <form method="POST" action="<?php echo base_url('project/aksi_registrasi')  ?>"
                                class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Name is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <p class="form-text text-muted mb-3">
                                    By registering you agree with our terms and condition.
                                </p>

                                <div class="r flex justify-content-between">
                                    <a href="<?php echo base_url('project/home') ?>"
                                        class="btn btn-lg btn-danger">Kembali</a>

                                    <button type="submit" class="btn btn-lg btn-primary ms-auto">
                                        Registrasi
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0 bg-white">
                            <div class="text-center ">
                                Already have an account? <a href="<?php echo base_url('project/login') ?>"
                                    class="text-dark">Login</a>
                            </div>
                        </div>
                        <div class="text-center mt-5 text-muted ">
                            Copyright &copy; 2017-2021 &mdash; Your Company
                            <hr>
                            <p>@Chandra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>

</html>