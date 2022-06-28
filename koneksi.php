<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$koneksi = mysqli_connect($servername, $username, $password, $database);

// if (mysqli_connect_errno()) {
//     echo "Koneksi gagal";
// } else {
//     echo "Koneksi Sukses";
// }
