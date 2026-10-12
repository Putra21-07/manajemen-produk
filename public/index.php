<?php
require_once __DIR__ . '/../controllers/ProductController.php';

$controller = new ProductController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>