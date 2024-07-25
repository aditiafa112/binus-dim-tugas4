<?php
require_once 'model/Barang.php';

class LaporanController {
    private $barangModel;

    public function __construct() {
        $this->barangModel = new Barang();
    }

    public function index() {
        $barang = $this->barangModel->getAll();
        include 'view/laporan/index.php';
    }
}
?>
