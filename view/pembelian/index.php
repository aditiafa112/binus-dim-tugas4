<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pembelian</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <?php include "navigation.php"; ?>
        <h1>Daftar Pembelian</h1>
        <a class="btn mb-3" href="index.php?action=pembelian-create">Tambah Pembelian</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga Beli</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($pembelian as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['jumlah_pembelian'] ?></td>
                    <td><?= formatRupiah($item['harga_beli']) ?></td>
                    <td>
                        <form action="index.php?action=pembelian-delete&id=<?= $item['id'] ?>" method="POST">
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