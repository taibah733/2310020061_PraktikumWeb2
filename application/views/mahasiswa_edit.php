<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa oleh Nama dan NIM</title>
</head>

<body>
    <h1>Form Edit Mahasiswa</h1>
    <form action="<?php echo site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
        <label for="nim">NIM</label>
        <input type="text" name="nim" value="<?php echo $mahasiswa->NIM ?>"><br>
        <label for="nama_mhs">Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" value="<?php echo $mahasiswa->nama_mhs ?>"><br>
        <input type="submit" value="Perbaharui">
    </form>
</body>

</html>