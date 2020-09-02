<!DOCTYPE html>
<html>
    <head></head>
<body>
    <h2>Resultados: </h2><p />

<?php

$a=$_POST['valora'];
$b=$_POST['valorb'];
$tipo=$_POST['accion'];

if (!strcmp("sumar", $tipo)){

    echo "El resultado de la suma es: " .($a+$b);
}
if (!strcmp("restar", $tipo)){

    echo "El resultado de la resta es: " .($a-$b);
}
if (!strcmp("multiplicar", $tipo)){

    echo "El resultado de la multiplicacion es: " .($a*$b);
}
if (!strcmp("dividir", $tipo)){

    echo "El resultado de la divicion es: " .($a/$b);
}
?>

</body>
</html>