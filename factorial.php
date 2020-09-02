<!DOCTYPE html>
<html>
<head>
<title>Proyecto 3.3: Calculadora Factorial</title>
</head>
<body>
<h2>Proyecto 3.3: Calculadora Factorial</h2>
<?php
//si el formulario no se ha enviado
//presenta el formulario
if (!isset($_POST['submit'])){
?>
<form method="post" action="factorial.php">
    Ingresa un numero: <br />
    <input type="text" name="num" size="3" />
    <p>
    <input type="submit" name="submit" value="Enviar" />
</form>
<?php
//si el formulario no se ha enviado
//procesa los datos de entrada
} else {
    //recuperar el numero del formulario
    $num=$_POST['num'];

    if ($num <= 0){
        echo 'Error: por favor ingrese un valor superior a 0';
        exit();
    }
    //calcula el factorial
    //multiplicamos el nmero por
    //todos los numeros entre el y el 1
    $factorial=1;
    for ($x=$num; $x >= 1; $x--){
        $factorial *= $x;
    }
    echo "El fatorial de $num es: $factorial";
}
?>
</body>
</html>