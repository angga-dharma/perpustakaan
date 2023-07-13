<?php
    require_once "../connection.php";

    $nama_buku = $_POST['nama_buku'];
    $jenis_buku = $_POST['jenis_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "INSERT INTO buku(nama_buku,jenis_buku,tahun_terbit,pengarang,penerbit,status) VALUES ('$nama_buku','$jenis_buku','$tahun_terbit','$pengarang','$penerbit','Tersedia')";

    $result = $conn->query($sql);
    
    echo "<script>alert('Data Buku Berhasil Ditambahkan!!'); location.href = '../../../buku.php'; </script>;";
?>