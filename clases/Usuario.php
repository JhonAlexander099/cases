<?php
namespace clases;
use config\ConexionDB;
include_once "config/autocarga.php";

class Usuario
{
    private $idusuario;
    private $codigo;
    private $password;

    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function datos_login(String $user){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT password FROM usuarios WHERE codigo=$user";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function guardar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "INSERT INTO usuarios(codigo, password) VALUES ('$this->codigo', '$this->password')";
            $resultado = $conexion->exec($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }
}




