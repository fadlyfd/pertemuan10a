<!-- <?php

// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum

    if( isset ($_POST["submit"]) ) {

        // ambil data dari tiap elemen dalam form
        $nama = $_POST["nama"]; 
        $nrp = $_POST["nrp"];
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];
        $gambar = $_POST["gambar"];


        // query insert data
        $query= "INSERT INTO mahasiswi VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

// cek apakah data berhasil di tambahkan atau tidak
    // var_dump(mysqli_affected_rows ($conn));

    if( mysqli_affected_rows ($conn) > 0 ) {
        echo "berhasil";
     } else {
        echo "gagal!";
        echo "<br>";
        echo mysqli_error ($conn);
     }


}
?>



<!DOCTYPE html>
<html>
<head>
   <title>Tambah data mahasiswi</title>
</head>

<body>

  <hi>Tambah data mahasiswi</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <br>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <br>

            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <br>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <br>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <button type="submit" name="submit"> Tambah Data!</button>
            </li>
        </ul>

    </form>

</body>
</html> -->