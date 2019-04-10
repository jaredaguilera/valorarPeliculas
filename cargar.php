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
                        // Ruta donde se guardarán las imágenes que subamos
                        //$_SERVER['DOCUMENT_ROOT'].'intranet/uploads/';
                        $directorio ='intranet/uploads/';
                        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                        move_uploaded_file($_FILES['image']['tmp_name'],$directorio.$nombre_img);

                        //subir ruta archivo

                        $usuario = "root";
                        $password = "";
                        $servidor = "localhost";
                        $basededatos = "peliculas";
                        
                        // creación de la conexión a la base de datos con mysql_connect()
                        $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
                        
                        // Selección del a base de datos a utilizar
                        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                        // establecer y realizar consulta. guardamos en variable.
                        $consulta = "INSERT INTO pelicula(nombre,directorio)VALUES('$nombre','$directorio$nombre_img')";
                        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                        echo "Cargado con exito";


                } else  {
                   //si no cumple con el formato
                   echo "No se puede subir una imagen con ese formato ";
                }
        }

    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}

?>