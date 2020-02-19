<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style.css">

    <title>Lectura de archivos</title>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script
    src="materialize/js/jquery-2.2.4.js"
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

        echo "<h3>Contenido de " . substr($nomdir, 8) . "</h3>\n";
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
                    echo '<span><a href="?nomdir=' . urlencode($nomdir . $fichero) .'">';
                    echo $fichero;
                    echo '</a></span></label>';
                }                                                                       
                else {
                    echo '<label><input type="radio" name="group1" class="with-gap" onclick="ver_tabla('. "'$nomdir'".','."'$fichero'" .')"  /><span> <img src="materialize/icons/carpeta.png"> <a href="?nomdir=' . urlencode($nomdir . $fichero) .'">'; //Se envía el nombre del directorio codificado
                    echo $fichero;
                    echo "</a></img></span></label>";
                }
                echo str_repeat(" ", 40 - strlen($fichero));    
                echo "-";
            } 
            else {
                echo '<label><input type="radio" name="group1" class="with-gap" onclick="ver_tabla('. "'$nomdir'".','."'$fichero'" .')" /><span> <img src="materialize/icons/archivo.png"> ' . str_pad($fichero, 40);
                echo '</img></span></label>';
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

        <table>
            <tr>
                <td>
                    <form method="POST" class="formulario">
                        <input type="text" class="validate campo" id="nombreArchivo" placeholder="Nombre">
                        <input type="button" class="btn waves-effect waves-light" value="Crear Archivo" onclick="crear_archivo('<?php echo $nomdir ?>');">
                    </form>
                </td>
                <td>
                    <form method="POST" class="formulario">
                        <input type="text" class="validate campo" id="nombreDirectorio" placeholder="Nombre">
                        <input type="button" class="btn waves-effect waves-light" value="Crear Directorio" onclick="crear_directorio('<?php echo $nomdir ?>');">
                    </form>
                </td>
            </tr>
        </table>
</body>
</html>
