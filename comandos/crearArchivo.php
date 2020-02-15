<?php

    $nombreArchivo = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    shell_exec("touch " . "." . $direccion . $nombreArchivo);

?>