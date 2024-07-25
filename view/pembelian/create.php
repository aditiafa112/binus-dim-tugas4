<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembelian</title>
</head>
<body>
    <?php include "navigation.php"; ?>
    <h1>Tambah Pembelian</h1>
    <form action="index.php?action=pembelian-create" method="POST">
        <label for="id_barang">Nama Barang:</label><br>
        <select name="id_barang" id="id_barang">
            <?php foreach ($barang as $item): ?>
                <option value="<?= $item['id'] ?>"><?= $item['nama'] ?></option>
            <?php endforeach; ?>
        </select><br><br>
        
        <label for="jumlah_pembelian">Jumlah Pembelian:</label><br>
        <input type="number" id="jumlah_pembelian" name="jumlah_pembelian" required><br><br>

        <label for="harga_beli">Harga Beli:</label><br>
        <input type="number" id="harga_beli" name="harga_beli" required><br><br>
        
        
        <input type="submit" value="Tambah">
    </form>
    <a href="index.php?action=pembelian">Kembali ke Daftar Pembelian</a>
</body>
</html>
