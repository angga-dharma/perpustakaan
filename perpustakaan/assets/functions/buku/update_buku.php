<?php
    require_once "../connection.php";

    extract($_POST);

    $sql = "UPDATE buku SET nama_buku='$nama_buku', jenis_buku='$jenis_buku', tahun_terbit='$tahun_terbit', pengarang='$pengarang', penerbit='$penerbit', status='$status' WHERE id_buku = '$id_buku'";

    $result = $conn->query($sql);

    echo "<script>alert('Data Buku Berhasil Diupdate!!'); location.href = '../../../buku.php'; </script>;";

?>