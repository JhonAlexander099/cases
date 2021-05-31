<?php

include_once "vistas/layout/header.php";
session_start();
if(!isset($_SESSION["autenticado"])){
    header ("location: index.php?login");
}


?>
<h1>Bienvenido</h1>
<a href="?logout">logout</a>
<?php
include_once "vistas/layout/footer.php";

