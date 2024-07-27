<?php
require_once 'model/Penjualan.php';
require_once 'model/Barang.php';
require_once 'lib/formatRupiah.php';

class PenjualanController {
    private $penjualanModel;
    private $barangModel;

    public function __construct() {
        $this->penjualanModel = new Penjualan();
        $this->barangModel = new Barang();
    }

    public function index() {
        $penjualan = $this->penjualanModel->getAll();
        include 'view/penjualan/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_barang = $_POST['id_barang'];
            $jumlah_penjualan = $_POST['jumlah_penjualan'];
            $harga_jual = $_POST['harga_jual'];
            $this->penjualanModel->create($id_barang, $jumlah_penjualan, $harga_jual);
            header("Location: index.php?action=penjualan");
        } else {
            $barang = $this->barangModel->getAll();
            include 'view/penjualan/create.php';
        }
    }    
    
    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['delete'] == 'yes') {
            $this->penjualanModel->delete($id);
            header("Location: index.php?action=penjualan");
        }
    }
}
?>
