<!DOCTYPE html>
<html>
<head>
<title>Proyecto 4-4: Calculadora de Edades</title>
</head>
<body>
<h2>Proyecto 4-4: Calculadora de Edades</h2>

<?php
//si el formulario no se ha envieado 
//muestra el formulario
if(!isset($_POST['submit'])){
?>
<form action="calculaedad.php" method="post"> 
    Escribe tu fecha de nacimiento en formato mm/dd/aaaa: <br />
    <input type="text" name="fdn" />
    <p>
        <input type="submit" name="submit" value="Enviar" />

</form>
<?php
//si el formulario ha sido enviado
// procesa los datos enviados
} else{
    
    //divide el valor de la fecha en sus componentes
    $fechaArr= explode('/', $_POST['fdn']); 

    //calcula el sello cronologico correspondiente al valor de la fecha
    $fechaTs = strtotime($_POST['fdn']);

    //calcula el sello cronologico correspondiente al dia de hoy, today
    $now = strtotime('today');

    //verifica si los datos han sido enviados en la forma correcta
    if(sizeof($fechaArr) != 3){
        die ('ERROR: Por favor escriba una fecha valida');
    }
    //verifica si los datos insertados son una fecha valida
    if(!checkdate($fechaArr[0], $fechaArr[1], $fechaArr[2])){
        die ('Por favor escriba una fecha de nacimiento valida');
    }
    //verifica que la fecha sea anterior a hoy
    if($fechaTs >= $now){
        die('ERROR: Por favor escriba una fecha anterior a hoy');
    }

    //calcula la fecha de nacimiento entre la fecha de nacimiento y el dia de hoy en dias
    //convierte en años
    //convierte los dias restantes en meses
    //presenta los datos de salida

    $edadDias = floor(($now - $fechaTs) / 86400);
    $edadAnos = floor($edadDias / 365);
    $edadMeses = floor(($edadDias - ($edadAnos * 365)) / 30);
    echo "Su edad aproximada es $edadAnos años y $edadMeses meses";

}

?>
</body>

</html>