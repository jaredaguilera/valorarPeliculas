<?php

$usuariocon = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuariocon) || empty($pass)){
	echo "Ingrese datos";
	header( "refresh:4; login.php" );
	exit();
}else{
 	include("conexion.php");

	$result = "SELECT * FROM usuario WHERE usuario='$usuariocon'";
   	$resultado = mysqli_query( $conexion, $result ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	if($row = mysqli_fetch_array( $resultado)){
		
		if($row['password'] == $pass){
			
			session_start();
			$_SESSION['usuario'] = $usuariocon;
			$_SESSION['idusuario'] = $row['idusuario'];
			$_SESSION['categoria'] = $row['categoria'];
			
			header("Location: contenido.php");
		}else{
				echo "Contraseña incorrecta"; 
				header( "refresh:4; login.php" );
				exit();

			//header("Location: index.php");
			//exit();
		}
	}else{
		
		echo "Usuario no registrado";
				header( "refresh:4; login.php" );
			//header("Location: index.php");
				exit();
	}
}

?>