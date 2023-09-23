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
                    <a href="<?php echo base_url('project/kelas')  ?>" class="fs-5">Data Kelas</a>
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

                <div class="row ">
                    <div class="col-12 card p-2">
                        <div class="card-body min-vh-100  align-items-center">
                            <?php echo $this->session->set_flashdata('message'); ?>

                            <div class=" d-flex ">
                                <hr>
                                <p class="class fs-4"><?php echo $title; ?></p>
                                <form class="d-flex " style="padding-left: 1100px;" role="search">
                                    <input class="form-control me-1 " type="search" placeholder="Cari Siswa"
                                        aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                </form>

                            </div>


                            <br>
                            <br>
                            <a href="<?php echo base_url('project/tambah_siswa') ?>"
                                class="inline-block rounded bg-sky-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700 text-center btn btn-primary"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                    </style>
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>

                            </a>
                            <hr>
                            <table class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No </th>
                                        <th scope="col">Nama </th>
                                        <th scope="col">NISN </th>
                                        <th scope="col"> Gender </th>
                                        <th scope="col"> Kelas </th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 0;
                                        foreach ($siswa as $row) : $no++
                                        ?>
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            <?php echo $row->nama_siswa ?></td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            <?php echo $row->nisn ?></td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            <?php echo $row->gender ?>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            <?php echo tampil_full_kelas_byid($row->id_kelas) ?>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            <a href="<?php echo base_url('project/update_siswa/') . $row->id_siswa ?>"
                                                class="btn btn-lg btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                    height="1em" viewBox="0 0 512 512">
                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M432 64H208c-8.8 0-16 7.2-16 16V96H128V80c0-44.2 35.8-80 80-80H432c44.2 0 80 35.8 80 80V304c0 44.2-35.8 80-80 80H416V320h16c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16zM0 192c0-35.3 28.7-64 64-64H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192zm64 32c0 17.7 14.3 32 32 32H288c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32 14.3-32 32z" />
                                                </svg>
                                            </a>

                                            <button onclick="hapus(<?php echo $row->id_siswa ?>)"
                                                class="btn btn-lg btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                    height="1em" viewBox="0 0 448 512">
                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                </svg>
                                            </button>
                                        </td>

                                    </tr><?php endforeach ?>

                                </tbody>
                            </table>


                        </div>
                        </form>



                    </div>
                </div>

            </div>
            <br>

        </div>

    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
    function hapus(id) {
        swal.fire({
            title: 'Yakin untuk menghapus data ini?',
            text: "Data ini akan terhapus permanen",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Ya Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Dihapus',
                    showConfirmButton: false,
                    timer: 1500,

                }).then(function() {
                    window.location.href = "<?php echo base_url('Project/hapus_siswa/')?>" + id;
                });
            }
        });
    }
    </script>
</body>

</html>