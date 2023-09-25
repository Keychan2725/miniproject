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

<body class="bg">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-200">
            <nav class="navbar navbar-expand-lg navbar-dark p-3 - " id="headerNav">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand d-block d-lg-none" href="#">
                <img src="/static_files/images/logos/logo_2_white.png" height="80" />
            </a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link mx-2 active text-dark" aria-current="page"
                                    href="<?php echo base_url('auth/home') ?>">Home</a>
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
                                <a class="nav-link mx-2 active text-dark"
                                    href="<?php echo base_url('auth/registrasi') ?>">Regristrasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2 active text-dark"
                                    href="<?php echo base_url('auth/login') ?>">Login</a>
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
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrasi</p>
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <form class="mx-1 mx-md-4  " method="POST"
                                        action="<?php echo base_url('auth/aksi_registrasi')  ?>"
                                        class="needs-validation" novalidate="" autocomplete="off">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="username"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example1c">Username</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" id="form3Example3c"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="password" id="form3Example4c"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>

                                        </div>
                                        <p class="form-text  text-muted mb-3">
                                            <b> Password lebih dari 8 angka</b>
                                        </p>

                                        <div class="form-check d-flex justify-content-center mb-5">

                                            <label class="" for="form2Example3">
                                                Already have an account? <a
                                                    href="<?php echo base_url('project/login') ?>"
                                                    class="text-dark">Login</a>
                                            </label>
                                        </div>
                                        <center>

                                            Copyright &copy; 2017-2021 &mdash; Your Company
                                            <br>
                                            <br>
                                            <p>@Chandra</p>
                                        </center>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://tse3.mm.bing.net/th?id=OIP.CpKSAtmoxQgrfryvSaD9VwHaEO&pid=Api&P=0&h=180"
                                        class="img-fluid">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>