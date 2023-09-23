<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body>
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



</body>

</html>