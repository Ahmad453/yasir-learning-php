<!DOCKTYPE html>
<html>
  <head>
    <title>Pendaftaran</title>
  </head>
  <body>
    <?php
$tombol = "<a href='index.php'>kembali</a>";
if($_POST['nama'] == "" || $_POST['email'] == "" || 
$_POST['alamat'] == ""){

  if($_POST['nama'] == ""){
    echo "ngaran kudu di isi. <br>";
}
  if($_POST['email'] == ""){
    echo "email kudu di isi. <br>";
}
if($_POST['alamat'] == ""){
    echo "alamat kudu di isi. <br>";
}
echo $tombol;

}else{
  ?>
      <h2> berhasil</h2>
      <table border="1">
        <tr>
          <td>Nama</td>
          <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><?php echo $_POST['opsi']; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="index.php">Kembali</a></td>
        </tr>
      </table>
      <?php
}
?>
  </body>
</html>
