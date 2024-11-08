<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="hasil.php">
    <table border="1">
    <tr>
        <td>NIM</td>
        <td>
            <input type="number" name="fe_nim" min="0" placeholder="Wajib Diisi..." required>
        </td>
        </tr>
        <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="fe_nama" placeholder="Wajib Diisi..." required>
        </td>
        </tr>
        <tr>
        <td>Quiz</td>
        <td>
            <input type="number" name="fe_quiz" min="0" placeholder="0" required>
        </td>
        </tr>
        <tr>
        <td>UTS</td>
        <td>
            <input type="number" name="fe_uts" min="0" placeholder="0" required>
        </td>
        </tr>
        <tr>
        <td>UAS</td>
        <td>
            <input type="number" name="fe_uas" min="0" placeholder="0" required>
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