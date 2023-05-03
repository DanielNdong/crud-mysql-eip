<?php

include("conexion.php");
include("funciones.php");

if (isset($_POST["id_sesion"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM sesiones WHERE id = '".$_POST["id_sesion"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["fecha"] = $fila["fecha"];
        $salida["codigo"] = $fila["codigo"];
        $salida["idUsuario"] = $fila["idUsuario"];
    }

    echo json_encode($salida);
}

?>