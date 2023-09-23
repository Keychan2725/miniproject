<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
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

    <body>
        <?php $this->load->view('component/sidebar') ?>
        <div class="card w-50 m-auto p-3">
            <h3 class="text-center">Update Data Guru</h3>
            <?php echo $this->session->flashdata('message'); ?>
            <?php foreach ($guru as $data_guru) : ?>
            <form method="post" action="<?php echo base_url('Project/aksi_update_guru') ?>"
                enctype="multipart/form_data">
                <input name="id_guru" type="hidden" value="<?php echo $data_guru->id_guru ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_guru" name="nama_guru"
                        value="<?php echo $data_guru->nama_guru ?>">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="nama" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik"
                            value="<?php echo $data_guru->nik ?> ">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-select">
                            <option selected value="<?php echo $data_guru->gender ?>"><?php echo $data_guru->gender ?>
                            </option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="mapel" class="form-label"> Nama Mapel</label>
                        <select name="id_mapel" class="form-select">
                            <option selected value="<?php echo $data_guru->id_mapel ?>">
                                <?php echo tampil_full_mapel($data_guru->id_mapel) ?></option>
                            <?php foreach ($mapel as $row) : ?>
                            <option value="<?php echo $$row->nama_mapel ?>">
                                <?php echo tampil_full_mapel($row->nama_mapel) ?>
                            </option>
                            <?php endforeach ?>
                        </select>

                    </div>
                    <div class="flex justify-content-between">
                        <div>
                            <a href="<?php echo base_url('project/guru'); ?>"
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
</body>

</html>