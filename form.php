<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h2>Pendaftaran Siswa</h2>

    <form method="post">
        Masukan Nama :<br>
        <input type="text" name="nama"><br>
        Masukan Email :<br>
        <input type="email" name="email"><br>
        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>
    <br>
    <hr>
    <?php
    if(isset($_POST['nama'])){
        echo 'Nama : ' . $_POST['nama'] . '<br>';
        echo 'Email : ' . $_POST['email'] . '<br>';
    }

    ?>
    
</body>
</html>