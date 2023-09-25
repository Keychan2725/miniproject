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

<body class="">

    <section class="vh-100" style="background-color: #eee;">

        <div class="container h-200">


            <nav class="navbar navbar-expand-lg navbar-dark p-3" id="headerNav">
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
                                <a class="nav-link mx-2 active text-dark text-dark" aria-current="page"
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

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> Login</p>

                                    <?php echo $this->session->flashdata('message'); ?>

                                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off"
                                        action="<?php echo base_url(); ?>Auth/aksi_login">



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" name="email"
                                                    class="form-control" value="<?php echo set_value('email'); ?>
                                    " required autofocus>
                                                <label class="form-label" for="form3Example3c">Your
                                                    Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" name="password"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>



                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <label for="form2Example3">
                                                don't have an account ? <a
                                                    href="<?php echo base_url('auth/registrasi') ?>"
                                                    class="text-dark">Registrasi</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                        </div>

                                    </form>
                                    <center>

                                        <p>
                                            Copyright &copy; 2023 &mdash; Your Company
                                        <p>@Chandra</p>
                                    </center>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://o.remove.bg/downloads/06b8ad00-bece-436a-8326-22bac2aa56e8/pngtree-cartoon-business-villain-ai-potted-plant-hat-png-image_3819223-removebg-preview.png"
                                        class="img-fluid" alt="Sample image">

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