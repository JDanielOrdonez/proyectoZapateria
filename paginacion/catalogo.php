<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Zapateria</title>
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
                        <a class="svg" type="submit" href="../src/ilogin.php"><img src="../img/user-regular.svg" alt="Iniciar seción"></a>                                               
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

        <div class="row py-4">
        <?php             
            include '../bd/queryes.php';
        
            $id = $_GET['id'];     
            $tacones = catalogoSelected($id);  

            foreach ($tacones as $tacon) {                                                                
        ?>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <a href="descripcion.php?id=<?php echo $tacon['id_producto']; ?>"><img class="card-img-top imagen" src="<?php echo $tacon['url_img']?>" alt=""></a>                    
                    <p class="p-2 text-center"><?php echo $tacon['marca'] . " $" . $tacon['precio']; ?></p>                    
                </div>
            </div>            
            <?php } ?>                     
        </div>
        
        <!-- FOOTER -->
        <div class="container">
            <div class="row">
                <footer>    
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