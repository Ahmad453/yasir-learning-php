<?php require 'koneksi.php'; 
$query_sql = "SELECT * FROM tb_hasil";
$result = $koneksi->query($query_sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form method="POST">
    <button><a href="nilai.php">Kembali</button></a>

    <table border="1">
    <tr>
        <td>NIM</td>
        <td>Nama</td>
        <td>Quiz</td>
        <td>UTS</td>
        <td>UAS</td>
        <td>Jumlah</td>
        <td>Grade</td>
        <td>Aksi</td>
        <td>Edit</td>
        </tr>
        <?php 
        // for ($i = 1; $i <= 100; $i++) {
        //     echo " <tr><td>21305003$i </td>" . "<td>Ahmaad Yasir </td>" . "<td>80 </td>" . "<td>90 </td>" . "<td>99 </td></tr>";
            
        // }

        // $testing = [1000,2000,3000,4000];
        
        // for ($i = 0; $i < count($testing); $i++) {
        //     echo $testing[$i];

        // }

        // $siswa = [
        //     "person1" => [
        //         "nim" => 213050030,
        //         "nama" => "Ahmad Yasir",
        //         "quiz" => 87,
        //         "uts" => 80,
        //         "uas" => 90
        //     ],
        //     "person2" => [
        //         "nim" => 213050035,
        //         "nama" => "qq",
        //         "quiz" => 90,
        //         "uts" => 99,
        //         "uas" => 100
        //     ],
        //     "person3" => [
        //         "nim" => 213050044,
        //         "nama" => "ade",
        //         "quiz" => 88,
        //         "uts" => 86,
        //         "uas" => 96
        //     ],
        // ];


        // foreach ($siswa as $mahasiswa => $details) {
          
        //     $nim = $details["nim"];
        //     $nama = $details["nama"];
        //     $quiz = $details["quiz"];
        //     $uts = $details["uts"];
        //     $uas = $details["uas"];

        //     $jumlah = ($quiz + $uts + $uas) / 3 ;

        //     if ($jumlah>= 90){
        //         $grade = 'A+' ;
        //          } elseif ($jumlah>= 80){
        //             $grade =  'A' ;
        //          } elseif ($jumlah>= 70){
        //             $grade = 'B' ;
        //          } elseif ($jumlah>= 60){
        //             $grade = 'C' ;
        //          } else{
        //             $grade = 'D' ;
        //          }

        //     echo <<<HTML
        //     <tr>
        //         <td>$nim</td>
        //         <td>$nama</td>
        //         <td>$quiz</td>
        //         <td>$uts</td>
        //         <td>$uas</td>
        //         <td>$jumlah</td>
        //         <td>$grade</td>
        //     </tr>
        //     HTML;
        // }   

         // Menarik data dari database
    if ($result->num_rows > 0) {
        // Loop untuk menampilkan data
        while ($row = $result->fetch_assoc()) {
            // Menyimpan data dari database ke variabel
            $nim = $row["NIM"];
            $nama = $row["Nama"];
            $quiz = $row["Quiz"];
            $uts = $row["Uts"];
            $uas = $row["Uas"];

            // Menghitung jumlah dan menentukan grade
            $jumlah = ($quiz + $uts + $uas) / 3;
            
            if ($jumlah >= 90) {
                $grade = 'A+';
            } elseif ($jumlah >= 80) {
                $grade = 'A';
            } elseif ($jumlah >= 70) {
                $grade = 'B';
            } elseif ($jumlah >= 60) {
                $grade = 'C';
            } else {
                $grade = 'D';
            }

            // Menampilkan data dalam tabel HTML
            echo <<<HTML
            <tr>
                <td>$nim</td>
                <td>$nama</td>
                <td>$quiz</td>
                <td>$uts</td>
                <td>$uas</td>
                <td>$jumlah</td>
                <td>$grade</td>
                <td><a href ="delete.php?code_nim=$nim">delete</td>
                <td><a href ="nilai.php?get_nim=$nim&get_nama=$nama&get_quiz=$quiz&get_uts=$uts&get_uas=$uas">edit</td>
            </tr>
            HTML;
        }
    } else {
        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
    }

    // Menutup koneksi
    $koneksi->close();

            ?>
    </table><br>
    </form>
    
</body>
</html>