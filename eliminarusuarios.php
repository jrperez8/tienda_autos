<?php
    include("bd.php");

    $id = $_GET["id"];
    $transaccion = new BaseDatos();
    $consultaSQL = "DELETE FROM cotizacion WHERE id_cot='$id'";
    $transaccion->eliminarDatos($consultaSQL);
    header("location:vehiculos.php");
?>