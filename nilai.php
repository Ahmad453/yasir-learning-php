<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$atributNim = "";
$action = "tambah.php";

    if(isset($_GET['get_nim'])){

        $atributNim = 'readonly value = "' . $_GET['get_nim'] . '"' ;
        $action = "edit.php";
    
    }
    
$atributNama = "";

    if(isset($_GET['get_nama'])){

        $atributNama = 'value = "' . $_GET['get_nama'] . '"' ;
    } 
    
$atributQuiz = "";

    if(isset($_GET['get_quiz'])){

        $atributQuiz = 'value = "' . $_GET['get_quiz'] . '"' ;
    }
    
$atributUts = "";

    if(isset($_GET['get_uts'])){

        $atributUts = 'value = "' . $_GET['get_uts'] . '"' ;
    }
    
$atributUas = "";

    if(isset($_GET['get_uas'])){

        $atributUas = 'value = "' . $_GET['get_uas'] . '"' ;
    }

?>

    <form method="POST"  action="<?php echo $action ?>" >
    <table border="1">
    <tr>
        <td>NIM</td>
        <td>
            <input type="number" name="fe_nim" min="0" placeholder="Wajib Diisi..." required  <?php echo $atributNim?>>
        </td>
        </tr>
        <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="fe_nama" placeholder="Wajib Diisi..." required <?php echo $atributNama?>>
        </td>
        </tr>
        <tr>
        <td>Quiz</td>
        <td>
            <input type="number" name="fe_quiz" min="0" placeholder="0" required <?php echo $atributQuiz?>>
        </td>
        </tr>
        <tr>
        <td>UTS</td>
        <td>
            <input type="number" name="fe_uts" min="0" placeholder="0" required <?php echo $atributUts?>>
        </td>
        </tr>
        <tr>
        <td>UAS</td>
        <td>
            <input type="number" name="fe_uas" min="0" placeholder="0" required <?php echo $atributUas?>>
        </td>
        </tr>
        <tr>
    </table><br>
    <button type="submit">Submit</button>
    <button type="button" onclick="window.location.href='http://localhost/adephp/yasir-learning-php/table.php'">Reset</button>
    </form>
    <hr/>
</body>
</html>