<?php
$dbServername = "localhost";
$nama_pengunjung = $POST['nama_pengunjung'];
$conn = mysqli_query("insert into pengunjung values($dbServername,$nama_pengunjung)");
    header("location:pengunjung.php");
?>
