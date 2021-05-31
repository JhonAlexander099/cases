<?php
use controladores\UsuarioControlador;
include_once "controladores/CursoControlador.php";

$id = $_POST["idcurso"];
$cursoControlador = new CursoControlador();
echo $cursoControlador->eliminar($id);
