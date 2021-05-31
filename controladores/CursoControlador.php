<?php
namespace controladores;
use clases\Curso;

include_once "config/autocarga.php";

class CursoControlador
{
    public function mostrar(){
        $curso =  new Curso();
        return $curso->mostrar();
    }

    public function mostrarPorId(int $id){
        $curso =  new Curso();
        $resultado = $curso->mostrar($id);
        foreach ($resultado as $curso){
            $nombre = $curso["nombre"]; 
        }
        return $nombre;
    }
    
    public function guardar(String $nombre): String{
        $curso =  new Curso();
        $curso->setNombre($nombre);
        
        if($curso->guardar()!=0){
            $resultado = "Curso Guardado";
        } else{
            $resultado = "Curso no guardado";
        }
        
        return $resultado;
    }

    public function eliminar(int $id): String{
        $curso =  new Curso();
        $curso->setId($id);
        if($curso->eliminar()!=0){
            $resultado = "Curso Eliminado";
        } else{
            $resultado = "Curso no Eliminado";
        }
        
        return $resultado;
    }

    public function modificar(string $nombreNuevo, int $id): string
    {
        $curso =  new Curso();
        $curso->setId($id);
        $curso->setNombre($nombreNuevo);
        if($curso->actualizar() !=0){
            $resultado = "Curso actualizado";
        }else { 
            $resultado = "Curso no actualizado";
        }
        return $resultado;
    }
}