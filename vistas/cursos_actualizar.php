<?php
    include_once "controladores/CursoControlador.php";
    $cursoControlador = new CursoControlador();

    $id=6;
    $nombre = $cursoControlador->mostrarPorId($id);
    
?>
    <form action="<?=$_SERVER["PHP_SELF"] ?>" method="post"> 
       <input type="text" name="nombreNuevo" value="<?=$nombre?>" placeholder="ingrese nombre">
       <input type="hidden" name="idcurso" value="<?=$id?>">
        <input type="submit" name="submit" value="Guardar">
    </form>
<?php
if(!empty($_POST)){
    $nombreNuevo = $_POST["nombreNuevo"];
    $id = $_POST["idcurso"];
    echo $cursoControlador->modificar($nombreNuevo, $id); 
}
?>

