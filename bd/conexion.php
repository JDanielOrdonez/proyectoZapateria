<?php

try{
	
	$conexion = new PDO('mysql:host=localhost;dbname=inventario','root','');//localhost o 127.0.0.1	
}catch(PDOException $e){	
	"Error " . $e->getMessage();
}
?>