<?php
// define funcion
// obtine el MCD de dos numeros

function mcd($a, $b)
{
    if ($b == 0) {
        return $a;
    } else {
        return mcd($b, $a % $b);
    }
}
// define una funcion
// obtiene el mcm de dos numeros utilizando el MCD

function mcm($a, $b)
{
    return ($a * $b) / mcd($a, $b);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 5-1: MCD y mcm</title>
</head>

<body>
    <h2>Proyecto 5-1: MCD y mcm</h2>
    <?php
    // si el formulario no ha sido enviado 
    // presenta el formulario
    if (!isset($_POST['submit'])) {
    ?>

        <form action="mcd_mcm.php" method="post">
            Escriba dos numeros enteros: <br />
            <input type="text" name="num_1" size="3" />
            <p>
                <input type="text" name="num_2" size="3" />
                <p>
                    <input type="submit" name="submit" value="Enviar" />
        </form>

    <?php

        // si el formulario ha sido enviado
        // procesa los datos de entrada
    } else {
        $num_1 = (int)$_POST['num_1'];
        $num_2 = (int)$_POST['num_2'];

        // calcula y presenta el MDC y el MCM

        echo "Usted escribio los numeros: $num_1, $num_2";
        echo "<br />";
        echo "El MCD de ( $num_1 , $num_2) es " . mcd($num_1, $num_2);
        echo "<br />";
        echo "El mcm de ( $num_1 , $num_2) es " . mcm($num_1, $num_2);
    }
    ?>
</body>

</html>