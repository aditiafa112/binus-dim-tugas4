<?php
require_once 'database.php';

class Pembelian {
    private $conn;

    public function __construct() {
        $this->conn = connect();
    }

    public function getAll() {
        $sql = "SELECT pembelian.id, pembelian.jumlah_pembelian, pembelian.harga_beli, pembelian.id_barang, barang.nama, barang.satuan FROM pembelian JOIN barang ON barang.id = pembelian.id_barang";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($id_barang, $jumlah_pembelian, $harga_beli) {
        $sql = "INSERT INTO pembelian (id_barang, jumlah_pembelian, harga_beli) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("iii", $id_barang, $jumlah_pembelian, $harga_beli);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM pembelian WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>