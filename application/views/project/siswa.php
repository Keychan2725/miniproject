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
                    <a href="<?php echo base_url('project/siswa') ?>" class="fs-5">Data Siswa</a>
                </li>

                <li>
                    <a href="<?php echo base_url('project/guru') ?>" class="fs-5">Data Guru</a>
                </li>
                <li>
                    <a href="#" class="fs-5">Data Kelas</a>
                </li>
                <li>
                    <a href="#" class="fs-5">About</a>
                </li>
                <li>
                    <a href="#" class="fs-5">Account</a>
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

                <div class="row ">
                    <div class="col-12 card p-2">
                        <div class="card-body min-vh-100  align-items-center">
                            <div class="card w-100 m-auto p-5">
                                <?php echo $this->session->set_flashdata('message'); ?>

                                <div class=" d-flex ">
                                    <p class="class fs-4"><?php echo $title; ?></p>
                                    <form class="d-flex " style="padding-left: 1100px;" role="search">
                                        <input class="form-control me-1 " type="search" placeholder="Cari Siswa"
                                            aria-label="Search">
                                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                    </form>

                                </div>


                                <br>
                                <br>
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
                                                    class="btn btn-sm btn-primary">Ubah</a>

                                                <button onclick="hapus(<?php echo $row->id_siswa ?>)"
                                                    class="btn btn-sm btn-danger">Hapus</button>
                                            </td>

                                        </tr><?php endforeach ?>

                                    </tbody>
                                </table>

                                <a href="<?php echo base_url('project/tambah_siswa') ?>"
                                    class="inline-block rounded bg-sky-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700 text-center btn btn-primary">Tambah</a>
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
        var yes = confirm("Yakin Ingin Menghapus Data Anda")
        if (yes === true) {
            window.location.href = "<?php echo base_url('project/hapus_siswa/') ?>" + id;
        }
    }
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>