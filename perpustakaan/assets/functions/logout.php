<?php
    require_once "connection.php";

    session_start();
    session_destroy();
    echo "<script>alert('Anda Berhasil Logout!!'); location.href = '../../index.php';</script>";
?>