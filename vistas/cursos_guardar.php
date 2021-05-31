<?php
 include_once "controladores/CursoControlador.php";
 ?>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post"> 
        <input type="text" name="nombre" placeholder="ingrese nombre">
        <input type="submit" name="submit" value="Guardar">
    </form>
<?php
if(isset($_POST["submit"]))    {
    $nombre = $_POST["nombre"];
    $cursoControlador = new CursoControlador();
    echo $cursoControlador->guardar($nombre);
}

