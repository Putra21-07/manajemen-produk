<?php
class Product {
    private \;
    private \ = "products";

    public function __construct(\) {
        \->conn = \;
    }

    public function getAll() {
        \ = "SELECT * FROM " . \->table_name . " ORDER BY id DESC";
        \ = \->conn->prepare(\);
        \->execute();
        return \;
    }

    public function create(\, \, \) {
        \ = "INSERT INTO " . \->table_name . " (nama_produk, harga, stok) VALUES (:nama, :harga, :stok)";
        \ = \->conn->prepare(\);
        
        \ = htmlspecialchars(strip_tags(\));
        \ = htmlspecialchars(strip_tags(\));
        \ = htmlspecialchars(strip_tags(\));

        \->bindParam(":nama", \);
        \->bindParam(":harga", \);
        \->bindParam(":stok", \);

        if(\->execute()) {
            return true;
        }
        return false;
    }

    public function getById(\) {
        \ = "SELECT * FROM " . \->table_name . " WHERE id = ? LIMIT 0,1";
        \ = \->conn->prepare(\);
        \->bindParam(1, \);
        \->execute();
        return \->fetch(PDO::FETCH_ASSOC);
    }

    public function update(\, \, \, \) {
        \ = "UPDATE " . \->table_name . " SET nama_produk = :nama, harga = :harga, stok = :stok WHERE id = :id";
        \ = \->conn->prepare(\);

        \ = htmlspecialchars(strip_tags(\));
        \ = htmlspecialchars(strip_tags(\));
        \ = htmlspecialchars(strip_tags(\));
        \ = htmlspecialchars(strip_tags(\));

        \->bindParam(":id", \);
        \->bindParam(":nama", \);
        \->bindParam(":harga", \);
        \->bindParam(":stok", \);

        if(\->execute()) {
            return true;
        }
        return false;
    }

    public function delete(\) {
        \ = "DELETE FROM " . \->table_name . " WHERE id = ?";
        \ = \->conn->prepare(\);
        \->bindParam(1, \);
        if(\->execute()) {
            return true;
        }
        return false;
    }
}
?>
