<?php require 'koneksi.php'; 
$nim = $_POST["fe_nim"];
$nama = $_POST["fe_nama"];
$quiz = $_POST["fe_quiz"];
$uts = $_POST["fe_uts"];
$uas = $_POST["fe_uas"];

$query_sql = "UPDATE tb_hasil
SET Nama = '$nama', Quiz = '$quiz', Uts = '$uts', Uas = '$uas'
WHERE NIM = $nim;";

    if (mysqli_query($koneksi, $query_sql)) {
        header("location: table.php");
    } else {
        echo "Data tidak masuk!" . mysqli_error($koneksi);
    }