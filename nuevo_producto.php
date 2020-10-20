<?php

require 'config.php';

if(isset($_POST["guardar"])) {
    $nombre = $_POST["nombre"];
    $marca = $_POST["marca"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $consulta = 'INSERT INTO productos (nombre, marca, precio, descripcion) VALUES ("'.$nombre.'", "'.$marca.'", "'.$precio.'", "'.$descripcion.'")';
    $ejecutar = $conexion->query($consulta);

    if($ejecutar === TRUE) {
        echo '<div class="alert alert-success" role="alert">
        Se creo el producto!
      </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        No se creo el producto. '.$consulta.'
      </div>';
    }
}

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
        <h1>Nuevo Producto</h1>
        <a class="btn btn-primary" href="index.php">Ir al inicio</a>
        <br /> <br /> <hr />
        <form method="post" action="nuevo_producto.php">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descrpción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>
        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
        </form>
    </div>
</body>
</html>