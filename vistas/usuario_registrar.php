<?php
use controladores\UsuarioControlador;
include_once "config/autocarga.php";
include_once "vistas/layout/header.php";
?>
<h1>Registrar Usuario</h1>
<form method="post" action="?registrar-usuario">
    <input type="text" name="user" placeholder="Usuario"><br>
    <input type="text" name="pass" placeholder="Contraseña">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $usuarioControlador = new UsuarioControlador();
    echo $usuarioControlador->guardar($user, $pass);
    echo "<a href='?login'>ir a login</a>"; 
}
include_once "vistas/layout/footer.php";

