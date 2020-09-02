<?php

//intenta conectarte con la bd

$mysqli = new mysqli("localhost", "root", "", "inventario");
if ($mysqli === false) {
    die("Error: No se establecio la conexion. " . mysqli_connect_error());
}

//intenta ejecutar una consulta
//itera sobre coleccion de resultados
//muestra cada registro de datos
// datos de salida

$sql = "SELECT ID_ARTISTA, NOMBRE_ARTISTA, LUGAR_DE_NACIMIENTO FROM artistas";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            echo $row[0] . ": " . $row[1] . ": " . $row[2] . "\n <br>";
        }
        $result->close();
    } else {
        echo 'Error: no se encontro ningun registro que coincida con la busqueda';
    }
} else {
    echo "Error: No fue posible ejecutar $sql." . $mysqli->error;
}

//Cierra la conexion

$mysqli->close();

?>