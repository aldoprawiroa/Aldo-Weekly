<?php
    $nama = "Firman<br>";
    echo "hello $nama";
    $a = 10;
    $b = 30;
    $c = $a + $b;
    echo $c;

    if ($c>30) {
        echo " lebi dari 30<br>";
    }

    $array = ["amin<br>", "pirman"];
    echo $array[0];

    //API
    $koneksi = mysqli_connect("localhost","root", "", "aldweekly");
    if($koneksi) {
        echo "koneksi berhasil<br>";
    }

    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi, $query);
    // while($mhs = mysqli_fetch_assoc($result)) {
    //     var_dump($mhs);
    // }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <table align="center" cellspacing="0px" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a>
            </td>
            <td>
                <a href="biodata.php">Biodata</a>
            </td>
            <td>
                <a href="kontak.php">Kontak</a>
            </td>
            <td>
                <a href="Mahasiswa.php">Data Mahasiswa</a>
            </td>
        </tr>
    </table>

    <h2>
        Data Mahasiswa
    </h2>

    <a href="tambahData.php" class="ButtonTambahData">
        <button>Tambah Data</button>
    </a>

    <table border="1" cellpadding="5px">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>JURUSAN</th>
            <th>EMAIL</th>
            <th>NO HP</th>
            <th>FOTO</th>
            <th>Aksi</th>
        </tr>

        <?php
        while($mhs = mysqli_fetch_assoc($result)) {
        var_dump($mhs);
        ?>
        <tr align="center">
            <td><?php echo $mhs['id']; ?></td>
            <td><?php echo $mhs['nama']; ?></td>
            <td><?php echo $mhs['nim']; ?></td>
            <td><?php echo $mhs['jurusan']; ?></td>
            <td><?php echo $mhs['email']; ?></td>
            <td><?php echo $mhs['no_hp']; ?></td>
            <td><?php echo $mhs['foto']; ?></td>
            <td>
                <a href="editData.php"><button>Edit</button></a> |
                <a href="hapusData.php"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <hr />
    <table>
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2"></td>
            <!-- <td rowspan="2"></td> -->
            <td>2,4</td>
        </tr>

        <tr>
            <td>3,1</td>
            <td>3,2</td>
            <!-- <td>1</td>
            <td>1</td> -->


        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>

    </table>

</html>