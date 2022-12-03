<?php 
  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'reticula_sistemas';
    private $username = 'root';
    private $password = 'pass';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        //$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        //$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn = mysqli_connect('base_de_datos',$this->username, $this->password, $this->db_name);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }