<?php

$koneksi = mysqli_connect("localhost", "root", "", "covid");

$id_odp = $_GET["id_odp"];

$query = mysqli_query($koneksi,
 "DELETE FROM odp where id_odp=$id_odp");

//var_dump($query);
if($query>0){
    echo " <script> alert('Data Berhasil dihapus'); document.location.href = 'odp.php'; </script> ";
}
?>