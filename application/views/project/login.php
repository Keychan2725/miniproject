<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-secondary " id="headerNav">
        <div class="container-fluid">
            <!-- <a class="navbar-brand d-block d-lg-none" href="#">
                <img src="/static_files/images/logos/logo_2_white.png" height="80" />
            </a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page"
                            href="<?php echo base_url('project/home') ?>">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Products</a>
                    </li> -->
                    <!-- <li class="nav-item d-none d-lg-block">
                        <a class="nav-link mx-2" href="#">
                            <img src="/static_files/images/logos/logo_2_white.png" height="80" />
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mx-2 active"
                            href="<?php echo base_url('project/registrasi') ?>">Regristrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="<?php echo base_url('project/login') ?>">Login</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Contact us</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <section class=" h-100 ">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

                    <div class="card  shadow-lg ">
                        <div class="card-body  p-5 ">
                            <?php echo $this->session->flashdata('message'); ?>
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off"
                                action="<?php echo base_url(); ?>Project/aksi_login">


                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>
                                    " required autofocus>
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
                                    By logging in you are part of us </p>

                                <br>
                                <br>
                                <div class="r flex justify-content-between">

                                    <button type="submit" class="btn btn-lg btn-primary ms-auto">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0 bg-white">
                            <div class="text-center">
                                don't have an account ? <a href="<?php echo base_url('project/registrasi') ?>"
                                    class="text-dark">Registrasi</a>
                            </div>
                        </div>
                        <div class="text-center mt-5 text-muted">
                            Copyright &copy; 2023 &mdash; Your Company
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