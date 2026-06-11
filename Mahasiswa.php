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

        <tr align="center">
            <td>1</td>
            <td>Aldo Prawiro Akbar</td>
            <td>13242520007</td>
            <td>Teknologi Informasi Digital</td>
            <td>aldoprawiroa@gmail.com</td>
            <td>085187507115</td>
            <td>
                <img src="data:image/jpeg;base64,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"
                    width="50px" height="50px">
            </td>
            <td>
                <a href="editData.php"><button>Edit</button></a> |
                <a href="hapusData.php"><button>Hapus</button></a>
            </td>
        </tr>
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