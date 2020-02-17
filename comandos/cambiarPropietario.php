<?php

    $nombreE = $_POST["nombreE"];
    $nombreP = $_POST["nombreP"];
    $direccion = $_POST["direccion"];
    shell_exec("chown " . $nombreP . " ." . $direccion . $nombreE);

?>