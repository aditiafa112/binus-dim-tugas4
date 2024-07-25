<?php
require_once 'model/Barang.php';
require_once 'model/Pembelian.php';
require_once 'model/Penjualan.php';
require_once 'lib/linier_programming.php';

class LaporanController {
    private $barangModel;
    private $pembelianModel;
    private $penjualanModel;

    public function __construct() {
        $this->barangModel = new Barang();
        $this->pembelianModel = new Pembelian();
        $this->penjualanModel = new Penjualan();
    }

    public function index() {
        $report = $this->barangModel->getReport();
    
        $barang = $this->barangModel->getAll();
        $pembelian = $this->pembelianModel->getAll();
        $penjualan = $this->penjualanModel->getAll();
        $optimize = optimizeSales($barang, $pembelian, $penjualan);
        
        include 'view/laporan/index.php';
    }
} 
?>
