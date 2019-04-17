<?php

if(isset($_POST["submit"])){

    $valoracion = $_POST["valoracion"];

    $idpelicula = $_POST["idpelicula"];

    $idusuario = $_POST["idusuario"];

    if($valoracion !=null ){



               include("conexion.php");

                    // establecer y realizar consulta. guardamos en variable.



                    $consulta = "SELECT * FROM valoracion WHERE valoracion is not null and idpelicula='$idpelicula' and idusuario = ' $idusuario'";

                     $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos ");



    

                   if($row = mysqli_fetch_array( $resultado)){

                       

                       $update = "UPDATE valoracion SET valoracion = '$valoracion' WHERE idusuario = '$idusuario' AND idpelicula = '$idpelicula'";

                         $resultado = mysqli_query( $conexion, $update ) or die ( "Algo ha ido mal en el update a la base de datos");

                      //echo $update;

                        header( "Location: contenido.php" );

                        exit;

                    }else{

                        
                        echo $valoracion." , ".$idpelicula." , ".$idusuario;
                       $insert = "INSERT INTO valoracion(valoracion, idpelicula, idusuario)VALUES('$valoracion','$idpelicula','$idusuario')";

                       $resultado = mysqli_query( $conexion, $insert ) or die ( "Algo ha ido mal en el insert a la base de datos");

                        header('Location: contenido.php');

                        exit;



                    }

                   

                    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    }else{

        echo "Por favor ingrese valoracion";

         header( "refresh:4; url=contenido.php" );

                        exit;

    }

}

?>