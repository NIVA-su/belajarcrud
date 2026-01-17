<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Data Peserta</title>
</head>
<body>
    <h1>Data Peserta</h1>
    <a href="create.php">Tambah Data Baru</a>
    <hr>
    <h3>Daftar Peserta</h3>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Usia</th>
            <th>Aksi</th>
        </tr>
        <?php include "readproses.php"; ?>
    </table>
</body>
</html>
<?php mysqli_close($conn); ?>