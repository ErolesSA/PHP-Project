<!DOCTYPE html PUBLI "-//WEC//DTD XHTML 1.0 Transitional//EN" 
"DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Proyecto 2-1: Convertidor Monetario USD/EUR</title>
</head>
<body>
    <h2>Proyecto 2-1: Convertidor Monetario USD/EUR</h2>

<?php
//define la tasa de cambio
//1.00 USD = 0.85 EUR
define('TASA_DE_CAMBIO', 0.85);

//define la cantidad de dolares
$dolares = 150;

//realiza la convencion y presenta resultados

$euros = $dolares * TASA_DE_CAMBIO;

echo "$dolares USD americanos son equivalentes a: $euros EUR";

?>

</body>
</html>