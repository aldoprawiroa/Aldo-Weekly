<?php

$koneksi = mysqli_connect("localhost", "root", "", "aldweekly");

function tampildata($query)
{
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahData($data)
{
    global $koneksi;

    $nama     = htmlspecialchars($data['nama']);
    $NIM      = htmlspecialchars($data['NIM']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $Email    = htmlspecialchars($data['Email']);
    $no_hp    = htmlspecialchars($data['no-hp']);

    $namaFoto = $_FILES['Foto']['name'];
    $tmpFoto  = $_FILES['Foto']['tmp_name'];

    if (!move_uploaded_file($tmpFoto, "assets/img/" . $namaFoto)) {
    return 0;
}

    $query = "INSERT INTO mahasiswa
            (nama, nim, jurusan, email, no_hp, foto)
            VALUES
            ('$nama','$NIM','$jurusan','$Email','$no_hp','$namaFoto')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubahData($data)
{
    global $koneksi;

    $id       = htmlspecialchars($data['id']);
    $nama     = htmlspecialchars($data['nama']);
    $NIM      = htmlspecialchars($data['NIM']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $Email    = htmlspecialchars($data['Email']);
    $no_hp    = htmlspecialchars($data['no-hp']);

    $fotoLama = $data['fotoLama'];

    if ($_FILES['Foto']['error'] == 4) {
        $namaFoto = $fotoLama;
    } else {
        $namaFoto = $_FILES['Foto']['name'];
        $tmpFoto = $_FILES['Foto']['tmp_name'];

        move_uploaded_file($tmpFoto, "assets/img/" . $namaFoto);
    }

    $query = "UPDATE mahasiswa SET
                nama='$nama',
                nim='$NIM',
                jurusan='$jurusan',
                email='$Email',
                no_hp='$no_hp',
                foto='$namaFoto'
              WHERE id='$id'";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapusData($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

    return mysqli_affected_rows($koneksi);
}

?>