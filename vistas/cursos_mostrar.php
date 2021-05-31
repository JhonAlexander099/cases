<?php
use controladores\CursoControlador;

include_once "config/autocarga.php";
include_once "vistas/layout/header_sistema.php";

$cursoControlador = new CursoControlador();
$resultado = $cursoControlador->mostrar();

echo"<h1 class='text-primary mt-3'>Cursos</h1>";
echo "<table class='table table-striped mt-3 px-2'>
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>Nombre</th>
            <th>Opcion</th>
        </tr>
        </thead>
        <tbody>";
foreach ($resultado as $key=>$curso) {
    echo "<tr>".
    "<td>".($key+1)."</td>".
    "<td>".$curso["nombre"]."</td>".
    "<td>
        <form method='post' action='?eliminar-curso'>
            <input class='btn btn-outline-danger' type='submit' value='Eliminar'>
            <input type='hidden' name='idcurso' value='".$curso["idcurso"]."'>
        </form>
        <a  href = '?eliminar-id=".$curso["idcurso"]."'>Eliminar</a>
        </td>
    </tr>";
}
echo "</tbody>
      </table>";
include_once "vistas/layout/footer.php";




