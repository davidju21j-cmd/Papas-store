<?php

require_once __DIR__."/../config/db.php";

class Auth {

    private $conexion;

    public function __construct(){
        $this->conexion = Database::Conectar();
    }

    // LOGIN
    public function login($correo,$password){

        $sql = $this->conexion->prepare("SELECT u.*, r.Nombre_rol
            FROM usuarios u
            INNER JOIN user_rol ur ON u.Id_usuarios = ur.id_usuario
            INNER JOIN rol r ON r.Id_rol = ur.id_rol
            WHERE u.Correo = ? LIMIT 1");

        $sql->bind_param("s",$correo);
        $sql->execute();

        $resultado = $sql->get_result();

        if($resultado->num_rows > 0){

            $usuario = $resultado->fetch_assoc();

            if(password_verify($password,$usuario['Contraseña'])){
                return $usuario;
            }
        }

        return false;
    }

    // REGISTER (CLIENTE POR DEFECTO)
    public function register($datos){
        
        $errores = [];
        $password_hash = password_hash($datos['password'],PASSWORD_DEFAULT);

        $sql2= $this->conexion->prepare("SELECT Correo FROM usuarios WHERE Correo = ?");
         

         $sql2->bind_param("s",$datos['correo']);
         $sql2->execute();

         $resultado = $sql2->get_result();

         if($resultado->num_rows > 0){
             $errores[] = "El correo ya está registrado";
        
         }

         if(count($errores) > 0){
             return $errores;
         }

        $sql = $this->conexion->prepare("INSERT INTO usuarios
            (Nombre,Apellido,Documento,Telefono,Correo,Direccion,Contraseña)
            VALUES (?,?,?,?,?,?,?)");

        $sql->bind_param("sssssss",
            $datos['nombre'],
            $datos['apellido'],
            $datos['documento'],
            $datos['telefono'],
            $datos['correo'],
            $datos['direccion'],
            $password_hash
        );

        if($sql->execute()){

            $id_usuario = $this->conexion->insert_id;

            // Buscar rol cliente
            $rol = "Cliente";

            $sqlRol = $this->conexion->prepare("SELECT Id_rol FROM rol WHERE Nombre_rol = ? ");

            $sqlRol->bind_param("s",$rol);
            $sqlRol->execute();

            $resultadoRol = $sqlRol->get_result();

            if($fila = $resultadoRol->fetch_assoc()){

                $id_rol = $fila['Id_rol'];

                $sqlUserRol = $this->conexion->prepare("INSERT INTO user_rol (id_usuario,id_rol)
                    VALUES (?,?)");

                $sqlUserRol->bind_param("ii",$id_usuario,$id_rol);

                return $sqlUserRol->execute();
            }
        }

        return false;
    }
}
?>