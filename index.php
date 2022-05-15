<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Zapateria</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg">
            
            <div class="container">  
                        
                <a href="#" class="navbar-brand">Zapatería La Güera</a>

                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menuNavegacion">
                    
                    <ul class="navbar-nav mr-auto">                                              
                    </ul>

                    <form class="form-inline my-2 my-lg-0">              
                        <a class="svg" type="submit" href="src/ilogin.php"><img src="img/user-regular.svg" alt="Iniciar seción"></a>                                               
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <main class="container">
        <div class="row">
            <div class="col">
                <div class="carousel slide" id="dani-slideshow" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        <li data-target="#dani-slideshow" data-slide-to="0"></li>
                        <li data-target="#dani-slideshow" data-slide-to="1"></li>
                        <li data-target="#dani-slideshow" data-slide-to="2"></li>
                    </ol>
                    <!--slides-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            
                            <img src="img/16.jpg" class="d-block w-100" alt="">                                                 
                        </div>
                        <div class="carousel-item">
                            <img src="img/s6.jpg" class="d-block w-100" alt="">                                                    
                        </div>
                        <div class="carousel-item">
                            <img src="img/s5.jpg" class="d-block w-100" alt="">                                                    
                        </div>
                    </div>

                    <!--controles-->
                    <a href="#dani-slideshow" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
                    </a>
                    <a href="#dani-slideshow" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="py-4 border-bottom"><!--py-4= padding en el eje de la y griega-->
                    <h1 class="text-center">Categorías</h1><!--text-center= centrar texto-->
                </div>
            </div>
        </div>


        <div class="row py-4">
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <a href="paginacion/catalogo.php?id=Sandalias"><img class="card-img-top imagen" src="img/1.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    </a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    
                    <a href="paginacion/catalogo.php?id=Tacón"><img class="card-img-top imagen" src="img/2.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card--></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="card"><!--card= tarjeta-->
                    
                   <a href="paginacion/catalogo.php?id=Tenis"><img class="card-img-top imagen" src="img/3.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card--></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-6 mb-4">
                <div class="card"><!--card= tarjeta-->
                    
                    <a href="paginacion/catalogo.php"><img class="card-img-top imagen" src="img/13.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card--></a>
                </div>
                <div class="card"><!--card= tarjeta-->
                    
                    <a href="paginacion/catalogo.php"><img class="card-img-top imagen" src="img/12.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card--></a>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-lg-6 mb-4 pull-right">
                <div class="card carb"><!--card= tarjeta-->
                    <p class="p-2 text-center">Niñas</p>
                    <a href="paginacion/catalogo.php"><img class="card-img-top imagen grande" src="img/22.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card--></a>         

      
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 mb-4">
                <div class="card carb"><!--card= tarjeta-->                    
                    <a href="paginacion/catalogo.php"><img class="card-img-top imagen" src="img/15.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card--></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-6 mb-4">
                <div class="card carb"><!--card= tarjeta-->
                    
                    <p class="p-2 text-center">Niños</p>
                    <a href="paginacion/catalogo.php"><img class="card-img-top imagen grande" src="img/14.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card--></a>
                </div>
            </div>


           
          








            <!-- Mision y vision -->
            <div class="container">
                    <div class="row mt-3">
                        <div class="col-12 col-sm-12 col-lg-6 mb-4">
                            <div class="card text-center">
                                <div class="card-header"><!--indica que sera un encabezado-->
                                    Misión 
                                </div>
                                <div class="card-body"><!--cuerpo-->
                                    <p class="card-text">
                                        Comercializar calzado de excelencia, buscando una relación comercial justa con empleados, clientes y proveedores. Lograr el más alto nivel de satisfacción del cliente, con la calificación y el aprecio de nuestros empleados. Construir una relación de confianza con los clientes que requieran elegancia y variedad en calzado formal e informal, ofreciendo productos de calidad, a precios justos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-6 mb-4">
                            <div class="card text-center">  
                                 <div class="card-header"><!--indica que sera un encabezado-->
                                    Visión
                                </div>                  
                                <div class="card-body"><!--cuerpo-->
                                  
                                    <p class="card-text">
                                        Nuestra empresa continuara siendo una empresa profesional, consolidada y con personal profesional que lleven a cabo un proceso organizativo fortalecido y afianzado en todas las áreas al igual que siempre buscando el mejor trato con el cliente. Respaldado con la plena satisfacción del cliente y una política de responsabilidad, respeto y cumplimiento hacia los proveedores y empleados.
                                    </p>
                                </div>                    
                            </div>
                        </div>
                    </div>
            </div>         

            <!-- Ubicacion y horario del local -->
        <div class="container">
            <div class="row">    
                <div class="col-12 col-sm-12 col-lg-12 mb-4">
                    
                         <section class="ubicacion" id="ubicacion">
                            <div class="contenedor">
                                <h3 class="titulo">Ubicación</h3>
                                <div class="direccion">
                                    <p class="calle">Pichucalco Chiapas<br/>Calle Aurora</p>
                                    <p class="telefono">+52 9321161110</p>
                                    <p class="correo">Mar.gutierrez.torr77@gmail.com</p>  <!--no poner correo solo dentro de la etiqueta p por seguridad-->
                                </div>
                                <div class="horarios">
                                    <h4>Horarios</h4>
                                    <p class="entre-semana">Lunes a Viernes <br/> 8:00am - 9:00pm</p>
                                    <p class="fin-semana">Sabados y Domingos <br/> 8:00am - 5:00pm</p>
                                </div>                
                            </div>
                        </section>
                </div>        
            </div>
        </div>


    </div>










        <!-- MAPA de google maps -->
        <div class="container">
            <div class="row">            
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d951.2379748186622!2d-93.11755317082914!3d17.50980409925033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ec4cddf2c608fd%3A0x96f4bd5b786e0bc9!2sAurora%2020%2C%20Centro%2C%2029520%20Pichucalco%2C%20Chis.!5e0!3m2!1ses-419!2smx!4v1622257054126!5m2!1ses-419!2smx" width="1140" height="552" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            
            </div>
        </div>

        <!-- FOOTER -->
        <div class="container">
            <div class="row">
                <footer>    <!--pie de pagina-->
                    <div class="contenedor">
                        <div class="copyright">
                            <p>Copyright JesusDaniel @ 2021</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>

    


    

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>