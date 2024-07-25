<?php
require_once 'database.php';

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
}
?>
