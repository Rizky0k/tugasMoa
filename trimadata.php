<?php
include 'koneksi.php';
extract($_POST);
mysqli_query($koneksi, "INSERT INTO buku(judul_book, nama_penulis, penerbit_book) VALUES ('$judul_book','$nama_penulis','$penerbit_book')");

header("Location:index.php");
