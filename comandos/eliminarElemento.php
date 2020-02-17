<?php

    $nombreArchivo = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    shell_exec("rm -R " . "." . $direccion . $nombreArchivo);

?>