<?php
include 'koneksi.php';
extract($_POST);
$book_id = $_GET['book_id'];
mysqli_query($koneksi, "DELETE FROM buku WHERE book_id='$book_id'");

header("Location:index.php");
