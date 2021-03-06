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
                            <h4>Registro</h4>
                            <p>registro para valorar peliculas</p>
                        </div>
                        <div class="contact_form">
                            <form action="registrUsuarioBD.php" method="post">
                                
                                <div class="contact_input_area">
                                    <div class="row">

                                         <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="nombre" id="nombre" placeholder="Nombre(Opcional)" >
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="apellido" id="apellido" placeholder="Apellido(Opcional)" >
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="usuario" id="usuario" placeholder="Usuario" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="contraseña" id="contraseña" placeholder="Contraseña" >
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="repetirContraseña" id="repetirContraseña" placeholder="Repetir Contraseña" >
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="correo" id="correo" placeholder="Correo Electronico(Opcional)">
                                            </div>
                                        </div>
                        
                                        <!-- Button -->
                                        <div class="col-6">
                                            <button type="submit" class="btn confer-btn">Completar registro<i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                         <div class="col-6">
                                            <a href="login.php" class="btn confer-btn">Iniciar session<i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>