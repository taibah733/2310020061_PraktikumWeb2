<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daftar Program Studi</title>
</head>

<body>

    <h1>Selamat Datang di Web Metode Result Array - Program Studi</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php
            foreach ($resultarray as $row):
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode_prodi']; ?></td>
                    <td><?php echo $row['nama_prodi']; ?></td>

                    <td>
                        <a href="<?php echo site_url('Prodi/edit/' . $row['id_prodi']); ?>">Edit</a> |
                        <a href="<?php echo site_url('Prodi/hapus/' . $row['id_prodi']); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>