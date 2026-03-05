<?php
// Clase para manejar la conexión a la base de datos
class Database{

// Método estático que realiza la conexión
    public static function Conectar(){
        
// Se crea una nueva conexión con MySQL
    $conexion=new mysqli(
        "localhost",// Servidor
        "root",// Usuario
        "",// Contraseña
        "papas store"// Nombre de la base de datos
    );

    if($conexion->connect_errno){
        die($conexion->connect_errno);// Detiene el programa si hay error
    }
    // Retorna la conexión establecida
    return $conexion;
    }
    
}
?>