<?php

    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    echo shell_exec("ls -l " . "." . $direccion . $nombre);

?>