<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pembelian</title>
</head>
<body>
    <?php include "navigation.php"; ?>
    <h1>Daftar Pembelian</h1>
    <a href="index.php?action=pembelian-create">Tambah Pembelian</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Beli</th>
        </tr>
        <?php foreach ($pembelian as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['jumlah_pembelian'] ?></td>
            <td><?= $item['harga_beli'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>