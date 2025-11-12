<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Program Studi</title>
</head>

<body>

    <h1>Edit Data Program Studi</h1>

    <?php echo form_open('Prodi/update'); ?>

    <input type="hidden" name="id_prodi" value="<?php echo $prodi['id_prodi']; ?>">

    <label for="kode_prodi">Kode Prodi:</label><br>
    <input type="text" id="kode_prodi" name="kode_prodi"
        value="<?php echo $prodi['kode_prodi']; ?>" required><br><br>

    <label for="nama_prodi">Nama Prodi:</label><br>
    <input type="text" id="nama_prodi" name="nama_prodi"
        value="<?php echo $prodi['nama_prodi']; ?>" required><br><br>

    <button type="submit">Simpan Perubahan</button>
    <a href="<?php echo site_url('Prodi'); ?>">Batal</a>

    <?php echo form_close(); ?>

</body>

</html>