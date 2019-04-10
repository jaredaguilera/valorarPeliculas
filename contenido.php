 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Confer - Conference Event HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php

session_start();



?>
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "peliculas";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consultaprueba = "SELECT * FROM pelicula pel LEFT JOIN valoracion val ON pel.id = val.idpelicula";
	$resultadoprueba = mysqli_query( $conexion, $consultaprueba ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	/*// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>peliculas</th>";
	echo "<th>valoracion</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultadoprueba ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['valoracion'] . "</td>";
		echo "</tr>";
	}



	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>pelicula</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id'] . "</td>
			  <td> <img src=".$columna['directorio']."><td>";
		echo "</tr>";
	}
	*/
	?>


 <!-- Breadcrumb Area Start -->
    <section class=" bg-gradient-overlay " style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">spekars</h2>
                        <nav aria-label="breadcrumb">
                        	<h2><?php echo "Hola " . $_SESSION['usuario'];
                        	$idusuario= $_SESSION['usuario']?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Our Speakings Area Start -->
    <section class="our-speaker-area section-padding-100">
        <div class="container" >
        	<?php  while ($columna = mysqli_fetch_array( $resultadoprueba )) { 
        		$idpelicula= $columna["id"];

        		?>
	            <div class="row">
	                <!-- Single Speaker Area -->
	             	<div class="col-12 col-sm-6 col-lg-2">
	                    <div class="single-speaker-area bg-gradient-overlay-2" data-wow-delay="300ms">
	                        <!-- Thumb -->
	                        <div class="speaker-single-thumb">
	                            <?php echo "<td> <img src=".$columna['directorio']."><td>"; ?>
	                        </div>
	                    </div>
					</div>
					<div class="col-1 col-sm-1 col-lg-3">
						<div>
						 	<div class="speaker-info">
							    <form name="MiForm" id="MiForm" method="post" action="guardar.php">
					
					
			                      	<?php echo "<h3>" . $columna['nombre'] . "</h3>"; ?>
			                        <?php echo "<h3>" . $columna['valoracion'] . "</h3>"; ?>
									<input type="hidden" value="<?php echo $idusuario ; ?>" id="idusuario" name="idusuario">
			                        <input type="hidden" value="<?php echo $idpelicula; ?>" id="idpelicula" name="idpelicula">
										<div class="container">
								            <input type="text" class="form-control" name="valoracion" multiple></br>  
								            <button name="submit" class="btn btn-primary">Valorar</button>
								        </div>
									</br>
						     	</form>
	                    	</div>
						</div>
					</div>
				</div>
			<?php } ?>

        
                   <!-- <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                    
                        <div class="speaker-single-thumb">
                            <img src="img/bg-img/4.jpg" alt="">
                        </div>
                       
                       <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                     
                        <div class="speaker-info">
                            <h5>Albert Barnes</h5>
                            <p>Founder</p>
                        </div>
                    </div>
             		-->

			<form name="GuardarPelicula" id="GuardarPelicula" method="post" action="cargar.php" enctype="multipart/form-data">
				<h6 class="text-center">Agregar pelicula</h6></br>
				<div class="container" >
					Nombre <input type="text" name="nombre"></br></br>
					Imagen <input type="file"id="image" name="image" multiple></br></br>
					<button name="submit" class="btn btn-primary">Guardar pelicula</button>
				</div>
			</form>
	        <form name="MiForm" id="MiForm" method="post" action="guardar.php">
	    	 	<h6 class="text-center">Valorar pelicula</h6></br>
					<div class="container">
		            	<input type="text" class="form-control" name="valoracion" multiple>
		        			</br>  
		            	<button name="submit" class="btn btn-primary">Valorar</button>
		           	</div>
				</br>
	     	</form>
	     	</div>
	    </div>
	</section>
 </body>
</html>