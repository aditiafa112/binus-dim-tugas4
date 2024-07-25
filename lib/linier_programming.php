<?php
require_once 'lib/linier_programming.php';

function optimize() {
    // Contoh data input untuk linier programming
    $harga_barang = [1000, 2000, 1500];
    $stok_barang = [100, 50, 75];
    $max_budget = 100000;

    $result = simplex_method($harga_barang, $stok_barang, $max_budget);
    return $result;
}

function simplex_method($harga, $stok, $budget) {
    // Contoh sederhana solusi linier programming
    $n = count($harga);
    $solusi = array_fill(0, $n, 0);

    for ($i = 0; $i < $n; $i++) {
        if ($harga[$i] * $stok[$i] <= $budget) {
            $solusi[$i] = $stok[$i];
            $budget -= $harga[$i] * $stok[$i];
        } else {
            $solusi[$i] = intval($budget / $harga[$i]);
            break;
        }
    }

    return $solusi;
}
?>
