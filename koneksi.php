<?php
$koneksi = mysqli_connect("localhost","nama_pengunjung");
if (mysqli_connect_errno()){
    echo "Koneksi database gagal" . mysqli_connect_error();
}
?>