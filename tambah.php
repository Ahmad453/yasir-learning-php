<?php 
require 'koneksi.php';
$be_nim = $_POST["fe_nim"];
$be_nama = $_POST["fe_nama"];
$be_quiz = $_POST["fe_quiz"];
$be_uts = $_POST["fe_uts"];
$be_uas = $_POST["fe_uas"];
$jumlahNilai = ($be_quiz + $be_uts + $be_uas) / 3 ;

if ($jumlahNilai>= 90){
    $grade = 'A+' ;
     } elseif ($jumlahNilai>= 80){
        $grade =  'A' ;
     } elseif ($jumlahNilai>= 70){
        $grade = 'B' ;
     } elseif ($jumlahNilai>= 60){
        $grade = 'C' ;
     } else{
        $grade = 'D' ;
     }

$query_sql = "INSERT INTO tb_hasil (Nim, Nama, Quiz, Uts, Uas, Jumlah, Grade)
VALUES ('$be_nim', '$be_nama', '$be_quiz', '$be_uts', '$be_uas', '$jumlahNilai', '$grade')";

if (mysqli_query($koneksi, $query_sql)) {
    header("location: table.php");
} else {
    echo "Data tidak masuk!" . mysqli_error($koneksi);
}