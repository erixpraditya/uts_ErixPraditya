<?php

    include("koneksi.php");

    $idbuku = $_POST ['id_buku'];
    $judulbuku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $tahunterbit = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];
    

    $sunting = "UPDATE librarymanajer SET id_buku='$idbuku', judul_buku='$judulbuku', pengarang='$pengarang', tahun_terbit='$tahunterbit', kategori='$kategori' WHERE id_buku='$idbuku'"; 
    

    $proses = mysqli_query($koneksi, $sunting);


    header("location:index.php");
?>