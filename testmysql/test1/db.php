<?php

$mysqli = new mysqli(
    "localhost",
    "root",
    "",
    "inventario"
);
if($mysqli === false){
    die ("Error: No se establecio la conexion. " . mysqli_connect_error());
} 


?>
