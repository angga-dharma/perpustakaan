<?php
    require_once "../connection.php";

    extract($_POST);

    $sql = "INSERT INTO petugas (username,password,nama_petugas,alamat_petugas,jenis_kelamin,agama,jabatan) VALUES ('$username','$password','$nama_petugas','$alamat_petugas','$jenis_kelamin','$agama','$jabatan')";
    $result = $conn->query($sql);

    echo "<script>alert('Data Petugas Berhasil Ditambahkan!!'); location.href = '../../../dashboard.php'; </script>;";

?>