<?php

include("koneksi.php");


$id = $_GET['id'];


$ambil = "SELECT * FROM librarymanajer WHERE id_buku='$id'";


$edit = mysqli_query($koneksi, $ambil);


$data = mysqli_fetch_array($edit);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>librarymanajer</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    
    <?php
         include_once('navbar.php');
    ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
        <div class="card-header text-center">
            <h3>Form Edit Buku</h3>
        </div>
        <div class="card-body">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?=$data['id_buku']?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Id Buku</label>
                        <input type="text" readonly value="<?= $data['id_buku']?>" name="id_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
                        <input type="text" value="<?= $data['judul_buku']?>" name="judul_buku" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Pengarang</label>
                        <input type="text" value="<?= $data['pengarang']?>" name="pengarang" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                        <input type="number" value="<?= $data['tahun_terbit']?>" name="tahun_terbit" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <input type="text" value="<?= $data['kategori']?>" name="kategori" class="form-control" id="exampleInputPassword1">
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
         </div>

        </div>
    </div>
</div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/all.js"></script>
</body>
</html>