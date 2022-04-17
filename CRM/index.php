<?php include("./asset/head.php") ?>
<body>
    
    

<section class="ingreso">


<div id="parallax-image">
        <div class="row h-100">
            <div class="col-md-12 align-self-center"><?php
    // si el formulario no ha sido enviado
    //genera un nuevo formulario
    if (!isset($_POST['submit'])) {
    ?>




<h1>CRM BRAIN PROJECT</h1>
    
    
    <div class="container">
  <div class="row">
    <div class="col">
    La customer relationship management, más conocida por sus siglas CRM, puede tener varios significados:Administración basada en la relación con los clientes, un modelo de gestión de toda la organización, basada en la satisfacción del cliente (u orientación al mercado según otros autores)
    </div>
    <div class="col">
      <form method="post" action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de usuario:</label>
    <input type="text" class="form-control" name="nombredeusuario" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="contrasena">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>

    



    <?php

        //si el formuario no ha sido enviado
        // Verificar los datos proporcionados
        // Contra la base de datos
    } else {
        $nombredeusuario = $_POST['nombredeusuario'];
        $contrasena = $_POST['contrasena'];

        // Verifica datos de entrada

        if (empty($nombredeusuario)) {
            die("Error: Por favor escriba su nombre de usuario.");
        }
        if (empty($contrasena)) {
            die("Error: Por favor escriba su contraseña.");
        }

        // Intenta establecer conexion con la base de datos

        try {
            $pdo = new PDO('mysql:dbname=app; host=localhost', 'root', '');
        } catch (PDOException $e) {
            die("Error: No fue posible conectarse: " . $e->getMessage());
        }

        // Limpia los caracteres especiales de los datos de entrada

        $nombredeusuario = $pdo->quote($nombredeusuario);

        // Verifica si existe el nombre de usuario

        $sql = "SELECT COUNT(*) FROM usuarios WHERE NOMBREUSUARIO = $nombredeusuario";
        if ($result = $pdo->query($sql)) {
            $row = $result->fetch();
            // Si es positivo busca la contraseña cifrada

            if ($row[0] == 1) {
                $sql = "SELECT CONTRASENA FROM usuarios WHERE NOMBREUSUARIO = $nombredeusuario";

                // Cifra la contraseña ingresada en el formulario
                // La verifica contra la contraseña cifrada que reside en la base de datos
                // Si ambas conciden la contraseña es correcta

                if ($result = $pdo->query($sql)) {
                    $row = $result->fetch();
                    $salt = $row[0];
                    if ($contrasena == $salt) {
                        echo 'Sus credenciales de acceso fueron verificadas positivamente.';
                         header("Location: inicio.php");
                    } else {
                        echo 'Ha ingresado una contraseña incorrecta.';
                    }
                } else {
                    echo "ERROR: No fue posible ejecutar $sql. " . print_r($pdo->errorInfo());
                }                
            } else {
                echo 'Ha ingresado un usuario incorrecto.';
               
            }
        } else {
            echo "Error: No fue posible ejecutar $sql." . print_r($pdo->errorInfo());
        }

        // Cierra Conexion

        unset($pdo);
    }

    ?>
               
            </div>
        </div>
    </div>




</section>
<?php include("./asset/footer.php") ?>