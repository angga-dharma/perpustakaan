<?php
    require_once "../connection.php";

    extract($_POST);

    $sql = "INSERT INTO peminjaman (id_buku,id_anggota,petugas,tanggal_pinjam,batas_pengembalian,status_peminjaman) VALUES ('$id_buku','$id_anggota','$petugas','$tanggal_pinjam','$batas_pengembalian','Belum Dikembalikan')";

    $result = $conn->query($sql);

    if($result){
        $sql2 = "UPDATE buku SET status = 'Dipinjam' WHERE id_buku = $id_buku";
        $result2 = $conn->query($sql2);
        if($result2){
            echo "<script>alert('Data Peminjaman Berhasil Ditambahkan!!'); location.href = '../../../peminjaman.php'; </script>;";
        }else{
            echo "Gagal 1";
        }
    }else{
        echo "Gagal 2";
    }
?>