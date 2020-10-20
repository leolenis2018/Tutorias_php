<?php

require 'config.php';

$id = $_GET["id"];

$consulta = 'DELETE FROM productos WHERE id = '.$id.'';
$ejecutar = $conexion->query($consulta);

if($ejecutar === TRUE) {
    header("Location: index.php");
} else {
    echo '<div class="alert alert-danger" role="alert">
        No se elimino el producto. '.$consulta.'
    </div>';
}

?>