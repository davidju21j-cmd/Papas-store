<?php
require_once __DIR__."/../config/db.php";

class Marcas {

    private $db;

    public function __construct(){
        $this->db = Database::Conectar();
    }

    public function getAll(){
        $result = $this->db->query("SELECT * FROM marcas");
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function save($Marca){
        $stmt = $this->db->prepare("INSERT INTO marcas (Marca) VALUES (?)");
        $stmt->bind_param("s", $Marca);
        return $stmt->execute();
    }

    public function update($Id,$Marca){
        $stmt = $this->db->prepare("UPDATE marcas SET Marca=? WHERE Id_marca=?");
        $stmt->bind_param("si", $Marca, $Id);
        return $stmt->execute();
    }

    public function delete($Id){
        return $this->db->query("DELETE FROM marcas WHERE Id_marca=".(int)$Id);
    }
}