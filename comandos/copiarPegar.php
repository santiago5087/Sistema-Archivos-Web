<?php

    $nombre = $_POST["nombre"];
    $rutaPegar = $_POST["rutaPegar"];
    $direccion = $_POST["direccion"];
    echo shell_exec("cp -R " . "." . $direccion . $nombre . " ." . $direccion . $rutaPegar);

?>