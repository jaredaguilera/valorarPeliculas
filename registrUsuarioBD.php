<?php 

$nombre = $_POST['nombre'];

$contraseña = $_POST['contraseña'];

$repetirContraseña = $_POST['repetirContraseña'];

$user = $_POST['usuario'];

$apellido = $_POST['apellido'];

$correo = $_POST['correo'];



	if(empty($user) || empty($contraseña) || empty($repetirContraseña) ){

		echo "Debe completar los registros obligatorios";

		header( "refresh:4;  url=registroUsuario.php" );

	}else{

		

		if ($contraseña ==$repetirContraseña ) {

			include("conexion.php");

			$consulta ="SELECT * FROM usuario WHERE usuario ='$user'";

			$resultado = mysqli_query( $conexion, $consulta ) or die ( "1 Algo ha ido mal en la consulta a la base de datos");

	



				

				if($row = mysqli_fetch_array( $resultado)){

	/*foreach ($row as $key => $value) {

		echo " key :". $key. " valor :" . $value;

	}*/	

						echo "Usuario ya registrado";

						header( "refresh:4; url=registroUsuario.php" );

							exit;

				}else{

						$result = "INSERT INTO usuario (nombre, password, usuario, apellido,email)VALUES('$nombre', '$contraseña', '$user', '$apellido', '$correo')";

					

			   			$resultado = mysqli_query( $conexion, $result ) or die ( "2 Algo ha ido mal en la consulta a la base de datos");

						echo "Registro exitoso";

						$consulta2 ="SELECT * FROM usuario WHERE usuario ='$user'";

						$resultado2 = mysqli_query( $conexion, $consulta2 ) or die ( "3 Algo ha ido mal en la consulta a la base de datos");

							session_start();

							if($row2 = mysqli_fetch_array( $resultado2)){



								$_SESSION['usuario'] = $user;

								$_SESSION['idusuario'] = $row2['idusuario'];

								$_SESSION['categoria'] = $row2['categoria'];

								header( "refresh:4;  url=contenido.php" );

								exit;



							}

				}

		}else{

			echo "Las contraseñas no son iguales";

			header( "refresh:4;  url=registroUsuario.php" );

			exit;

		}

	}



?>