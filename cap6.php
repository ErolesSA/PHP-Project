<?php
// lee el archivo en una cadena
/*
$cadena = file_get_contents('ejemplo.txt') or die ('ERROR: No se
encuentra el archivo');
echo $cadena;


$matriz = file('http://www.google.com') or die ('Error: No se encuentra el archivo');
foreach ($matriz as $lineaa){
    echo $lineaa;
}


// define función
// lee un bloque de líneas de un archivo
function leeBloque($archivo, $inicio=1, $lineaas=null){
    // abre archivo
    $fp = fopen($archivo, 'r') or die('ERROR: No se encuentra el archivo');
    // inicializa los contadores
    $lineaasRevisadas = 1;
    $lineaasLeidas = 0;
    $salida = '';
    // hace bucle hasta el final del archivo
    while (!feof($fp)){
    // obtiene cada línea
    $lineaa = fgets($fp);
    // si se alcanza la posición de arranque
    // añade la línea a la variable de salida
    if ($lineaasRevisadas >= $inicio){
    $salida .= $lineaa;
    $lineaasLeidas++;
    // si el máximo de líneas está definido y es alcanzado
    // detiene el bucle
 if (!is_null($lineaasLeidas) && $lineaasLeidas == ($lineaas)){
break;
}
}
$lineaasRevisadas++;
}
return $salida;
}
echo leeBloque('ejemplo.txt', 3, 4);


// escribe una línea en el archivo
$datos = "Un pez \n fuera del \n agua\n";
file_put_contents('salida.txt', $datos) or die('ERROR: No es posible
escribir en el archivo');
echo 'Datos escritos en el archivo';
*/

// abre y bloquea archivo
// escribe una cadena de texto en el archivo
// desbloquea y cierra archivo
$datos = "Un pez \n fuera del \n agua\n";
$fp = fopen('salida.txt', 'w') or die('ERROR: No es posible abrir el
archivo');
flock($fp, LOCK_EX) or die ('ERROR: No es posible bloquear el archivo');
fwrite($fp, $datos) or die ('ERROR: No es posible escribir en el
archivo');
flock($fp, LOCK_UN) or die ('ERROR: No es posible desbloquear el
archivo');
fclose($fp);
echo 'Datos escritos en el archivo';

?>