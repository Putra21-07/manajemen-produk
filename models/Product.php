<?php
class Product {
    private $conn;
    private $table_name = "products";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create($nama, $harga, $stok) {
        $query = "INSERT INTO " . $this->table_name . " (nama_produk, harga, stok) VALUES (:nama, :harga, :stok)";
        $stmt = $this->conn->prepare($query);
        
        $nama = htmlspecialchars(strip_tags($nama));
        $harga = htmlspecialchars(strip_tags($harga));
        $stok = htmlspecialchars(strip_tags($stok));

        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nama, $harga, $stok) {
        $query = "UPDATE " . $this->table_name . " SET nama_produk = :nama, harga = :harga, stok = :stok WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $nama = htmlspecialchars(strip_tags($nama));
        $harga = htmlspecialchars(strip_tags($harga));
        $stok = htmlspecialchars(strip_tags($stok));

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>