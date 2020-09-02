<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 6-1: Leer y escribir archivos de configuración</title>
</head>
<body>
    <h2>Proyecto 6-1: Leer y escribir archivos de configuración</h2>
    <?php
    // Define el nombre del archivo de configuracion y la ruta de acceso

    $configFile = 'config.ini';

    // Si el formulario no ha sido enviado lo presenta

    if(!isset($_POST['submit'])){

    // Establece una matriz con paramatros por defecto
    $datos = array();
    // Correo electronico del Adm.
    $datos['AdminEmailAddress'] = null;
    // Autor de la pagina
    $datos['DefAuthor'] = null;

    // Numero de mensajes en la pagina principal
    $datos['NumPosts'] = null;
    // Numeros de comentarios
    $datos['NumComments'] = null;
    // Direccion Web para notificar la colocacion de nuevos mensajes
    $datos['NotifyURL'] = null;

    // Lee los actuales datos de config. los utiliza para llenar los campos del formulario
    if (file_exists($configFile)){
        $lineas = file($configFile);
        foreach ($lineas as $linea){
            $matriz = explode('=', $linea);
            $i = count($matriz) - 1;
            $datos[$matriz[0]] = $matriz[$i];
        }
    }

?>

<form action="configurar.php" method="post">
Direccion de correo electronico del administrador: <br />
<input type="text" size="50" name="data[AdminEmailAddress]" value="<?php echo $datos['AdminEmailAddress']; ?>" />
<p>
Nombre del autor por defecto: <br />
<input type="text" name="data[DefAuthor]" value="<?php echo $datos['DefAuthor']; ?>" />
<p>
Numero de mensajes en la pagina de inicio: <br />
<input type="text" size="4" name="data[NumPosts]" value="<?php echo $datos['NumPosts']; ?>" />
<p>
Numeros de comentarios anonimos: <br />
<input type="text" size="4" name="data[NumComments]" value="<?php echo $datos['NumComments']; ?>" />
<p>
URL para la notificacion automatica de nuevos mensajes: <br />
<input type="text" size="50" name="data[NotifyURL]" value="<?php echo $datos['NotifyURL']; ?>" />
<p>
<input type="submit" name="submit" value="Enviar" />
</form>
<?php
// Si el formulario ha sido enviado , procesa los datos de entrada
} else{
    // Lee los datos enviados
    $config = $_POST['data'];

    // Valida los datos enviados conforme sea nesesario

    if((trim($config['NumPosts']) != '' && (int)$config['NumPosts'] <=0) || (trim($config['NumComments']) != '' && (int)$config['NumComments'] <= 0)){
        die('Error: Por favor escriba un numero valido');
    }
    //Abre y bloquea el archivo de config. para escritura

    $fp = fopen($configFile, 'w+') or die('Error: No es posible escribir el archivo de configuracion para escritura');
    flock($fp, LOCK_EX) or die('Error: No es posible bloquear el archivo de config. para escritura');

    // Escribe cada uno de los valores de congf. en el archivo

    foreach ($config as $clave => $valor){
        if(trim($valor) != ''){
            fwrite($fp, "$clave=$valor \n") or die('Error: No es posible escribir clave en el archivo [$clave] en el archivo de confg.');
        }
    }
    // Cierra y guarda el archivo

    flock($fp, LOCK_UN) or die('Error: No es posible desbloquear el archivo');
    fclose($fp);
    echo 'Los datos de config. han sido escritos con exito en el archivo.';
}
?>
</body>
</html>