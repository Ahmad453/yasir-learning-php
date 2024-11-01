<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tampilNim = '';
    $tampilNama = '';
    $tampilQuiz = '';
    $tampilUts = '';
    $tampilUas = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $tampilQuiz = 'readonly value = "' . $_POST['fe_quiz'] . '"' ;
        $tampilNim = 'readonly value = "' . $_POST['fe_nim'] . '"' ;
        $tampilNama = 'readonly value = "' . $_POST['fe_nama'] . '"' ;
        $tampilUts = 'readonly value = "' . $_POST['fe_uts'] . '"' ; 
        $tampilUas = 'readonly value = "' . $_POST['fe_uas'] . '"' ;
    }
    ?>
    <form method="POST">
    <table border="1">
    <tr>
        <td>NIM</td>
        <td>
            <input type="number" name="fe_nim" min="0" placeholder="Wajib Diisi..." required <?php echo $tampilNim?>>
        </td>
        </tr>
        <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="fe_nama" placeholder="Wajib Diisi..." required <?php echo $tampilNama?>>
        </td>
        </tr>
        <tr>
        <td>Quiz</td>
        <td>
            <input type="number" name="fe_quiz" min="0" placeholder="0" required  <?php echo $tampilQuiz?>>
        </td>
        </tr>
        <tr>
        <td>UTS</td>
        <td>
            <input type="number" name="fe_uts" min="0" placeholder="0" required <?php echo $tampilUts?>>
        </td>
        </tr>
        <tr>
        <td>UAS</td>
        <td>
            <input type="number" name="fe_uas" min="0" placeholder="0" required <?php echo $tampilUts?>>
        </td>
        </tr>
        <tr>
    </table><br>
    <button type="submit">Simpan</button>
    <button type="button" onclick="window.location.href='http://localhost/adephp/yasir-learning-php/nilai.php'">Kunjungi Contoh</button>
    </form>
    <hr/>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $be_nim = $_POST['fe_nim'];
        $be_nama = $_POST['fe_nama'];
        $be_quiz = $_POST['fe_quiz'];
        $be_uts = $_POST['fe_uts'];
        $be_uas = $_POST['fe_uas'];

    

        $jumlahNilai = ($be_quiz + $be_uts + $be_uas) / 3 ;
        echo 'Jumlah : ' . ($be_quiz + $be_uts + $be_uas) / 3 . '<br>' ;

        if ($jumlahNilai>= 90){
        echo 'Grade A+ ' ;
        } elseif ($jumlahNilai>= 80){
            echo 'Grade A ' ;
        } elseif ($jumlahNilai>= 70){
            echo 'Grade B ' ;
        } elseif ($jumlahNilai>= 60){
            echo 'Grade C ' ;
        } elseif ($jumlahNilai< 60){
            echo 'Grade D' ;
        }

    }
    ?>
</body>
</html>