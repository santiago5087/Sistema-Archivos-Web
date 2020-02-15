<?php

    $nombreDirectorio = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    shell_exec("mkdir " . "." . $direccion . $nombreDirectorio);
    echo '<h3>Directorio creado con el nombre ' . $nombreDirectorio . ' y la ruta ' . "." . $direccion . $nombreDirectorio . '</h3>';

?>