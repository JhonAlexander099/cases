<?php
namespace controladores;
use clases\Usuario;
include_once "config/autocarga.php";

class UsuarioControlador
{
    public function login(String $user, String $pass){
        $usuario = new Usuario();
        $datos = $usuario->datos_login($user);
        if($datos!=null){
            $passbd = null;
            foreach ($datos as $datosbd){
                $passbd = $datosbd["password"];
            }
            if(password_verify($pass, $passbd)){
                $_SESSION["autenticado"] = 1;
                header( "location: index.php?bienvenido");
                 
            }else{    
                echo "usuario o password no encontrados";           
            }
        }else{
            echo "usuario o password no encontrados";
        }
    }
    public function guardar(String $user, String $pass)
    {
        $usuario = new Usuario();
        $usuario->setCodigo($user);
        $usuario->setPassword(password_hash($pass, PASSWORD_DEFAULT)); /*aca marca error linea 31*/
        $usuario->guardar();
        return "Usuario Guardado";
    }
}