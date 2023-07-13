<?php
    require_once "../connection.php";

    extract($_POST);

    $sql = "UPDATE anggota SET nama_anggota = '$nama_anggota', alamat_anggota = '$alamat_anggota', jenis_kelamin = '$jenis_kelamin', agama = '$agama', no_telp = '$no_telp' WHERE id_anggota = '$id_anggota'";

    $result = $conn->query($sql);

    echo "<script>alert('Data Anggota Berhasil Diupdate!!'); location.href = '../../../anggota.php'; </script>;";

?>