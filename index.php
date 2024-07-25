<?php
require_once 'controller/BarangController.php';
require_once 'controller/LaporanController.php';
require_once 'controller/PembelianController.php';


// Default action
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = null;

// Determine which controller to use
switch ($action) {
    case 'create':
        $controller = new BarangController();
        $controller->create();
        break;
    case 'edit':
        $controller = new BarangController();
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $controller->edit($id);
        break;
    case 'delete':
        $controller = new BarangController();
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $controller->delete($id);
        break;
    case 'index':
        $controller = new BarangController();
        $controller->index();
        break;
    case 'pembelian':
        $controller = new PembelianController();
        $controller->index();
        break;
    case 'pembelian-create':
        $controller = new PembelianController();
        $controller->create();
        break;
    case 'laporan':
        $controller = new LaporanController();
        break;
    default:
        $controller = new BarangController();
        $controller->index();
        break;
}

// Call the appropriate method
// switch ($action) {
//     case 'create':
//         $controller->create();
//         break;
//     case 'edit':
//         $id = isset($_GET['id']) ? $_GET['id'] : 0;
//         $controller->edit($id);
//         break;
//     case 'delete':
//         $id = isset($_GET['id']) ? $_GET['id'] : 0;
//         $controller->delete($id);
//         break;
//     case 'laporan':
//         $controller->index();
//         break;
//     default:
//         $controller->index();
//         break;
// }
?>
