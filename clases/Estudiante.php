<?php
namespace clases;
use config\ConexionDB;

include_once "config/autocarga.php";

class Estudiante
{
    public function todos()
    {
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM estudiante";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }   catch (\PDOConexion $e){
            echo "Error: " . $e->getMessage();
            exit();
        }
        return $resultado;
    }
}
