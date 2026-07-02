<?php
require 'fungsi.php';

$id = $_GET['id'];
$mhs = tampildata("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST['submit'])) {
    if(ubahData($_POST) > 0) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='Mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah atau tidak ada perubahan!'); window.location.href='Mahasiswa.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>

<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mhs['id']; ?>">
        <input type="hidden" name="fotoLama" value="<?php echo $mhs['foto']; ?>">
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required value="<?php echo $mhs['nama']; ?>"></td>
            </tr>
            <tr>
                <td><label for="NIM">NIM</label></td>
                <td>:</td>
                <td><input type="text" id="NIM" name="NIM" required value="<?php echo $mhs['nim']; ?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan" required value="<?php echo $mhs['jurusan']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="Email" name="Email" required value="<?php echo $mhs['email']; ?>"></td>
            </tr>
            <tr>
                <td><label for="no-hp">No HP</label></td>
                <td>:</td>
                <td><input type="number" id="no-hp" name="no-hp" required value="<?php echo $mhs['no_hp']; ?>"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                    <img src="assets/img/<?php echo $mhs['foto']; ?>" width="100">
                    <br><br>
                    <input type="file" name="Foto" accept="image/*">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Ubah Data</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>