<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>
<style>
.bg {
    background-image: url('https://img.lovepik.com/original_origin_pic/18/11/05/c44c14360a8271a43cce9efe315861fb.jpg_wh860.jpg');
    background-size: cover;
}
</style>

<body class="bg ">
    <div class="background-image-black  align-item-center">

        <nav class="navbar navbar-expand-lg navbar-dark p-3  " id="headerNav">
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
                            <a class="nav-link mx-2 active" aria-current="page"
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
                            <a class="nav-link mx-2 active"
                                href="<?php echo base_url('auth/registrasi') ?>">Regristrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="<?php echo base_url('auth/login') ?>">Login</a>
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



        <div class="text-center text-white ">

            <br>
            <br>
            <br>
            <br>
            <br>
            <h1>Welcome to Website Sistem Sekolah</h1>
            <br>
            <h3>Ini merupakan Website resmi sekolah yang berisikan data data sekolah</h3>
            <br>
            <br>

        </div>





</body>

</html>