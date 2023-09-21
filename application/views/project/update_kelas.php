<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <script src="https://cdn.tailwindcss.com"></script>



    </head>

    <body class="">
        <?php $this->load->view('component/sidebar') ?>
        <div class="card w-50 m-auto p-3">
            <h3 class="text-center">Update Kelas </h3>
            <?php echo $this->session->flashdata('message'); ?>

            <?php foreach ($kelas as $data_kelas) : ?>
            <form method="post" action="<?php echo base_url('project/aksi_update_kelas') ?>"
                enctype="multipart/form_data">
                <input name="id" type="hidden" value="<?php echo $data_kelas->id ?>">
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan"
                        value="<?php echo $data_kelas->jurusan ?>">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Tingkat</label>
                        <input type="text" class="form-control" id="tingkat" name="tingkat"
                            value="<?php echo $data_kelas->tingkat ?> ">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="sekolah" class="form-label">Sekolah</label>
                        <select name="id_sekolah" class="form-select">
                            <option selected value="<?php echo $data_kelas->id_sekolah ?>">
                                <?php echo tampil_full_sekolah($data_kelas->id_sekolah) ?></option>
                            <?php foreach ($sekolah as $row) : ?>
                            <option value="<?php echo $row->id_sekolah ?>">
                                <?php echo $row->nama_sekolah  ?>
                            </option>
                            <?php endforeach ?>
                        </select>

                    </div>
                    <div class="flex justify-content-between">
                        <div>
                            <a href="<?php echo base_url('project/siswa'); ?>"
                                class=" flex items-center p-2 m-10 w-auto bg-red-500 hover:bg-red-700 text-white font-bold py-2  rounded w-7/6">
                                <span>Kembali</span>
                            </a>
                        </div>
                        <div>
                            <button type="submit"
                                class="flex items-center p-2 m-10 w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2  rounded w-7/6"
                                name=" submit">Confirm</button>
                        </div>
                    </div>

            </form>
            <?php endforeach ?>
        </div>

    </body>
    <script>

    </script>

    </html>