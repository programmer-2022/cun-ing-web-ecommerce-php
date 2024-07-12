<?php
class Database {
    
    //LocalHost
    private $host = "localhost";
    private $db_name = "ecommerce_cun_db";
    private $username = "root";
    private $password = "";
    private $conn;

    //Production
    // private $host = "sql212.ezyro.com";
    // private $db_name = "ezyro_36886222_eccomerce_db";
    // private $username = "ezyro_36886222";
    // private $password = "2e9129a";
    // private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>