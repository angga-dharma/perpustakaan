<?php
    require_once "../connection.php";

    extract($_POST);

    $sql = "INSERT INTO anggota (nama_anggota,alamat_anggota,jenis_kelamin,agama,no_telp) VALUES ('$nama_anggota','$alamat_anggota','$jenis_kelamin','$agama','$no_telp')";

    $result = $conn->query($sql);

    echo "<script>alert('Data Anggota Berhasil Ditambahkan!!'); location.href = '../../../anggota.php'; </script>;";

?>