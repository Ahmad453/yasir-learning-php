<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data">

    <h2>Masukkan data diri Anda</h2>
    <label>Nama</label><br>
    <input type="text" name="nama" required><br>
    
    <label>Email</label><br>
    <input type="email" name="email" required><br>
    
    <label>Jenis Kelamin</label><br>
    <label>
        <input type="radio" name="opsi" value="Laki-laki" checked>
        Laki-laki
    </label><br>
    <label>
        <input type="radio" name="opsi" value="Perempuan">
        Perempuan
    </label><br>
    
    <label>Tanggal Lahir</label><br>
    <input type="date" name="tanggal_lahir" required><br>

    <label>Alamat</label><br>
    <textarea name="alamat" required></textarea><br>

    <label>Upload Gambar</label><br>
    <input type="file" name="file" accept="image/*" required><br><br>
    
    <button type="submit">Simpan</button>
</form>
<hr/>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $jenisKelamin = htmlspecialchars($_POST['opsi']);
    $alamat = htmlspecialchars($_POST['alamat']);
    
    // Ambil tanggal lahir
    $tanggalLahir = $_POST['tanggal_lahir']; // Format: YYYY-MM-DD
    $tanggal = new DateTime($tanggalLahir);

    // Tentukan prefiks berdasarkan jenis kelamin
    $prefiks = $jenisKelamin == "Laki-laki" ? "Tuan" : "Nyonya";

    // Hitung usia
    $today = new DateTime();
    $usia = $today->diff($tanggal)->y; // Menghitung selisih tahun

    // Tentukan direktori untuk menyimpan file
    $targetDir = "uploads/";
    
    // Cek apakah direktori ada, jika tidak, buat direktori
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah file adalah gambar
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    // Cek jika file sudah ada
    if (file_exists($targetFile)) {
        echo "Maaf, file sudah ada.<br>";
        $uploadOk = 0;
    }

    // Batasi ukuran file (contoh: 5MB)
    if ($_FILES["file"]["size"] > 50000000) {
        echo "Maaf, ukuran file terlalu besar.<br>";
        $uploadOk = 0;
    }

    // Hanya izinkan jenis file tertentu
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.<br>";
        $uploadOk = 0;
    }

    // Periksa apakah $uploadOk diatur ke 0 oleh kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file tidak diupload.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "<h2>Data yang Diterima:</h2>";
            echo "<p><strong>$prefiks $nama:</strong></p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenisKelamin</p>";
            echo "<p><strong>Tanggal Lahir:</strong> " . $tanggal->format('d-m-Y') . "</p>";
            echo "<p><strong>Usia:</strong> $usia tahun</p>"; // Tampilkan usia
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Gambar:</strong></p>";
            echo "<img src='$targetFile' alt='Gambar yang diupload' style='max-width: 300px;'><br>";
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
        }
    }
}
?>

</body>
</html>
