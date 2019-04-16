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

   	$resultado = mysqli_query( $conexion, $result ) or die ( "Aasalgo ha ido mal en la consulta a la base de datos");


	$resultotrosusuarios = "SELECT * FROM usuario WHERE usuario <> '$usuariocon'";

   	$resultadootrosusuarios = mysqli_query( $conexion, $resultotrosusuarios ) or die ( "aAlgo ha ido mal en la consulta a la base de datos");


	/*$row2 = mysqli_fetch_array( $resultadootrosusuarios );

	foreach ($row2 as $key => $value) {
		$eo=$key->idusuario;
		
	}
	echo $eo;*/
	$otrosusuarios = null;
	while ($row2 = mysqli_fetch_array( $resultadootrosusuarios )) { 
		$value = $row2['idusuario'] ;
	
		$otrosusuarios = $value . " , ". $otrosusuarios;
		
	}
	

	$otrosusuarios = substr($otrosusuarios, 0, strlen($otrosusuarios)-2);

	


	if($row = mysqli_fetch_array( $resultado)){

		

		if($row['password'] == $pass){

			

			session_start();

			$_SESSION['usuario'] = $usuariocon;

			$_SESSION['idusuario'] = $row['idusuario'];

			$_SESSION['categoria'] = $row['categoria'];

			$_SESSION['otrosusuarios'] = $otrosusuarios;

			

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