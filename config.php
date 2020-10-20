<?php

$host = "localhost";
$db = "tienda";
$user = "root";
$pw = "";

$conexion = new mysqli($host, $user, $pw);

$database = mysqli_select_db($conexion, $db);

?>