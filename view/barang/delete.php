<!DOCTYPE html>
<html>

<head>
    <title>Hapus Barang</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <?php include "navigation.php"; ?>
        <h1>Hapus Barang</h1>
        <p>Apakah Anda yakin ingin menghapus barang berikut?</p>
        <p>Nama: <?= $barang['nama'] ?></p>
        <p>Satuan: <?= $barang['satuan'] ?></p>

        <div class="flex-row">
            <form action="index.php?action=delete&id=<?= $barang['id'] ?>" method="POST">
                <input type="hidden" name="confirm" value="yes">
                <input class="btn-delete" type="submit" value="Ya, Hapus">
            </form>
            <a class="btn btn-back ml-3" href="index.php?action=index">Batal</a>
        </div>
    </div>
</body>

</html>