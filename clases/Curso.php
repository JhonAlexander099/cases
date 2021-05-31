<?php
namespace clases;
use config\ConexionDB;
include_once "config/autocarga.php";

class Curso
{
    private $id;
    private $nombre;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function mostrar(int $id=0){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            if($id==0){
                $query = "SELECT * FROM curso";
            }else{
                $query = "SELECT * FROM curso WHERE idcurso=$id";
            }
            
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
            $query = "INSERT INTO curso(nombre) VALUES ('$this->nombre')";
            $resultado = $conexion->exec($query);
            $objConexion->cerrar();
        }catch (PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function actualizar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "UPDATE curso SET nombre='$this->nombre' WHERE idcurso=$this->id";
            $resultado = $conexion->exec($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function eliminar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "DELETE FROM curso WHERE idcurso =(int)$this->id";
            $resultado = $conexion->exec($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

}