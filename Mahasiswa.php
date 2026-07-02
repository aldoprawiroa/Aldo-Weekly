<?php

    //API
    require 'fungsi.php';
    $query = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($query);

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
        $no=1;
        foreach($mahasiswas as $mhs) :
            
        
        ?>
        <tr align="center">
            <td><?php echo $no; ?></td>
            <td><?php echo $mhs['nama']; ?></td>
            <td><?php echo $mhs['nim']; ?></td>
            <td><?php echo $mhs['jurusan']; ?></td>
            <td><?php echo $mhs['email']; ?></td>
            <td><?php echo $mhs['no_hp']; ?></td>
            <td>
                <img src="assets/img/<?php echo $mhs['foto']; ?>" width="80">
            </td>
            <td>

                <a href="editData.php?id=<?php echo $mhs['id']; ?>"><button>Edit</button></a> |
                <a href="hapusData.php?id=<?php echo $mhs['id']; ?>"
                    onclick="return confirm('Data akan dihapus secara permanen. Lanjutkan?');"><button>Hapus</button></a>

            </td>
        </tr>
        <?php
        $no++;
        endforeach;
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