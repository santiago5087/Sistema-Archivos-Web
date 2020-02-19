<?php

    $nombre = $_POST["nombre"];
    $rutaMover = $_POST["rutaMover"];
    $direccion = $_POST["direccion"];
    echo shell_exec("mv " . "." . $direccion . $nombre . " ." . $direccion . $rutaMover);

?>