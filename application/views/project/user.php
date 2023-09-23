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
                    <a href="<?php echo base_url('project/home') ?>" class="fs-5">Log Out</a>
                </li>
            </ul>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <i class="fa-solid fa-user"></i>

                <main class="d-flex flex-nowrap">
                    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                        <div class="card p-4">
                            <div class=" image d-flex flex-column justify-content-center align-items-center">
                                <?php foreach ($admin as $row): ?>
                                <button class="border border-0 btn btn-link" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <?php if (!empty($row-> image)): ?>
                                    <img class="rounded-circle" height="150" width="150"
                                        src="<?php echo base64_decode($row->image);?>">
                                    <?php else: ?>
                                    <img class="rounded-circle" height="150" width="150"
                                        src="https://slabsoft.com/wp-content/uploads/2022/05/pp-wa-kosong-default.jpg" />
                                    <?php endif;?>
                                </button>

                                <span class="name mt-3 fs-3"><?php echo $row->username ?></span>
                                <span class="idd fs-5"><?php echo $row->email ?></span>


                                <div class=" d-flex mt-2 gap-2"> <a
                                        href="<?php echo base_url('profile/ubah_password/').$this->session->userdata('id')?>"
                                        class="btn btn-dark btn">Ubah Password</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Foto Profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="container w-75 m p-3">
                            <form method="post" action="<?php echo base_url('project/upload_image'); ?>"
                                enctype="multipart/form-data" class="row">
                                <div class="mb-3 col-12">
                                    <label for="nama" class="form-label">Foto:</label>
                                    <input type="hidden" class="form-control" id="id" name="id"
                                        value="<?php echo $this->session->userdata('id'); ?>">
                                    <input type="hidden" name="base64_image" id="base64_image">
                                    <input class="form-control" type="file" name="userfile" id="userfile"
                                        accept="image/*">
                                </div>
                                <div class="col-12 text-end">
                                    <input type="submit" class="btn btn-primary px-3" name="submit"
                                        value="Ubah Foto"></input>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="<?php echo base_url('Project/hapus_image'); ?>">Hapus
                                Foto</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
            <script>
            document.getElementById('userfile').addEventListener('change', function() {
                const fileInput = document.getElementById('userfile');
                const base64Input = document.getElementById('base64_image');

                const file = fileInput.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const base64 = e.target.result;
                        base64Input.value = base64;
                    };

                    reader.readAsDataURL(file);
                }
            });
            </script>

            <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            </script>
</body>

</html>