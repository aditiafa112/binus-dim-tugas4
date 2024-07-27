<!DOCTYPE html>
<html>

<head>
    <title>Daftar Penjualan</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <?php include "navigation.php"; ?>
        <h1>Daftar Penjualan</h1>
        <a class="btn mb-3" href="index.php?action=penjualan-create">Tambah Penjualan</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah Penjualan</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($penjualan as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['jumlah_penjualan'] ?></td>
                    <td><?= formatRupiah($item['harga_jual']) ?></td>
                    <td>
                        <form action="index.php?action=penjualan-delete&id=<?= $item['id'] ?>" method="POST">
                            <input type="hidden" name="delete" value="yes">
                            <input class="btn-delete" type="submit" value="Hapus">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>