<?php
include_once "config/autocarga.php";

$estudianteControlador = new \controladores\EstudianteControlador();
$resultado = $estudianteControlador->mostrar();

echo "<table>";
foreach ($resultado as $estudiante) {
    echo "<tr>" .
            "<td>" . $estudiante["nombres"] . "</td>
          </tr>";
}
echo "</table>";


