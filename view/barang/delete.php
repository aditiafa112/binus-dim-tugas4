<!DOCTYPE html>
<html>
<head>
    <title>Hapus Barang</title>
</head>
<body>
    <?php include "navigation.php"; ?>
    <h1>Hapus Barang</h1>
    <p>Apakah Anda yakin ingin menghapus barang berikut?</p>
    <p>Nama: <?= $barang['nama'] ?></p>
    <p>Satuan: <?= $barang['satuan'] ?></p>
    
    <form action="index.php?action=delete&id=<?= $barang['id'] ?>" method="POST">
        <input type="hidden" name="confirm" value="yes">
        <input type="submit" value="Ya, Hapus">
    </form>
    <a href="index.php?action=index">Batal</a>
</body>
</html>
