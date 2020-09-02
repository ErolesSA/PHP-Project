<?php
// Definir valores a ser insertados

$canciones = array (
    array('Shine on you crazy diamond', 4, 3),
    array('Paranoid', 4, 4),
    array('Schism', 4, 4),
    array('Sad but true', 4, 3)
);

// Intentar establecer la conexion con la base de datos

$mysqli = new mysqli("localhost", "root", "", "musica");
if ($mysqli === false){
    die("Error: No se establecio la conexion" . mysqli_connect_error());
}

// Preparar la consulta modelo
// Eecutar varias veces

$sql = "INSERT INTO canciones(cancion_titulo, ex_cancion_artista, ex_cancion_rating) VALUES (?, ?, ?)";
if ($stmt = $mysqli->prepare($sql)){
    foreach ($canciones as $s){
        $stmt->bind_param('sii', $s[0], $s[1], $s[2]);
        if ($stmt->execute()){
            echo "Nueva cancion con id " . $mysqli->insert_id . " ha sido añadida. \n <br>";
        } else {
            echo "Error: No fue posible ejecutar consulta: $sql ." . $mysqli->error;
      }
    }
} else {
    echo "Error: No fue posible preparar consulta: $sql ." . $mysqli->error;
}

// Cerrar conexion

$mysqli->close();

?>