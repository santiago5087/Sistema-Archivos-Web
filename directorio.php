<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Lectura de archivos</title>
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

        echo '<div class="row">';
        echo '<div class="container">';
        echo '<div class="col s8 m8">';
        while(($fichero = readdir($dir)) !== FALSE) { //Recorre el contenido del directorio
            
            if (is_dir($nomdir . $fichero)) {   //Se concatena el string
                if ($fichero == "." or $fichero =="..") {
                    echo '<label> <span><a href="?nomdir=' . urldecode($nomdir . $fichero) .'">';
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
        
        echo '</div></div>';
        echo '<div class="col s4 m4" id="matriz">';
        echo '</div></div>';

        closedir($dir);
        /*
        echo "</pre></hr />\n";
        echo $salida = shell_exec("ls -l " . $nomdir . "/" );
        echo "<pre>$salida</pre>";
        */
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="./eventos.js"></script>
</body>
</html>