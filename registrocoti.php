<?php

    include("bd.php");

    if(isset($_POST["registrar"])){

        $nombre = $_POST["name_cli"];
        $idcliente = $_POST["id_cli"];
        $ciudad = $_POST["city_cli"]; 
        $email = $_POST["email_cli"];
        $cel = $_POST["cel_cli"];
        $descripcion = $_POST["descripcion"];
        $foto= $_POST["foto"];

        $transaccion = new BaseDatos();
        $consultaSQL = "INSERT INTO cotizacion(name_cli, id_cli, city_cli, email_cli, cel_cli, descrip_prod, foto_prod) VALUES ('$nombre','$idcliente','$ciudad','$email','$cel','$descripcion','$foto')";
        $transaccion->agregarDatos($consultaSQL);
        header("location:vehiculos.php");
    }


?>