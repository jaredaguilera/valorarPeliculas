 <?php



session_start();

if (isset($_SESSION['usuario'])){

	$idusuario=$_SESSION['idusuario'];
	$otrosusuarios=$_SESSION['otrosusuarios'];
?>



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

	include("conexion.php");

	// establecer y realizar consulta. guardamos en variable.

	$consultaprueba = "SELECT * from valoracion val inner join pelicula pel on val.idpelicula = pel.id where val.idusuario= $idusuario order by val.valoracion desc";

	

	$resultadoprueba = mysqli_query( $conexion, $consultaprueba ) or die ( "Algo ha ido mal en la consulta a la base de datos");


	$consultapruebanulos = "SELECT pel.nombre,pel.id,pel.directorio,val.idvaloracion,val.valoracion,val.idpelicula,val.idusuario from pelicula pel left join valoracion val on pel.id=val.idpelicula where val.idusuario IN($otrosusuarios ) or val.idusuario is null GROUP by pel.nombre";

	$resultadopruebanulos = mysqli_query( $conexion, $consultapruebanulos ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	

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

	 include("header.php");?>

 <!-- Our Speakings Area Start -->

    <section class="our-speaker-area section-padding-100">

        <div class="container" ></br></br></br></br>

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

					<div class="col-12 col-sm-12 col-lg-6">

						<div>

						 	<div class="speaker-info">

							    <form name="MiForm" id="MiForm" method="post" action="guardar.php">

					

					

			                      	<?php echo "<h3>" . $columna['nombre'] . "</h3>"; ?>

			                        <?php echo "<h3>" . $columna['valoracion'] . "</h3>"; ?>

									<input type="hidden" value="<?php echo $idusuario ; ?>" id="idusuario" name="idusuario">

			                        <input type="hidden" value="<?php echo $idpelicula; ?>" id="idpelicula" name="idpelicula">

										<div class="container">

								            <input style="width: 30%;" type="text" class="form-control" name="valoracion" multiple></br>  

								            <button name="submit" class="btn btn-primary">Valorar</button>

								        </div>

									</br>

						     	</form>

	                    	</div>

						</div>

					</div>

				</div>

			<?php } ?>
				<?php  while ($columnanulos = mysqli_fetch_array( $resultadopruebanulos )) { 

        		$idpelicula= $columnanulos["id"];



        		?>

	            <div class="row">

	                <!-- Single Speaker Area -->

	             	<div class="col-12 col-sm-6 col-lg-2">

	                    <div class="single-speaker-area bg-gradient-overlay-2" data-wow-delay="300ms">

	                        <!-- Thumb -->

	                        <div class="speaker-single-thumb">

	                            <?php echo "<td> <img src=".$columnanulos['directorio']."><td>"; ?>

	                        </div>

	                    </div>

					</div>

					<div class="col-12 col-sm-12 col-lg-6">

						<div>

						 	<div class="speaker-info">

							    <form name="MiForm" id="MiForm" method="post" action="guardar.php">

					

					

			                      	<?php echo "<h3>" . $columnanulos['nombre'] . "</h3>"; ?>

			                       

									<input type="hidden" value="<?php echo $idusuario ; ?>" id="idusuario" name="idusuario">

			                        <input type="hidden" value="<?php echo $idpelicula; ?>" id="idpelicula" name="idpelicula">

										<div class="container">

								            <input style="width: 30%;" type="text" class="form-control" name="valoracion" multiple></br>  

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



			

	     	</div>

	    </div>

	</section>

	    <!-- Footer Area End -->



    <!-- **** All JS Files ***** -->

    <!-- jQuery 2.2.4 -->

    <script src="js/jquery.min.js"></script>

    <!-- Popper -->

    <script src="js/popper.min.js"></script>

    <!-- Bootstrap -->

    <script src="js/bootstrap.min.js"></script>

    <!-- All Plugins -->

    <script src="js/confer.bundle.js"></script>

    <!-- Active -->

    <script src="js/default-assets/active.js"></script>

 </body>

</html><?php }else{



  header("Location: login.php");

  exit;

}

?>