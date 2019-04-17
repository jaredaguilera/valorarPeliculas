   <div class="container"  ></br></br>
   	<h2 data-animation="fadeInUp" data-delay="300ms">Valoracion global!</h2></br></br>

   	<?php 
include("conexion.php");
$valoracionGlobal = "SELECT * FROM pelicula pel INNER JOIN valoracion val ON pel.id = val.idpelicula GROUP BY PEL.id ORDER by val.valoracion DESC";
$resultadoValoracionGlobal= mysqli_query( $conexion, $valoracionGlobal ) or die ( "Algo ha ido mal en la consulta a la base de datos");


$contador=null;
            while ($columna = mysqli_fetch_array( $resultadoValoracionGlobal )) { 
                $idpelicula=$columna['id'];
                $directorio=$columna['directorio'];
                $nombre=$columna['nombre'];
                $valoracion=$columna['valoracion'];
                
$contador=$contador+1;
?>
	            <div class="row">

	                <!-- Single Speaker Area -->

	             	<div class="col-12 col-sm-6 col-lg-2">

	                    <div class="single-speaker-area bg-gradient-overlay-2" data-wow-delay="300ms">

	                        <!-- Thumb -->

	                        <div class="speaker-single-thumb">

	                            <?php echo "<td> <img src=".$directorio."><td>"; ?>

	                        </div>

	                    </div>

					</div>

					<div class="col-12 col-sm-12 col-lg-6">

						<div>

						 	<div class="speaker-info">

							    <form name="MiForm" id="MiForm" method="post" action="guardar.php">

					

					

			                      	<?php  echo "<h3>" . $nombre . "</h3>"; ?>
                                    
			                        <?php 
                                       echo "<h3>" . $valoracion . "</h3>";  ?>
									

						     	</form>

	                    	</div>

						</div>

					</div>

				</div>

			<?php  } echo "Valoracion total : ". $contador?>
		</br></br>
		</div>