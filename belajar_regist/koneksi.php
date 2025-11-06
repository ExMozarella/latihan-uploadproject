<?php

$koneksi = mysqli_connect("localhost","root","mysql","data");
// echo "koneksi berhasil";
if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>