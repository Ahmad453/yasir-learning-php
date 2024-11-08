<?php require 'koneksi.php'; 
$nim = $_GET["code_nim"];
$query_sql = "DELETE FROM tb_hasil WHERE NIM = $nim";


if(!isset($nim)){
echo 'Gagal';
return 'gagal';
}

if (mysqli_query($koneksi, $query_sql)) {
    header("location: table.php");
} else {
    echo "Data tidak masuk!" . mysqli_error($koneksi);
}