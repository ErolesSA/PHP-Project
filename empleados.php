<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="empleados.css">
    <title>Projecto 7.2: Añadir empleados a una base de datos.</title>
</head>

<body>
    <h2>Projecto 7.2: Añadir empleados a una base de datos.</h2>
    <h3>Añade un nuevo empleado: </h3>

    <?php
    //Si el formulario no ha sido enviado procesa los datos.

    if (isset($_POST['submit'])) {

        // Conectarse a una base de datos MySql

        $mysqli = new mysqli("localhost", "root", "", "empleados");
        if ($mysqli === false) {
            die("Error: No es posible conectarse a una base de datos" . mysqli_connect_error());
        }

        // Abrir Mensaje

        echo '<div id="message">';

        // Recuperar y verificar los valores de entrada

        $inputError = false;
        if (empty($_POST['emp_nombre'])) {
            echo 'Error: Por favor ingrese una nombre de empleado valido';
            $inputError = true;
        } else {
            $nombre = $mysqli->escape_string($_POST['emp_nombre']);
        }

        if ($inputError != true && empty($_POST['emp_puesto'])) {
            echo 'Error: Por favor ingrese un puesto valido';
            $inputError = true;
        } else {
            $puesto = $mysqli->escape_string($_POST['emp_puesto']);
        }

        // Añade valores a la base de datos con consulta INSERT

        if ($inputError != true) {
            $sql = "INSERT INTO empleados (nombre, puesto) VALUES ('$nombre', '$puesto')";
            if ($mysqli->query($sql) === true) {
                echo 'Nuevo registro de empleado añadido con ID: ' . $mysqli->insert_id;
            } else {
                echo "Error: No fue posible ejecutar la consulta: $sql" . $mysqli->error;
            }
        }

        // Cierra el bloque de mensaje
        echo '</div>';

        // Cerrar la conexion
        $mysqli->close();
    }

    ?>
    </div>

    <form action="empleados.php" method="post">
        Nombre del empleado: <br />
        <input type="text" name="emp_nombre" size="40" />
        <p />
        Puesto del empleado: <br />
        <input type="text" name="emp_puesto" size="40" />
        <p />
        <input type="submit" name="submit" value="Enviar" />

    </form>

    

</body>

</html>