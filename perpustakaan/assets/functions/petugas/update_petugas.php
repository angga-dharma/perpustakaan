<?php
    require_once "../connection.php";

    extract($_POST);

    $sql = "UPDATE petugas SET username = '$username', password = '$password', nama_petugas = '$nama_petugas', alamat_petugas = '$alamat_petugas', jenis_kelamin = '$jenis_kelamin', agama = '$agama', jabatan = '$jabatan' WHERE id_petugas = '$id_petugas'";

    $result = $conn->query($sql);

    echo "<script>alert('Data Petugas Berhasil Diupdate!!'); location.href = '../../../dashboard.php'; </script>;";

?>