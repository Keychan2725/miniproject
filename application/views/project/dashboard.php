<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>
<style>
body {
    overflow-x: hidden;
}

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
    color: #999999;
}

.sidebar-nav>.sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media (min-width: 768px) {
    #wrapper {
        padding-left: 0;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        width: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}
</style>

<body>


    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav ">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url('project/dashboard') ?>" class="fs-2">
                        Dashboard </a>
                </li>


                <li>
                    <a href="<?php echo base_url('project/siswa') ?>" class="fs-5">

                        Data Siswa</a>
                </li>
                <li>
                    <a href="<?php echo base_url('project/guru') ?>" class="fs-5">Data Guru</a>
                </li>
                <li>
                    <a href="<?php echo base_url('project/kelas') ?>" class="fs-5">Data Kelas</a>
                </li>
                <li>
                    <a href="<?php echo base_url('project/mapel') ?>" class="fs-5">Data Mapel</a>
                </li>
                <li>
                    <a href="<?php echo base_url('project/user') ?>" class="fs-5">
                        Account</a>
                </li>

                <li>
                    <a href="<?php echo base_url('project/home') ?>" class="fs-5">Log Out</a>
                </li>
            </ul>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div>
        </div>
        <div id="page-content-wrapper ">
            <div class="container-fluid ">

                <div class="d-flex  p-5 ">
                    <div class="card bg-secondary text-white" style="width: 30rem;">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                svg {
                                    fill: #ffffff
                                }
                                </style>
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>


                            <hr>
                            <p class="card-text fs-4">Jumlah Siswa</p>
                            <p class=" fs-1"><?php echo $siswa ?> </p>
                            <a href="<?php echo base_url('project/siswa') ?>" class=" fs-5 btn btn-sm text-white">Data
                                Lengkap</a>
                        </div>
                    </div>
                    <div class="card bg-secondary text-white" style="width: 30rem;">

                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                svg {
                                    fill: #ffffff
                                }
                                </style>
                                <path
                                    d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z" />
                            </svg>

                            <hr>
                            <p class="card-text fs-4">Jumlah Guru</p>
                            <p class=" fs-1"> <?php echo $guru ?></p>
                            <a href="<?php echo base_url('project/guru') ?>" class=" fs-5 btn btn-sm text-white">Data
                                Lengkap</a>
                        </div>


                    </div>
                    <div class="card bg-secondary text-white" style="width: 30rem;">

                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M240.1 4.2c9.8-5.6 21.9-5.6 31.8 0l171.8 98.1L448 104l0 .9 47.9 27.4c12.6 7.2 18.8 22 15.1 36s-16.4 23.8-30.9 23.8H32c-14.5 0-27.2-9.8-30.9-23.8s2.5-28.8 15.1-36L64 104.9V104l4.4-1.6L240.1 4.2zM64 224h64V416h40V224h64V416h48V224h64V416h40V224h64V420.3c.6 .3 1.2 .7 1.8 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512H32c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1V224z" />
                            </svg>

                            <hr>
                            <p class="card-text fs-4">Jumlah Kelas</p>
                            <php class="card-text fs-1"><?php echo $kelas ?></p>
                                <a href="<?php echo base_url('project/kelas') ?>"
                                    class=" fs-5 btn btn-sm text-white">Data
                                    Lengkap</a>
                        </div>
                    </div>
                    <!-- /#page-content-wrapper -->

                </div>
                <!-- /#wrapper -->

                <div class="d-flex  p-5 ">
                    <div class="card bg-secondary text-white" style="width: 89%;">
                        <center>


                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
                                </svg>

                                <hr>
                                <p class="card-text fs-4">Jumlah Mapel</p>
                                <p class=" fs-1"><?php echo $mapel ?> </p>
                                <a href="<?php echo base_url('project/mapel') ?>"
                                    class=" fs-5 btn btn-sm text-white">Data
                                    Lengkap</a>
                            </div>
                        </center>
                    </div>

                </div>
                <!-- Menu Toggle Script -->
                <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
                </script>
</body>

</html>