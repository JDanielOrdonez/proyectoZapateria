<?php

//Regresa todos los calzados según lo que se selecciono en categorias
function catalogoSelected($id){
  try{
      require 'conexion.php';
      $resultados = $conexion->query("SELECT id_producto,marca,precio,url_img FROM productos WHERE tipo_calzado = '$id'
      GROUP BY marca
      HAVING COUNT(*)>=1;");
      return $resultados;

  }catch(PDOException $e){
      return false;
  }
}


//Regresa solo un zapato que se halla seleccionado al para comprar
function seleccion($id){
    try{        
        require 'conexion.php';
        $select = $conexion->query("SELECT * FROM productos WHERE id_producto = '$id'");
        return $select;
    }catch(PDOException $e) {
		  return false;
    }
}



?>