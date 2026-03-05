<?php

require_once __DIR__."/../models/Auth.php";

class AuthController{

    public function login(){

        if($_POST){
        
            if(session_status() === PHP_SESSION_NONE){
                session_start();
            }

            $correo = $_POST['correo'];
            $password = $_POST['password'];

            $model = new Auth();
            $login = $model->login($correo,$password);

            if($login){

                $_SESSION['user'] = $login['Nombre'];
                $_SESSION['rol'] = strtolower($login['Nombre_rol']);

                if($_SESSION['rol'] == 'admin'){
                    header("Location: index.php?controller=admin&action=index");
                    exit;
                }

                if($_SESSION['rol'] == 'empleado'){
                    header("Location: index.php?controller=empleado&action=index");
                    exit;
                }

                header("Location: index.php?controller=cliente&action=index");
                exit;
            }

            echo "Credenciales incorrectas";
        }

        require_once __DIR__."/../views/Auth/login.php";
    }

    public function register(){

      if($_POST){
        $errores=[];
        $model = new Auth();
        $resultado = $model->register($_POST); 

         if($resultado===true){
             header("Location: index.php?controller=auth&action=login");
             exit;
         }
        
         if(is_array($resultado)){
             $errores = array_merge($errores,$resultado);
             require_once __DIR__."/../views/Auth/register.php";
             return;        
         }
        
                    
      }
      require_once __DIR__."/../views/Auth/register.php";
    }
            
    

    public function logout(){

        session_start();
        session_destroy();

        header("Location: index.php");
    }
}
?>