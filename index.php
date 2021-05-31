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
    default:
    include_once "vistas/404.php";
}


