<?php
require_once __DIR__ . '/../controllers/ProductController.php';

\ = new ProductController();
\ = \['action'] ?? 'index';

switch (\) {
    case 'create':
        \->create();
        break;
    case 'edit':
        \->edit();
        break;
    case 'delete':
        \->delete();
        break;
    case 'index':
    default:
        \->index();
        break;
}
?>
