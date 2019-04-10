<?php
if(isset($_POST["submit"])){
    $valoracion = $_POST["valoracion"];
    $idpelicula = $_POST["idpelicula"];
    $idusuario = $_POST["idusuario"];
    if($valoracion !=null ){

                $usuario = "root";
                    $password = "";
                    $servidor = "localhost";
                    $basededatos = "peliculas";
                    
                    // creación de la conexión a la base de datos con mysql_connect()
                    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
                    
                    // Selección del a base de datos a utilizar
                    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                    // establecer y realizar consulta. guardamos en variable.
                    $consulta = "SELECT * FROM valoracion WHERE valoracion is not null and idpelicula='$idpelicula' and idusuario = ' $idusuario'";
                    echo $consulta;
                    if ($consulta!=NULL) {
                       $update = "UPDATE valoracion SET valoracion = '$valoracion' WHERE idusuario = '$idusuario' AND idpelicula = '$idpelicula'";
                    }else{
                       $insert = "INSERT INTO valoracion(valoracion, idpelicula)VALUES('$valoracion','$idpelicula')";
                    }
                   
                    $resultado = mysqli_query( $conexion, $insert ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    }else{
        echo "Por favor ingrese valoracion";
    }
}
?>