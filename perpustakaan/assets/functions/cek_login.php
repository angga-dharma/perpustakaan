<?php
    require_once "connection.php";

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows>0){
        $row = $result->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['nama_petugas'] = $row['nama_petugas'];
        $_SESSION['jabatan'] = $row['jabatan'];
        echo "<script>alert('Anda Berhasil Login!!'); location.href = '../../dashboard.php';</script>";
    }

    else{
        echo "<script>alert('Gagal Melakukan Login!! (Username/Password Salah)'); location.href = '../../index.php';</script>";
    }
?>