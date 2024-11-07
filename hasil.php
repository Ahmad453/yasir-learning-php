<?php 
require 'koneksi.php';
$be_nim = $_POST["fe_nim"];
$be_nama = $_POST["fe_nama"];
$be_quiz = $_POST["fe_quiz"];
$be_uts = $_POST["fe_uts"];
$be_uas = $_POST["fe_uas"];

$query_sql = "INSERT INTO tb_nilai (Nim, Nama, Quiz, Uts, Uas)
VALUES ('$be_nim', '$be_nama', '$be_quiz', '$be_uts', '$be_uas')";

if (mysqli_query($koneksi, $query_sql)) {
    header("location: nilai.php");
} else {
    echo "Data tidak masuk!" . mysqli_error($koneksi);
}