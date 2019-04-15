


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

<body> <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
            
                <!-- Contact Form -->
                <div class="col-12 col-lg-12">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Cargar pelicula</h4>
                            
                        </div>
                        <div class="contact_form">
                            <form name="GuardarPelicula" id="GuardarPelicula" method="post" action="cargar.php" enctype="multipart/form-data">
									<h6 class="text-center">Agregar pelicula</h6></br>
									<div class="container" >
										Nombre <input type="text" name="nombre"></br></br>
										Imagen <input type="file"id="image" name="image" multiple></br></br>
										<button name="submit" class="btn btn-primary">Guardar pelicula</button>
									</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
