<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 6.2: Crea una galeria de imagenes</title>
    <link rel="stylesheet" href="style6.2.css">
</head>
<body>
    <h2>Proyecto 6.2: Crea una galeria de imagenes</h2>
    <ul>
        <?php
        // Define la ubicacion de las img

        $dirFotos = "./img";

        // Define ciales extensiones de archivos son img
        $exFotos = array('gif', 'jpg', 'jpeg', 'tif', 'tiff', 'bmp', 'png');

        // Inicilisa la matrix para conservar los nombres de archibos de las img

        $listaFotos = array();

        // Lee el contenido del directorio
        // Construye una lista de fotos
        if(file_exists($dirFotos))
        {
            $dp = opendir($dirFotos) or die ('Error: no es posible abrir el directorio');
            while($archivo = readdir($dp))
            {
                if($archivo != '.' && $archivo != '..')
                {
                    $datosArchivo = pathinfo($archivo);
                    if(in_array($datosArchivo['extension'], $exFotos))
                    {
                        $listaFotos[] = "$dirFotos/$archivo";
                    }
                }
            }
            closedir($dp);
        } else {
            die ('Error: El directorio no existe');
        }

        // Itera sobre la lista de fotos
        // Muestra cada foto y el nombre de archivo

        if(count($listaFotos) > 0)
        {
            for($x=0; $x<count($listaFotos); $x++)
            {
  ?>          
  
      <li>
          <img height="150" width="200" src="<?php echo $listaFotos[$x]; ?>" />
          <?php echo basename($listaFotos[$x]); ?><br />
          <?php echo round(filesize($listaFotos[$x]) /1024) . 'KB'; ?>
      </li>

      <?php
         }
        } else {
            die('Error: No se encontraron imagenes en el directorio.');
        }
      ?>    
    </ul>
</body>
</html>