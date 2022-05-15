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
        <nav class="navbar navbar-expand-lg">
            
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

                    <form class="form-inline my-2 my-lg-0">              
                        <a class="svg" type="submit" href="src/ilogin.php"><img src="../img/user-regular.svg" alt="Iniciar seción"></a>                                               
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <?php
        include '../bd/queryes.php';
        
        $id = $_GET['id'];     
        $resp = seleccion($id);        
        foreach ($resp as $key) {            
        }
    ?>

    <main class="container">                     
        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="card">
                    <a href="descripcion.php"><img class="card-img-top" src="<?php echo $key['url_img'];?>" alt=""></a>                                                            
                </div>
            </div>
            <div class="col-lg-6 mt-4 descript"> 

            
                <h2><?php echo $key['marca'];?></h2>
                <h3>$<?php echo $key['precio'];?></h3>
                <p><?php echo $key['descripcion'];?></p>                   

                <h4>Talla</h4>  
            
                         
                <input type="radio" id="activo1" name="talla">
                <label for="activo1">23</label>
                
                <input type="radio" id="activo2"  name="talla">
                <label for="activo2">24</label>

                
                <input type="radio" id="activo3" name="talla">
                <label for="activo3">25</label>

                
                <input type="radio" id="activo4" name="talla">
                <label for="activo4">26</label>     
                
                <h4>Color</h4>                
                <input type="radio" id="activo6" name="color">
                <label for="activo6">Negro</label>
                
                <input type="radio" id="activo7"  name="color">
                <label for="activo7">Late</label>
                
                <input type="radio" id="activo8" name="color">
                <label for="activo8">Beige</label>               

                <select name="" id="funcion" class="form-control">
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
                </select>
                
                <input type="submit" id="acceso" class="btn btn-primary mt-4 pl-5 pr-5" value="Comprar">
                
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

    


    
    <!-- <script src="../js/script.js"></script> -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>