<?php
require_once 'database.php';

class penjualan {
    private $conn;

    public function __construct() {
        $this->conn = connect();
    }

    public function getAll() {
        $sql = "SELECT penjualan.id, penjualan.jumlah_penjualan, penjualan.harga_jual, penjualan.id_barang, barang.nama, barang.satuan FROM penjualan JOIN barang ON barang.id = penjualan.id_barang";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($id_barang, $jumlah_penjualan, $harga_jual) {
        $sql = "INSERT INTO penjualan (id_barang, jumlah_penjualan, harga_jual) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("iii", $id_barang, $jumlah_penjualan, $harga_jual);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM penjualan WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>