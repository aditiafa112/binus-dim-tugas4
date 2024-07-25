<?php
function calculateProfitLoss($barang, $pembelian, $penjualan) {
    $labaRugi = [];

    foreach ($barang as $b) {
        $id_barang = $b['id'];
        $total_biaya_pembelian = 0;
        $total_pendapatan_penjualan = 0;

        foreach ($pembelian as $pb) {
            if ($pb['id_barang'] == $id_barang) {
                $total_biaya_pembelian += $pb['jumlah_pembelian'] * $pb['harga_beli'];
            }
        }

        foreach ($penjualan as $pj) {
            if ($pj['id_barang'] == $id_barang) {
                $total_pendapatan_penjualan += $pj['jumlah_penjualan'] * $pj['harga_jual'];
            }
        }

        $laba_rugi = $total_pendapatan_penjualan - $total_biaya_pembelian;
        $labaRugi[$id_barang] = [
            'id_barang' => $id_barang,
            'nama' => $b['nama'],
            'satuan' => $b['satuan'],
            'total_biaya_pembelian' => $total_biaya_pembelian,
            'total_pendapatan_penjualan' => $total_pendapatan_penjualan,
            'laba_rugi' => $laba_rugi
        ];
    }

    return $labaRugi;
}

function optimizeSales($barang, $pembelian, $penjualan) {

    $profitLoss = calculateProfitLoss($barang, $pembelian, $penjualan);

    $max_profit = 0;
    $best_combination = [];

    // Simple brute-force approach to find the best combination
    $total_items = count($profitLoss);
    for ($i = 0; $i < pow(2, $total_items); $i++) {
        $combination = [];
        $current_profit = 0;
        for ($j = 0; $j < $total_items; $j++) {
            if ($i & (1 << $j)) {
                $combination[] = $profitLoss[$barang[$j]['id']];
                $current_profit += $profitLoss[$barang[$j]['id']]['laba_rugi'];
            }
        }
        if ($current_profit > $max_profit) {
            $max_profit = $current_profit;
            $best_combination = $combination;
        }
    }

    return [
        'max_profit' => $max_profit,
        'combination' => $best_combination
    ];
}
?>
