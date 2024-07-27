<!DOCTYPE html>
<html>

<head>
    <title>Tambah Penjualan</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <?php include "navigation.php"; ?>
        <h1>Tambah Penjualan</h1>
        <form action="index.php?action=penjualan-create" method="POST">
            <label for="id_barang">Nama Barang:</label><br>
            <select name="id_barang" id="id_barang">
                <?php foreach ($barang as $item) : ?>
                    <option value="<?= $item['id'] ?>"><?= $item['nama'] ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="jumlah_penjualan">Jumlah penjualan:</label><br>
            <input type="number" id="jumlah_penjualan" name="jumlah_penjualan" required><br><br>

            <label for="harga_jual">Harga Jual:</label><br>
            <input type="number" id="harga_jual" name="harga_jual" required><br><br>


            <input type="submit" value="Tambah">
        </form>
        <a class="btn btn-back mt-3" href="index.php?action=penjualan">Kembali ke Daftar penjualan</a>
    </div>
</body>

</html>