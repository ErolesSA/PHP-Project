<?php

// Connect to a database

$mysqli = new mysqli("localhost", "root", "", "inventario");
if ($mysqli === false){
    die ("Error: The connection was not established" . mysqli_connect_error());
}

// try to run query
// show register

$sql = "SELECT ID_ARTISTA, NOMBRE_ARTISTA FROM ARTISTAS";
if ($result = $mysqli->query($sql)){
    if ($result->num_rows > 0){
        while ($row = $result->fetch_object()){
            echo $row->ID_ARTISTA . ":" . $row->NOMBRE_ARTISTA . "\n <br>";
        }
        $result->close();
    } else {
        echo "No record was found that matches your search. ";
    }
} else {
    echo "Error: Imposible run $sql" . $mysqli->error;
}

//Close connection

$mysqli->close();

?>