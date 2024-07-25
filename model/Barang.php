<?php
require_once 'database.php';
require_once 'lib/linier_programming.php';

class Barang {
    private $conn;

    public function __construct() {
        $this->conn = connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM barang";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM barang WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($nama, $satuan) {
        $sql = "INSERT INTO barang (nama, satuan) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $nama, $satuan);
        return $stmt->execute();
    }

    public function update($id, $nama, $satuan) {
        $sql = "UPDATE barang SET nama = ?, satuan = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $nama, $satuan, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM barang WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getReport() {
        $sql = "
        SELECT 
            b.id AS id_barang,
            b.nama,
            b.satuan,
            COALESCE(SUM(pb.jumlah_pembelian * pb.harga_beli), 0) AS total_biaya_pembelian,
            COALESCE(SUM(pj.jumlah_penjualan * pj.harga_jual), 0) AS total_pendapatan_penjualan,
            COALESCE(SUM(pj.jumlah_penjualan * pj.harga_jual), 0) - COALESCE(SUM(pb.jumlah_pembelian * pb.harga_beli), 0) AS laba_rugi
        FROM 
            barang b
        LEFT JOIN 
            pembelian pb ON b.id = pb.id_barang
        LEFT JOIN 
            penjualan pj ON b.id = pj.id_barang
        GROUP BY 
            b.id, b.nama, b.satuan
        ORDER BY 
            b.id;
        ";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
