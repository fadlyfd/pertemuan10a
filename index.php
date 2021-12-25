<?php

require 'functions.php';

$mahasiswi = query("SELECT * FROM mahasiswi");

?>

<!DOCTYPE html>
<html>
<head>
     <title>Halaman Admin</title>
</head>

<body>
<h1>Daftar Mahasiswi</hl>

<br><br>
<a href="tambah.php">Tambah data mahasiswi</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswi as $row ) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> | 
            <a href="hapus.php?=<?= $row["id"]; ?>" onclick="
            return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="80"></td>

        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
</tr>

<?php $i++; ?>
<?php endforeach; ?>

</table>
</body>
</html>

