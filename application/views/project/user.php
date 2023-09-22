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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="/assets-img-fontawesome/js/fontawesome.js"></script>
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
                    <a href="<?php echo base_url('project/siswa') ?>" class="fs-5">Data Siswa</a>
                </li>

                <li>
                    <a href="<?php echo base_url('project/guru') ?>" class="fs-5">Data Guru</a>
                </li>
                <li>
                    <a href="<?php echo base_url(('project/kelas')) ?>" class="fs-5">Data Kelas</a>
                </li>
                <li>
                    <a href="<?php echo base_url('project/mapel') ?>" class="fs-5">Data Mapel</a>
                </li>
                <li>
                    <a href="<?php echo base_url('project/user') ?>" class="fs-5">Account</a>
                </li>
                <li>
                    <a href="#" class="fs-5">Settings</a>
                </li>

                <li>
                    <a href="<?php echo base_url('project/home') ?>" class="fs-5">Log Out</a>
                </li>
            </ul>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <i class="fa-solid fa-user"></i>

                <?php
$no=0;
foreach ($user as $row) : $no++?>
                <div class="card mb-3" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo  $row->image?>" class="container rounded-circle mx-auto" widht="150"
                                height="160">
                            <br>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <p>Username</p>
                                        <h4 class="card-title"><?php ?><?php echo  $row->username ?></h4>
                                    </li>
                                    <hr>
                                    <li>
                                        <p>Email</p>
                                        <h5><?php echo $row->email ?></h5>
                                    </li>
                                    <hr>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small>
                                    </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex container">
                        <a type="submit" class="btn btn-sm btn-primary"
                            href="<?php echo base_url('project/update_profil') ?>">Edit Foto
                            Profile</a>
                        <button type="submit" class="btn btn-sm btn-danger" onclick="profil(id)">Edit Profile</button>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

    </div>
    <br>

    </div>

    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- <script>
if (edit(id) === true) {
    confirm('<input type="image" src="" alt="">')
}else{

} -->
    </script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>