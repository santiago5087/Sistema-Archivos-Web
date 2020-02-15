<?php

    $nombreDirectorio = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    shell_exec("mkdir " . "." . $direccion . $nombreDirectorio);

?>