<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rugi Laba</title>
</head>
<body>
    <h1>Laporan Rugi Laba</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Total Penjualan</th>
        </tr>
        <?php foreach ($barang as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['harga'] ?></td>
        <td><?= $item['stok'] ?></td>
        <td><?= $item['harga'] * $item['stok'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>