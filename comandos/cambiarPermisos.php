<?php

    $nombre = $_POST["nombreE"];
    $direccion = $_POST["direccion"];
    $usuario = $_POST["us"];
    $grupo = $_POST["gr"];
    $otros = $_POST["oth"];

    shell_exec("chmod -R ". $usuario . $grupo . $otros . " ." . $direccion . $nombre);

?>