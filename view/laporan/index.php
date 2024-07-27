<!DOCTYPE html>
<html>

<head>
    <title>Laporan Rugi Laba</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <?php include "navigation.php"; ?>
        <h1>Laporan Rugi Laba</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Total Biaya Pembelian</th>
                <th>Total Pendapatan Penjualan</th>
                <th>Laba Rugi</th>
            </tr>
            <?php foreach ($report as $item) : ?>
                <tr>
                    <td><?= $item['id_barang'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['satuan'] ?></td>
                    <td><?= formatRupiah($item['total_biaya_pembelian']) ?></td>
                    <td><?= formatRupiah($item['total_pendapatan_penjualan']) ?></td>
                    <td><?= formatRupiah($item['laba_rugi']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php if (isset($optimize)) : ?>
            <h3>Max Profit: <?php echo formatRupiah($optimize['max_profit']); ?></h3>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Satuan</th>
                    <th>Total Biaya Pembelian</th>
                    <th>Total Pendapatan Penjualan</th>
                    <th>Laba Rugi</th>
                </tr>
                <?php foreach ($report as $item) : ?>
                    <tr>
                        <td><?= $item['id_barang'] ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['satuan'] ?></td>
                        <td><?= formatRupiah($item['total_biaya_pembelian']) ?></td>
                        <td><?= formatRupiah($item['total_pendapatan_penjualan']) ?></td>
                        <td><?= formatRupiah($item['laba_rugi']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else : ?>
            <p>No optimization data available.</p>
        <?php endif; ?>
    </div>
</body>

</html>