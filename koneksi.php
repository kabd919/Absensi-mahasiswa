<?php
//deklarasi
$host = "localhost";
$user = "root";
$pass = "";
$db = "hadir";

//buat koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Belum Terkoneksi Ke Database");
} else {
    echo"Berhasil";
}