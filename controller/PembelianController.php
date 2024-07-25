<?php
require_once 'model/Pembelian.php';
require_once 'model/Barang.php';

class PembelianController {
    private $pembelianModel;
    private $barangModel;

    public function __construct() {
        $this->pembelianModel = new Pembelian();
        $this->barangModel = new Barang();
    }

    public function index() {
        $pembelian = $this->pembelianModel->getAll();
        include 'view/pembelian/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_barang = $_POST['id_barang'];
            $jumlah_pembelian = $_POST['jumlah_pembelian'];
            $harga_beli = $_POST['harga_beli'];
            $this->pembelianModel->create($id_barang, $jumlah_pembelian, $harga_beli);
            header("Location: index.php?action=pembelian");
        } else {
            $barang = $this->barangModel->getAll();
            include 'view/pembelian/create.php';
        }
    }    
}
?>
