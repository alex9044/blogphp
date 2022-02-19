<?php

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $db = "taller6";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    if(!$conexion){
        die("La conexion no fue realizado con suceso");
    }else {
        $acentos = $conexion->query("SET NAME 'utf8'");
    }

?>