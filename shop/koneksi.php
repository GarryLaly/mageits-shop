<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'garry';
$dbname = 'mageshop';

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$koneksi) {
    printf("Gagal Koneksi : %s", mysqli_error($koneksi));
}

mysqli_select_db($koneksi, $dbname);
?>
