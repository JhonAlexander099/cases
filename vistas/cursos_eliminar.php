<?php

include_once "controladores/CursoControlador.php";

$id = 4;
$cursoControlador = new CursoControlador();
echo $cursoControlador->eliminar($id);
