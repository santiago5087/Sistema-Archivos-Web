<?php

    $nombreV = $_POST["nombreV"];
    $nombreN = $_POST["nombreN"];
    $direccion = $_POST["direccion"];
    shell_exec("mv " . "." . $direccion . $nombreV . " ." . $direccion . $nombreN);

?>