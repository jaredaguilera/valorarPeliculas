<?php

if(isset($_POST["submit"])){

    $revisar = getimagesize($_FILES["image"]["tmp_name"]);

    $nombre = $_POST['nombre'];

    if($revisar !== false || $nombre!=null){

        $image = $_FILES['image']['tmp_name'];

         // Recibo los datos de la imagen

        $nombre_img = $_FILES['image']['name'];

        $tipo = $_FILES['image']['type'];

        $tamano = $_FILES['image']['size'];

        $imgContenido = addslashes(file_get_contents($image));



        //Si existe imagen y tiene un tamaño correcto

        if (($nombre_img == !NULL) &&

         ($_FILES['image']['size'] <= 200000)) 

        {

           //indicamos los formatos que permitimos subir a nuestro servidor

               if (($_FILES["image"]["type"] == "image/gif")

               || ($_FILES["image"]["type"] == "image/jpeg")

               || ($_FILES["image"]["type"] == "image/jpg")

               || ($_FILES["image"]["type"] == "image/png"))

               {

                   /* $original =imagecreatefromjpeg($image);

                    $ancho_original = imagesx($original);

                    $alto_original = imagesy($original)

                  $ancho_original  imagecreatetruecolor(500, 740);

                    

                    imagecopyresampled($copia, $original, 0, 0, 0, 0, 500, 740, $ancho_original, $alto_original);*/



                        // Ruta donde se guardarán las imágenes que subamos

                        //$_SERVER['DOCUMENT_ROOT'].'intranet/uploads/';

                        $directorio ='intranet/uploads/';

                        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente

                        move_uploaded_file($image,$directorio.$nombre_img);



                        //subir ruta archivo

                        include("conexion.php");

                        // establecer y realizar consulta. guardamos en variable.

            
                         $consultapelicula = "SELECT * FROM pelicula WHERE nombre ='$nombre'";

                        $resultadoconsultapelicula = mysqli_query( $conexion, $consultapelicula ) or die ( "Algo ha ido mal en la consulta a la base de datos");

                         if($row = mysqli_fetch_array( $resultadoconsultapelicula)){
                              if($row['nombre'] == $nombre){
                                echo "Esa pelicula ya fue subida";
                                header( "refresh:4; url=upload.php" );
                                exit;
                                }else{
                                      $insertimagen= "INSERT INTO pelicula(nombre,directorio)VALUES('$nombre','$directorio$nombre_img')";

                                      $resultadoinsertimagen = mysqli_query( $conexion, $insertimagen ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                                    echo "Cargado con exito";

                                header( "refresh:4; url=contenido.php" );

                                exit;

                                }
                    
                          }else{

                              $insertimagen= "INSERT INTO pelicula(nombre,directorio)VALUES('$nombre','$directorio$nombre_img')";

                                      $resultadoinsertimagen = mysqli_query( $conexion, $insertimagen ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                                  
                          echo "Cargado con exito";

                          header( "refresh:4; url=contenido.php" );

                          exit;}





                } else  {

                   //si no cumple con el formato

                   echo "No se puede subir una imagen con ese formato ";
                   header( "refresh:4; url=upload.php");

                        exit;

                }

        }else{echo "La imagen es demasiado grande";

   header( "refresh:4; url=upload.php");

                        exit;
      }



    }else{

        echo "Por favor seleccione imagen a subir.";
           header( "refresh:4; url=upload.php");

                        exit;

    }

}



?>