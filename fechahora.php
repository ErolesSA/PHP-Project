<?php
/*
// regresa el sello cronológico del 5 de enero de 2008 a las 10:15
// datos de salida: 1199508300
echo mktime(10,15,00,1,5,2008);


// obtiene la fecha y horas actuales como una matriz
$hoy = getdate();
// datos de salida: 'Fecha y hora actual 19:26:23 del 12-11-2007'
echo 'Fecha y hora actual ' . $hoy ['hours'] . ':' . $hoy ['minutes'] .
':' . $hoy ['seconds'] . ' del ' . $hoy ['mday'] . '-' . $hoy ['mon'] .
'-' . $hoy ['year'];
*/

// datos de salida: "Hora y fecha actual: 12:28 pm 20 Mar 2008"
echo ' Hora y fecha actual: ' . date("h:i a d M Y",
mktime(12,28,13,3,20,2008));
// datos de salida: " Hora y fecha actual: 8:15 14 Feb 2008"
echo ' Hora y fecha actual: ' . date("H:i d F Y",
mktime(8,15,0,2,14,2008));
// datos de salida: "La fecha de hoy es Oct-05-2007"
echo 'La fecha de hoy es ' . date("M-d-Y", mktime(0,0,0,10,5,2007));



?>