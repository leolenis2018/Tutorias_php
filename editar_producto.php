<?php

require 'config.php';

$id = $_GET["id"];
$nombre = $_GET["nombre"];
$marca = $_GET["marca"];
$precio = $_GET["precio"];
$descripcion = $_GET["descripcion"];

if(isset($_POST["actualizar"])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $marca = $_POST["marca"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $consulta = 'UPDATE productos SET nombre = "'.$nombre.'", marca = "'.$marca.'", precio = "'.$precio.'", descripcion = "'.$descripcion.'" WHERE id = '.$id.'';
    $ejecutar = $conexion->query($consulta);

    if($ejecutar === TRUE) {
        header("Location: index.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
            No se actualizo el producto. '.$consulta.'
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
        <h1>Editar Producto</h1>
        <a class="btn btn-primary" href="index.php">Ir al inicio</a>
        <br /> <br /> <hr />
        <form method="post" action="editar_producto.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $marca; ?>" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $precio; ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
        </form>
    </div>
</body>
</html>