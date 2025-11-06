<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mahasiswa oleh Taibah 2310020061</title>
</head>

<body>
    <h1>Selamat Datang di Web Taibah</h1>
    <a href="<?php echo site_url('mahasiswa/tambah') ?>">Tambah</a>
    <a href="<?php echo site_url('mahasiswa/cetak') ?>">Cetak</a>"
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                    <td>
                        <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>">Edit</a>
                        <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>