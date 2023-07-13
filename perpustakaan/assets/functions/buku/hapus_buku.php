<?php
    require_once "../connection.php";

    $id_buku = $_GET['id'];

    $sql = "DELETE FROM buku WHERE id_buku = '$id_buku'";

    $result = $conn->query($sql);

    echo "<script>alert('Data Buku Berhasil Dihapus!!'); location.href = '../../../buku.php'; </script>;";
?>