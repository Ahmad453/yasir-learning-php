<?php
// Meminta input dari pengguna melalui form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menyimpan input pengguna
    $input_data = $_POST['data'];

    // Looping untuk menampilkan data sebanyak 100 kali
    for ($i = 1; $i <= 10; $i++) {
        echo "Data ke-$i: $input_data <br>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data dan Looping 100 Kali</title>
</head>
<body>
    <form method="POST" action="">
        <label for="data">Masukkan Data:</label>
        <input type="text" id="data" name="data" required>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>


$data = ["Apel", "Pisang", "Mangga", "Jeruk"];

foreach ($data as $index => $fruit) {
    echo "Data ke-" . ($index + 1) . ": $fruit <br>";
}

