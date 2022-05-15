<?php session_start();//indicamos que se iniciaran seciones aqui


#RECIBIR LOS DATOS QUE ESCRIBEN EN EL FORMULARIO PARA INICIAR SESION
if ($_SERVER['REQUEST_METHOD'] == 'POST')#si el metodo de envio($_SERVER['REQUEST_METHOD'])es igual a post es porque los datos ya se 												 enviaron
{
	#1.- creamos una variable que guardara el nombre de usuario que se envia por el metodo POST
	#2.- esta variable 'usuario' es la que se crea en el name del formulario en registrate.view.php
	#3.- strtolower= este es para convertir texto en mayuscula a minuscula
	#4.- filter_var(#variable, FILTER_SANITIZE_STRING) #Elimina etiquetas, opcionalmente elimina o codifica caracteres especiales.
	$usuario = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
	$apellido = filter_var(strtolower($_POST['apellido']), FILTER_SANITIZE_STRING);
	$correo = filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$errores = '';#la dejamos vacia porque si hay errores se le agregara contenido pero si no hay registremos al usuario

	#si algunas de estas tres variables estan vacias(empty) hacer lo siguiente
	if (empty($usuario) or empty($password) or empty($password2) or empty($apellido) or empty($correo)){
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>';#la variable error sera igual a lo que ya tenga(.=) mas una 																			etiqueta li que mostrara los errores	
		
	}else{
		#COMPROBAR QUE EL USUARIO NO SE REPITA
		try{
			#hacemos la conexion a la base de datos
			$conexion = new PDO('mysql:host=localhost;dbname=inventario','root','');


			#preparamos la conexion a la base de datos y decimos, seleccioname o traeme todo de usuarios donde usuarios sea igual al usuario que le pasemos en el formulario pero por seguridad con un limite de 1 es decir solo traera un usuario
			#1.- :usuario= placeholder para no pasar directamente la variable y lugo pasarlo en el execute
			$statement = $conexion->prepare('SELECT * FROM clientes WHERE correo = :correo LIMIT 1');
			$statement->execute(array(':correo' => $correo));#ejecutar la consulta

			#resultado guardara dos cosas, false si es que no hay usuarios repetidos y si si hay, lo traera y se guardara ahi
			$resultado = $statement->fetch();			
			if ($resultado!=false)#si resultado es igual a false significara que no hay usuarios repetidos 
			{
				$errores .= '<span>El correo ya existe</span><br>';	
			}

			// ENCRIPTAR LA CONTRASEÑA
			// PASSWORD SERA IGUAL AL METODO HASH QUE ES PARA ENCRIPTAR 
			// sha512 = algoritmo de encriptacion
			// pasamos el valor que queremos encriptar
			$password = hash('sha512', $password);
			$password2 = hash('sha512', $password2);

			#checamos si la contraseña 1 es diferente a la 2
			if ($password != $password2) {
				$errores .= '<span>Las contraseñas no son iguales</span>';
			}

		}catch(PDOExeption $e){
			echo "Error: " . $e->getMessage();
		}
	}

	#SUBIR AL USUARIO A LA BASE DE DATOS
	#si la variable errores esta vacia significa que no agrego errores
	if ($errores == '') {

		#preparamos nuestra conexion en una variable para insertar los valores
		$statement = $conexion->prepare("INSERT INTO clientes (id_cliente,nombre,apellidos,correo,contrasena, tipo_usuario) VALUES ('',:usuario,:apellido,:correo,:pass,'CLIENTE')");
		$statement->execute(array(':usuario' => $usuario, ':apellido' => $apellido,':correo'=>$correo,':pass' => $password));#aqui ya estamos insertando los valores

		#una vez que el usuario halla agregado los datos, lo redirigimos para que inicie sesion
		header('Location: ilogin.php');		
	}

}
require 'registro.php';#esto seria como traer todo de registrate.view.php con copy and paste

?>