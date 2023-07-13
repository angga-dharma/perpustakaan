<?php
    require_once "../connection.php";

    $id_petugas = $_GET['id'];

    $sql = "DELETE FROM petugas WHERE id_petugas = '$id_petugas'";

    $result = $conn->query($sql);
    
    echo "<script>alert('Data Petugas Berhasil Dihapus!!'); location.href = '../../../dashboard.php'; </script>;";

?>