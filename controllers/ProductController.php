<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    private $db;
    private $product;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);
    }

    public function index() {
        $stmt = $this->product->getAll();
        include __DIR__ . '/../views/products/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama_produk'] ?? '';
            $harga = $_POST['harga'] ?? '';
            $stok = $_POST['stok'] ?? '';

            if (!empty($nama) && is_numeric($harga) && is_numeric($stok)) {
                if ($this->product->create($nama, $harga, $stok)) {
                    header("Location: index.php?action=index");
                    exit();
                }
            }
            $error = "Gagal menambah produk. Pastikan data terisi benar.";
        }
        include __DIR__ . '/../views/products/create.php';
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header("Location: index.php?action=index");
            exit();
        }

        $prod = $this->product->getById($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama_produk'] ?? '';
            $harga = $_POST['harga'] ?? '';
            $stok = $_POST['stok'] ?? '';

            if (!empty($nama) && is_numeric($harga) && is_numeric($stok)) {
                if ($this->product->update($id, $nama, $harga, $stok)) {
                    header("Location: index.php?action=index");
                    exit();
                }
            }
            $error = "Gagal mengupdate produk.";
        }
        include __DIR__ . '/../views/products/edit.php';
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->product->delete($id);
        }
        header("Location: index.php?action=index");
        exit();
    }
}
?>