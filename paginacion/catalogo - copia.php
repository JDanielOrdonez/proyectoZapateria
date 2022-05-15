<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Zapateria</title>
<!--     <link rel="stylesheet" type="text/css" href="css/estilos.css">
 -->
    <link rel="stylesheet" href="../css/layout-grid.css">
    </head>
<body>
    <?php             
        include '../bd/conexion.php';     
        
    ?>
    <?php foreach ($resultados as $filas) {                                                                
    ?>
        <?php echo $filas['marca']; ?>      
        <?php echo $filas['url_img']?>
    <?php } ?> 
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <div class="container"><!--para que todos los elementos esten centrados-->                
                <a href="#" class="navbar-brand">Zapateria La Güera</a><!---->

                <!--boton para desplegar el navbar en dispositivos moviles-->
                <!--data-target=... indicamos cual es el menu de navegacion que usaremos-->
                <!--data-toggle= collapse= indica que sera un boton que cuando cliquemos se desplegara-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menuNavegacion">
                    <!--mr-auto= para que la barra de busqueda se posicione a la derecha-->
                    <ul class="navbar-nav mr-auto">                                              
                    </ul>

                    <form class="form-inline my-2 my-lg-0"><!--form-inline= formulario de tipo en linea-->
                        
                        <!--my-2= de un tamaño extrapequeño tendremos un margen en el eje de la y de 2,,, pero se lo quitaremos en un tamaño
                        sm en adelante====my-sm-0 -->
                        <a class="btn btn-primary my-2 my-sm-0 mr-2" href="registro.php">Registrate</a><!--type= submit= para que cuando lo presionen, envien el formulario-->                       

                         <a class="btn btn-primary my-2 my-sm-0" type="submit" href="ilogin.php">Iniciar sesión</a>

                    </form>
                </div>
            </div>
        </nav>
    </header>


    <main class="container">
        <div class="row">
            <div class="col-12">
                 <div class="py-4 border-bottom"><!--py-4= padding en el eje de la y griega -->
                   <h1 class="text-center">Tacones</h1> <!-- text-center= centrar texto--> 
                 </div>
            </div>
        </div>        

        <div class="row py-4"><!--py-4= padding en el eje de la y griega-->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <a href="descripcion.php"><img class="card-img-top imagen" src="../imgTCNS/ca1.jpg" alt=""></a>                    
                    <p class="p-2 text-center">Bronze $419</p>                    
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca2.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Tokio $449</p>
                    
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca3.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Goddness $449</p>
                   
                </div>
            </div>  
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca4.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Cocktail $489</p>
                   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca5.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Taiwan $449</p>
                   
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca6.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Yuri $349</p>
                   
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca7.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Sacha $500</p>
                   
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca8.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Vania-C $600</p>
                   
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca9.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Vania $399</p>
                   
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca10.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                    <p class="p-2 text-center">Baby $600</p>
                   
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca11.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Fran $500</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca12.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Classy $419</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca13.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Beyonce $700</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca14.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Berry Basket $419</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca15.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Katrina $800</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca16.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Balk $500</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca17.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Doroty $899</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca18.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Dynamite-N $368</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca19.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Dynamite $369</p>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card"><!--card= tarjeta-->
                    <img class="card-img-top imagen" src="../imgTCNS/ca20.jpg" alt=""><!--card-img-top"= le decimos que tenemos una imagen en la parte superior de nuestra card-->
                   <p class="p-2 text-center">Dancin $600</p>
                </div>
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

    


    

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>