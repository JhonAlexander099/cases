<?php

namespace controladores;
use clases\Estudiante;
use clases\Usuario;
use config\ConexionDB;

include_once "config/autocarga.php"; 

class EstudianteControlador
{
    public function mostrar():\PDOStatement
    {
        $estudiante = new Estudiante();
        $resultado = $estudiante->todos();
        return $resultado;
    }
}


