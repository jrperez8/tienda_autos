<?php

 class BaseDatos{

 	public $usuarioBD="root";
 	public $passwordBD="";


 	public function __construct(){}


 	public function conectarBD(){

 		
 		try {
 			$infoBD="mysql:host=localhost;dbname=autos";
 			$conexionBD=new PDO($infoBD,$this->usuarioBD,$this->passwordBD);
 			return($conexionBD);

 		}catch(PDOException $error){

 			echo($error->getMessage());
 		}
	 }
	 
	 public function agregarDatos($consultaSQl){
		 $conexionBD = $this->conectarBD();
		 $consultaInsertarDatos= $conexionBD->prepare($consultaSQl);
		 $resultado= $consultaInsertarDatos->execute();
		 if($resultado){
			 echo("Registro Agregado con Éxito");
		 }else{
			 echo("Error al Registrar");
		 }
	 }

	 public function consultarDatos($consultaSQl){
		 $conexionBD = $this->conectarBD();
		 $consultaBuscarDatos= $conexionBD->prepare($consultaSQl);
		 $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
		 $consultaBuscarDatos->execute();
		 return ($consultaBuscarDatos->fetchAll());
	 }
 }

?>