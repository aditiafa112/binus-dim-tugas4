<!DOCTYPE html>
<html>

<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <?php include "navigation.php"; ?>
        <h1>Tambah Barang</h1>
        <form action="index.php?action=create" method="POST">
            <label for="nama">Nama Barang:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="satuan">Satuan:</label><br>
            <input type="text" id="satuan" name="satuan" required><br><br>

            <input type="submit" value="Tambah">
        </form>
        <a class="btn btn-back mt-3" href="index.php?action=index">Kembali ke Daftar Barang</a>
    </div>
</body>

</html>