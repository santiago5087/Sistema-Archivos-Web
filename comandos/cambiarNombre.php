<?php

    $nombre = $_POST["nombre"];
    $nuevoNombre = $_POST["nuevoNombre"];
    $direccion = $_POST["direccion"];
    echo shell_exec("mv " . "." . $direccion . $nombre . " ." . $direccion . $nuevoNombre);

?>