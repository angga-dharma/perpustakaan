<?php
    $conn = new mysqli("localhost","root","","perpustakaan");

    if($conn->connect_error){
        die("Koneksi Gagal: ".$conn->connect_error);
    }
?>