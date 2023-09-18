<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>
<style>
.btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
}

.btn-google {
    color: white !important;
    background-color: #ea4335;
}

.btn-facebook {
    color: white !important;
    background-color: #3b5998;
}
</style>

<body class="bg-success ">
    <div class="background-image-black  align-item-center">



        <div><?php $this->load->view('component/navbar') ?></div>
        <div class="text-center text-white ">
            <br>
            <br>
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
            <a href="<?php echo base_url('project/login') ?>" class="btn btn-sm btn-success ">
                Login
            </a>
        </div>





</body>

</html>