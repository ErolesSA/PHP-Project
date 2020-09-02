<?php
 // Connect to a database

 $mysqli = new mysqli("localhost", "root", "", "inventario");

 if ($mysqli === false){
     die("Error: The connection was not established " . mysqli_connect_error());
 }

// Try to run query
// Add a new record

$sql = "INSERT INTO ARTISTAS (ID_ARTISTA, NOMBRE_ARTISTA, LUGAR_DE_NACIMIENTO) VALUES (2019, 'Maynard James Keenan', 'Akron, Ohio, Estados Unidos')";
if ($mysqli->query($sql)=== true){
    echo 'New artist with id : ' . $mysqli->insert_id  . 'has been added';
} else {
    echo "Error: Dont possible to run $sql" . $mysql->error;
}

// Close connection

$mysqli->close();



?>