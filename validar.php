<?php

$usuariocon = $_POST['nnombre'];
$pass = $_POST['npassword'];
echo $usuariocon .
$pass;
if(empty($usuariocon) || empty($pass)){
header("Location: index.html");
exit();
}
 $usuario = "root";
                    $password = "";
                    $servidor = "localhost";
                    $basededatos = "peliculas";
                    
                    // creación de la conexión a la base de datos con mysql_connect()
                    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
                    
                    // Selección del a base de datos a utilizar
                    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$result = "SELECT * FROM usuario WHERE usuario='$usuariocon'";
   $resultado = mysqli_query( $conexion, $result ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	if($row = mysqli_fetch_array( $resultado)){
		if($row['password'] == $pass){
			session_start();
			$_SESSION['usuario'] = $usuariocon;
			header("Location: contenido.php");
		}else{
			header("Location: index.php");
			exit();
		}

	}


?>