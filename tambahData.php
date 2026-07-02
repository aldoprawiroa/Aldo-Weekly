<?php
    require 'fungsi.php';
if (isset($_POST['submit'])) {
    if (tambahData($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='Mahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                window.location.href='tambahData.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h2>
        Tambah Data Mahasiswa
    </h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table cellpadding="5px">
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" id="nama" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NIM">NIM</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" id="NIM" name="NIM" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" id="jurusan" name="jurusan" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Email">Email</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="email" id="Email" name="Email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="no-hp">No HP</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="tel" id="no-hp" name="no-hp" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Foto">Foto</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="file" id="Foto" name="Foto" accept="image/*" required>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <h2>
        Form Kedua
    </h2>
    <form action="form-mahasiswa.php" method="post">
        <table cellpadding="5px">
            <tr>
                <td>
                    <label for="nama">
                        Nama
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" id="nama" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nim">
                        NIM
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="number" id="nim" name="nim" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">
                        Password
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="password" id="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">
                        Email
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="email" id="email" name="email" required>
                </td>
            </tr>
            <tr>
                <td><label for="no-hp">No HP</label></td>
                <td>:</td>
                <td><input type="tel" id="no-hp" name="no-hp" placeholder="08xxxxxxxxxx" required></td>
            </tr>
            <tr>
                <td><label for="website">Website Pribadi</label></td>
                <td>:</td>
                <td><input type="url" id="website" name="website" placeholder="https://"></td>
            </tr>
            <tr>
                <td><label for="tanggal-lahir">Tanggal Lahir</label></td>
                <td>:</td>
                <td><input type="date" id="tanggal-lahir" name="tanggal-lahir" required></td>
            </tr>
            <tr>
                <td><label for="warna-favorit">Warna Favorit</label></td>
                <td>:</td>
                <td><input type="color" id="warna-favorit" name="warna-favorit" value="#000000"></td>
            </tr>
            <tr>
                <td><label for="tingkat-kepuasan">Tingkat Kepuasan</label></td>
                <td>:</td>
                <td>
                    <input type="range" id="tingkat-kepuasan" name="tingkat-kepuasan" min="1" max="10" step="1"
                        oninput="document.getElementById('nilai-kepuasan').textContent = this.value">
                    <span id="nilai-kepuasan">5</span>
                </td>
            </tr>
            <tr>
                <td><label>Jenis Kelamin</label></td>
                <td>:</td>
                <td>
                    <input type="radio" id="laki-laki" name="jenis-kelamin" value="laki-laki">
                    <label for="laki-laki">
                        Laki-laki
                    </label>
                    &nbsp;
                    <input type="radio" id="perempuan" name="jenis-kelamin" value="perempuan">
                    <label for="perempuan">
                        Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Hobi
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="checkbox" id="hobi-musik" name="hobi" value="mendengarkan-musik">
                    <label for="hobi-musik">
                        Mendengarkan Musik
                    </label><br>
                    <input type="checkbox" id="hobi-membaca" name="hobi" value="membaca-buku">
                    <label for="hobi-membaca">
                        Membaca Buku
                    </label><br>
                    <input type="checkbox" id="hobi-programming" name="hobi" value="programming">
                    <label for="hobi-programming">
                        Programming
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="foto">
                        Upload Foto
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="file" id="foto" name="foto" accept="image/*">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat">
                        Alamat
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <textarea id="alamat" name="alamat" rows="4" cols="40" required></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">
                        Jurusan
                    </label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <select id="jurusan" name="jurusan" required>
                        <option value="">
                            -- Pilih Jurusan --
                        </option>
                        <option value="teknologi-informasi">Teknologi Informasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">
                        Submit
                    </button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>