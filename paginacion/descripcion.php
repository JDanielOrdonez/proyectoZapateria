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
    <link rel="stylesheet" href="../css/estilos.css">
    </head>
<body>
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
                        <a class="svg" type="submit" href="ilogin.php"><img src="../img/iniciarSecion.jpg" alt="Iniciar seción"></a>     

                    </form>
                </div>
            </div>
        </nav>
    </header>


    <main class="container">        
        <div class="row">
            <div class="col-12">
                 <div class="py-4 border-bottom">
                   <h1 class="text-center">Tacones</h1> 
                 </div>
            </div>                    
        </div>       
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <a href="descripcion.php"><img class="card-img-top" src="../imgTCNS/ca1.jpg" alt=""></a>                                                            
                </div>
            </div>
            <div class="col-lg-6 descript">                
                <h2>Bronze</h2>
                <h3>$419</h3>
                <p>Zapatos de tacón de punta abierta color negro de superficie lisa efecto piel, cinto de ajuste en tobillo.</p>                   

                <h4>Talla</h4>
                <ol>
                    <li>
                        <a class="enlace" href="#">23</a>
                        <a class="enlace" href="#">24</a>
                        <a class="enlace" href="#">25</a>
                        <a class="enlace" href="#">26</a>
                    </li>
                </ol>

                <h4>Color</h4>
                <ol>
                    <li>
                        <a class="enlace" href="#">Negro</a>
                        <a class="enlace" href="#">Late</a>
                        <a class="enlace" href="#">Beige</a>                        
                    </li>
                </ol>

                <label for="cantidad"></label>
                <select name="" id="cantidad">
                    <option value="">Cantidad</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                </select>
            </div>
        </div>
        
        
    </main>





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

    


    
    <script src="../js/scripts.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>