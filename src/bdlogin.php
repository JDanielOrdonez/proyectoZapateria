<?php session_start();

$errores = '';

if ($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password); #aqui encriptamos la contraseña


	#conectarnos a la base de datos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=inventario','root','');#nos conectamos al servidor

		#hacemos la consulta preparada diciendo: selecciona todo de usuarios donde n_usuario(de la base de datos) sea igual a :usuario y password(de la base de datos) sea igual a :pass 
		$statement = $conexion->prepare('SELECT * FROM clientes WHERE correo = :usuario AND contrasena = :pass');

		#aqui estamos ejecutando la consulta y pasandole mediante un array los valores que el usuario escribio en el formulario
		$statement->execute(array(':usuario'=>$usuario,':pass'=>$password));

		#la varibale resultado guardara lo que $statement devuelva pero lo devolvera de manera legible con fetch()
		#devolvera los datos del usuario, usuario, id y contraseña
		$resultado = $statement->fetch();
	
		
		if ($resultado != false) {
			$_SESSION['usuario']=$usuario;#creamos una secion	
			
			if ($usuario == "admin1823@zapateriaguera.com") {
				$conexion = new PDO('mysql:host=localhost;dbname=inventario','root','');
				$resultados = $conexion->query("SELECT correo FROM clientes WHERE correo = '$usuario'"); 
				foreach ($resultados as $key) {
					header('Location: ../paginacion/dashboard.php');
				}
			
			}else{
				header('Location: ../index.php');
				
			}
		}else{
			$errores .= '<Span>Datos incorrectos</Span>';
			
		}

	} catch (PDOException $e) {
		echo "Error: " + $e->getMessage();
	}
}
require 'ilogin.php';
?>
