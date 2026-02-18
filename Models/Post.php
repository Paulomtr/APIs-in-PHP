<?php
class Post {
    private $conn;
    private $table_name = "posts";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getAll(){
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Métodos adicionais: getById, create, update, delete
}
