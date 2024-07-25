<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <?php include "navigation.php"; ?>
    <h1>Edit Barang</h1>
    <form action="index.php?action=edit&id=<?= $barang['id'] ?>" method="POST">
        <label for="nama">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama" value="<?= $barang['nama'] ?>" required><br><br>
        
        <label for="satuan">Satuan:</label><br>
        <input type="text" id="satuan" name="satuan" value="<?= $barang['satuan'] ?>" required><br><br>
        
        <input type="submit" value="Simpan Perubahan">
    </form>
    <a href="index.php?action=index">Kembali ke Daftar Barang</a>
</body>
</html>
