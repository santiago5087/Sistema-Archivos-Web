<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Lectura de archivos</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  
    <script src="script.js"></script>
</head>
<body>
    <?php
        
        if (empty($_GET["nomdir"])) {
            $nomdir = "./system/";
        }
        
        else {
            if ($_GET["nomdir"] == "./system/.." or substr($_GET["nomdir"], -2) == "/.") {
                $nomdir = "./system/";
            }

            elseif (substr($_GET["nomdir"], -2) == "..") {
                $nomdir = substr($_GET["nomdir"], 0, -3);
                $arregloRutaInv = array_reverse(str_split($nomdir));

                while($arregloRutaInv[0] != "/") {
                    array_splice($arregloRutaInv, 0, 1);
                }

                $arregloRuta = array_reverse($arregloRutaInv);
                $nomdir = implode('', $arregloRuta);
            }

            else {
                $nomdir = $_GET["nomdir"] . "/";
            }
        }

        echo "<h3>Contenido de $nomdir</h3>\n";
        $dir = opendir($nomdir); //Abre el directorio indicado
        
        echo '<pre class="container">';
        echo "<b>";
        echo str_pad("Nombre", 40); //str_pad rellena un string
        echo str_pad("Tamaño", 10);
        echo "</b></pre>\n";
        echo "<hr /><pre>\n";

        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col s6 m6">';
        while(($fichero = readdir($dir)) !== FALSE) { //Recorre el contenido del directorio
            
            if (is_dir($nomdir . $fichero)) {   //Se concatena el string
                if ($fichero == "." or $fichero =="..") {
                    echo '<label> <span><a href="?nomdir=' . urlencode($nomdir . $fichero) .'">';
                    echo $fichero;
                    echo '</a></span></label>';
                }
                else {
                    echo '<label><input type="checkbox" class="menu-dir filled-in" /> <span><a href="?nomdir=' . urlencode($nomdir . $fichero) .'">'; //Se envía el nombre del directorio codificado
                    echo $fichero;
                    echo "</a></span></label>";
                }
                echo str_repeat(" ", 40 - strlen($fichero));    
                echo "-";
            } 
            else {
                echo '<label><input type="checkbox" class="menu-arch filled-in" /> <span>' . str_pad($fichero, 40);
                echo '</span></label>';
                echo str_pad(filesize($nomdir . $fichero), 10);
            }
            echo "<br />\n";
        }
        
        closedir($dir);
        echo '</div>';
        echo '<div class="col s4 m4">';
        echo '<div class="row">';
        echo '<div class="container" id="matriz">';    
        echo '</div></div></div>';
        echo '</div></div>';

        ?>

        <div class="row segunda">
            <form method="POST" class="formulario">
                <input type="text" class="validate" id="nombreArchivo" placeholder="Nombre">
                <input type="button" class="btn waves-effect waves-light" value="Crear Archivo" onclick="crear_archivo('<?php echo $nomdir ?>');">
            </form>

            <form method="POST" class="formulario">
                <input type="text" class="validate" id="nombreDirectorio" placeholder="Nombre">
                <input type="button" class="btn waves-effect waves-light" value="Crear Directorio" onclick="crear_directorio('<?php echo $nomdir ?>');">
            </form>

            <form method="POST" class="formulario">
                <input type="text" class="validate" id="nombrePermisos" placeholder="Nombre">
                <input type="button" class="btn waves-effect waves-light" value="Ver permisos" onclick="ver_permisos('<?php echo $nomdir ?>');">
            </form>
        </div>

        <div class="row segunda">
            <form method="POST" class="formulario">
                <input type="text" class="validate" id="nombreCopiar" placeholder="Nombre elemento a copiar">
                <input type="text" class="validate" id="rutaPegar" placeholder="Ruta para pegar">
                <input type="button" class="btn waves-effect waves-light" value="Pegar" onclick="copiar_pegar('<?php echo $nomdir ?>');">
            </form>

        </div>




        <div id="resultados"></div>       

    <?php

    echo "</pre></hr />\n";
    chmod($nomdir . "perro.txt", 0777);
    $prueba = chmod($nomdir . "prueba.txt", 0000);
    echo "<pre>$prueba</pre>";
    $salida = shell_exec("ls -l " . $nomdir . "/" );
    echo "<pre>$salida</pre>";

    ?>

  <script src="eventos.js"></script>
</body>
</html>