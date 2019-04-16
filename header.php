 <!-- Header Area Start -->

    <header class="header-area">

        <div class="classy-nav-container breakpoint-off">

            <div class="container">

                <!-- Classy Menu -->

                <nav class="classy-navbar justify-content-between" id="conferNav">



                    <!-- Logo -->

                    <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                    

                    <!-- Navbar Toggler -->

                    <div class="classy-navbar-toggler">

                        <span class="navbarToggler"><span></span><span></span><span></span></span>

                    </div>



                    <!-- Menu -->

                    <div class="classy-menu">

                        <!-- Menu Close Button -->

                        <div class="classycloseIcon">

                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>

                        </div>

                        <!-- Nav Start -->

                        <div class="classynav">

                            <ul id="nav">

                                <li class="active"><a href="index.php">Inicio</a></li>

                               <li><a href="#">Paginas</a>

                                    <ul class="dropdown">

                                       <li><a href="contenido.php">Tu valoracion</a></li>

                                <?php 

                                      if((isset($_SESSION['categoria']))) { ?>

                                            <li><a href="upload.php">Subir pelicula</a></li>

                                      <?php }?>

                                    </ul>

                                </li>

                                

                               <li><a href="#">Perfil</a>

                                    <ul class="dropdown">

                                     <?php  if(isset($_SESSION['usuario'])){ ?>

                                         <li> <button type="button" >Bienvenid@ <?php  

                             echo $_SESSION["usuario"] . " (" . $_SESSION["categoria"] ." )"?></button></li>

                                         

                                         <li><a href="cerrarSession.php" >Cerrar session<i class="zmdi zmdi-long-arrow-right"></i></a></li>

                             



                               

                            



                           <?php }else{?>

                            <li><a href="login.php" >Iniciar session<i class="zmdi zmdi-long-arrow-right"></i></a></li>

                               <?php } ?>

                                </ul>

                                </li>

                            </ul>

                        </div>

                        <!-- Nav End -->

                    </div>

                </nav>

            </div>

        </div>

    </header>