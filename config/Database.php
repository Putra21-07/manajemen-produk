<?php
class Database {
    private \System.Management.Automation.Internal.Host.InternalHost = "localhost";
    private \ = "db_manajemen_produk";
    private \ = "root";
    private \ = "";
    public \;

    public function getConnection() {
        \->conn = null;
        try {
            \->conn = new PDO("mysql:host=" . \->host . ";dbname=" . \->db_name, \->username, \->password);
            \->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException \) {
            echo "Koneksi database gagal: " . \->getMessage();
        }
        return \->conn;
    }
}
?>
