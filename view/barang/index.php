<!DOCTYPE html>
<html>

<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <?php include "navigation.php"; ?>
        <h1>Daftar Barang</h1>
        <a class="btn mb-3" href="index.php?action=create">Tambah Barang</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($barang as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['satuan'] ?></td>
                    <td>
                        <a class="btn btn-edit mr-1" href="index.php?action=edit&id=<?= $item['id'] ?>">Edit</a>
                        <a class="btn btn-delete" href="index.php?action=delete&id=<?= $item['id'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>