<?php

    $nombreArchivo = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    shell_exec("touch " . "." . $direccion . $nombreArchivo);
    echo '<h3>Archivo creado con el nombre ' . $nombreArchivo . ' y la ruta ' . $direccion . '</h3>';

?>