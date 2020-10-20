<?php

require 'config.php';

$consulta = 'SELECT * FROM productos';
$ejecutar = $conexion->query($consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Productos</h1>
        <a class="btn btn-primary" href="nuevo_producto.php">Nuevo Producto</a>
        <br /> <br />
        <?php
            while($producto = mysqli_fetch_array($ejecutar)) {
                echo '<h3>'.$producto["nombre"].'</h3>
                <p><b>'.$producto["marca"].'</b></p>
                <p>'.number_format($producto["precio"]).'</p>
                <small>'.$producto["descripcion"].'</small><br /><br />
                <a href="editar_producto.php?id='.$producto["id"].'&nombre='.$producto["nombre"].'&marca='.$producto["marca"].'&precio='.$producto["precio"].'&descripcion='.$producto["descripcion"].'">Editar</a>&nbsp;&nbsp;<a href="eliminar_producto.php?id='.$producto["id"].'">Eliminar</a>';
            }
        ?>
    </div>
</body>
</html>