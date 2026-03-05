<?php
 
 require_once __DIR__."/../config/db.php";

 class Usuarios{
    private $db;

    public function _construct(){
        $this->db=Database::Conectar();
    }

    public function mostrar(){
        $sql="SELECT * FROM Usuarios";

        $result=$this->db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }


    public function save($Nombre,$Apellido,$Documento,$Telefono,$Correo,$Direccion){
        $sql="INSERT INTO Usuarios (Nombre,Apellido,Documento,Telefono,Correo,Direccion)
    VALUES('$Nombre','$Apellido','$Documento','$Telefono','$Correo','$Direccion')";

    return $this->db->query($sql);
    }



    public function GetByid($Id){
        $sql="SELECT * FROM Usuarios WHERE 	Id_usuarios=$Id";

        $result=$this->db->query($sql);

        return $result->fetch_assoc();

    }

    public function update($Id,$Nombre,$Apellido,$Documento,$Telefono,$Correo,$Direccion){
        $sql="UPDATE Usuarios SET Nombre='$Nombre',Apellido='$Apellido',Documento='$Documento',Telefono='$Telefono',Correo='$Correo',Direccion='$Direccion' WHERE Id_usuarios=$Id";

        $result=$this->db->query($sql);
    }


    public function delete($Id){
        $sql="DELETE FROM Usuarios WHERE Id_usuarios=$Id";

        return $this->db->query($sql);

    }
 }
 ?>
