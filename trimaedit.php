<?php
include 'koneksi.php';
extract($_POST);
$book_id = $_GET['book_id'];
mysqli_query($koneksi, "UPDATE buku SET judul_book='$judul_book', nama_penulis='$nama_penulis', penerbit_book='$penerbit_book' WHERE book_id='$book_id'");

header("Location:index.php");
