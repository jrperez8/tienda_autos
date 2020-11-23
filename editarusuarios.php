<?php

    include ("bd.php");

    $id=$_GET["id"];

    if(isset($_POST["btnEditar"])){
        $nombre=$_POST["nameEditar"];
        $city=$_POST["cityEditar"];
        $email=$_POST["emailEditar"];
        $cel=$_POST["celEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $foto= $_POST["fotoedit"];
        $transaccion= new BaseDatos();

        

        $consultaSQL="UPDATE cotizacion SET name_cli='$nombre',city_cli='$city',email_cli='$email',cel_cli='$cel',descrip_prod='$descripcion',foto_prod='$foto' WHERE id_cot='$id'";
        $transaccion->editarDatos($consultaSQL);

        header("location:vehiculos.php");
    }
?>
