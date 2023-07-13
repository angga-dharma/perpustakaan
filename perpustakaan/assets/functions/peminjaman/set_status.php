<?php
    require_once "../connection.php";

    extract($_POST);
     
    $sql = "UPDATE peminjaman SET status_peminjaman = 'Telah Dikembalikan' WHERE id_peminjaman = '$id_peminjaman'";

    $result = $conn->query($sql);

    if($result){
        $sql2 = "UPDATE buku SET status = 'Tersedia' WHERE id_buku = $id_buku";
        $result2 = $conn->query($sql2);
        if($result2){
            echo "<script>alert('Data Peminjaman Berhasil Diupdate!!'); location.href = '../../../peminjaman.php'; </script>;";
        }else{
            echo "Gagal 1";
        }
    }else{
        echo "Gagal 2";
    }
?>