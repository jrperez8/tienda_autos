<?php

    include("bd.php");

    if(isset($_POST["registrar"])){

        $nombre = $_POST["nombre_pro"];
        $marca = $_POST["marca_pro"];
        $precio = $_POST["precio_pro"];
        $descripcion = $_POST["descripcion"];

        $transaccion = new BaseDatos();
        $consultaSQL = "INSERT INTO cotizacion(name_prod, marca_prod, precio_prod, descrip_prod) VALUES ('$nombre','$marca','$precio','$descripcion')";
        $transaccion->agregarDatos($consultaSQL);
    }


?>