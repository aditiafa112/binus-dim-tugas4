<?php
require_once 'model/Barang.php';

class BarangController {
    private $barangModel;

    public function __construct() {
        $this->barangModel = new Barang();
    }

    public function index() {
        $barang = $this->barangModel->getAll();
        include 'view/barang/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $satuan = $_POST['satuan'];
            $this->barangModel->create($nama, $satuan);
            header("Location: index.php?action=index");
        } else {
            include 'view/barang/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $satuan = $_POST['satuan'];
            $this->barangModel->update($id, $nama, $satuan);
            header("Location: index.php?action=index");
        } else {
            $barang = $this->barangModel->getById($id);
            include 'view/barang/edit.php';
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['confirm'] == 'yes') {
            $this->barangModel->delete($id);
            header("Location: index.php?action=index");
        } else {
            $barang = $this->barangModel->getById($id);
            include 'view/barang/delete.php';
        }
    }
    
}
?>
