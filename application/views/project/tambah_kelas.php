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

<body class="">


    <?php $this->load->view('component/sidebar') ?>


    <div class="card w-50 m-auto p-3">
        <h3 class="text-center ">Tambah Kelas </h3>
        <br>
        <form action="<?php echo base_url('project/aksi_tambah_kelas')  ?>" method="post" class="row">
            <div class="mb-3 col-6">
                <label for="jurusan" class="form-label">jurusan</label>
                <input type="text" placeholder="Jurusan" class="form-control" id="jurusan" name="jurusan">
            </div>
            <div class="mb-3 col-6">
                <label for="tingkat" class="form-label">Tingkat</label>
                <input type="text" placeholder="Tingkat" class="form-control" id="tingkat" name="tingkat">
            </div>

            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Sekolah</label>
                <select name="id_sekolah" class="form-select">
                    <option selected>Pilih Sekolah</option>
                    <?php foreach ($sekolah as $row) : ?>
                    <option value="<?php echo $row->id_sekolah ?>">
                        <?php echo $row->nama_sekolah  ?>
                    </option>
                    <?php endforeach ?>
                </select>

            </div>
            <br>
            <br>
            <div class="flex justify-content-between">
                <div>
                    <a href="<?php echo base_url('project/kelas'); ?>"
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
    </div>

</body>

</html>