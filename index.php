<?php
    require_once "clases/conexion/conexion.php";

    $conexion = new conexion;

    $query = "insert into pacientes (DNI)value('0')";

    print_r($conexion->obtenerDatos($query));
?>