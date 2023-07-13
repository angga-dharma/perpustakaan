<?php
    require_once "../connection.php";

    $id_anggota = $_GET['id'];

    $sql = "DELETE FROM anggota WHERE id_anggota = '$id_anggota'";

    $result = $conn->query($sql);

    echo "<script>alert('Data Buku Berhasil Dihapus!!'); location.href = '../../../anggota.php'; </script>;";

?>