<?php

//echo $_SERVER["REQUEST_METHOD"];

$ruta = strtolower($_SERVER["QUERY_STRING"]);
switch($ruta){
    case "login": 
        include_once "vistas/usuario_login.php";
        break;
    case "registrar-usuario": 
        include_once "vistas/usuario_registrar.php";
        break;
    case "bienvenido":
        include_once "vistas/welcome.php";
        break;
    case "logout":
        include_once "vistas/logout.php";
        break;
    case "mostrar-curso":
        include_once "vistas/cursos_mostrar.php";
        break;
    case "crear-curso":
        include_once "vistas/cursos_guardar.php";
        break;
    case "actualizar-curso":
        include_once "vistas/cursos_actualizar.php";
        break;
    case "eliminar-curso":
        include_once "vistas/cursos_eliminar.php";
        break;                      
    default:
    include_once "vistas/404.php";
}


