<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/estiloslogin.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap" rel="stylesheet"> 
    </head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <form class="formularioo" method="POST" action="bdregistro.php" name="bdregistro">      <!--es lo que almacenara el proceso de enviar correos-->
                    <div class="head">                        
                        <h1 class="">Registrate</h1>
                        <img class="logo" src="../img/logo.jpg">
                        <input type="text" class="texto" placeholder="Nombre" name="nombre">
                        <input type="text" class="texto" placeholder="Apellidos" name="apellido">

                        <input type="email" placeholder="Correo" name="correo">
                        <input type="password" placeholder="Ingresa una contraseña" name="password" maxlength="10"> 
                        <input type="password" placeholder="Repite la contraseña" name="password2" maxlength="10">             
                        <?php if(!empty($errores)):/*si $errores no esta vacia(!empty) significa que hay errores */?>
                            <div class="error">
                                <ul>
                                    <?php echo $errores; ?><!--agregamos o mostramos aqui nuestra variable errores que sera un li-->

                                </ul>
                            </div>
                        <?php endif;?>                                         
                        <input type="submit" value="Iniciar">   
                    </div>            
                        
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>