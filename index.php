<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <?php
    require 'ceksesi.php';
    require 'class/mahasiswa.php';
    $mahasiswa = new Mahasiswa();
    $data = $mahasiswa->TampilMahasiswa();
    $no = 1;
    ?>
    <table border="1">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            foreach ($data as $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nim'] ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['kodeprodi'] ?></td>
                    <td><?= $value['namaprodi'] ?></td>
                    <td>
                        <a href="edit.php?nim=<?= $value['nim'] ?>">Edit</a>
                        <a href="aksi.php?nim=<?= $value['nim'] ?>">Hapus</a>

                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    <hr>
    <a href="aksi.php?aksi=logout">Logout</a>
</body>

</html>